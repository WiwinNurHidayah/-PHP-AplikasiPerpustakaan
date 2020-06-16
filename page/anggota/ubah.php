<?php

	$nim = $_GET['id'];
	$sql = $koneksi->query("select * from tb_anggota where nim = '$nim'");
    $tampil = $sql->fetch_assoc();
    $jkl = $tampil['jk'];
	

?>
<div class="panel panel-default">
<div class="panel-heading">
	Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nim</label>
                                            <input class="form-control" name="nim" value="<?php echo $tampil['nim']?>" readonly />
                                        </div>
										
										<div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir']?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value='l' name='jk'<?php echo($jkl=='l')?"checked":"";?> /> Laki-laki 
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"value='p'name='jk'<?php echo($jkl=='p')?"checked":"";?> /> Perempuan 
                                            </label>
                                        </div>

										<div class="form-group">
                                            <label>Program Studi</label>
                                            <input class="form-control" name="prodi" value="<?php echo $tampil['prodi']?>"/>
                                        </div>
										
										<div>
										
											<input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
										</div>
								</div>
								
								</form>
							</div>
</div>
</div>
</div>

<?php

	$nama = @$_POST ['nama'];
	$tempat_lahir = @$_POST ['tempat_lahir'];
	$tgl_lahir = @$_POST ['tgl_lahir'];
	$jk = @$_POST ['jk'];
	$prodi = @$_POST ['prodi'];
	
	
	$simpan = @$_POST ['simpan'];
	
	if($simpan) {
        $sql = $koneksi->query("update tb_anggota set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', 
        prodi='$prodi' where nim='$nim'");
		
	if ($sql) {
		?>
			<script type="text/javascript">
				alert ("Data Berhasil Diubah");
				window.location.href="?page=anggota";
				
			</script>
		<?php
		}
	}

?>