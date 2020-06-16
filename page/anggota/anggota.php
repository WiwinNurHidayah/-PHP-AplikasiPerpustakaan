
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
											<th>Program Studi</th>
											<?php
											if (isset ($_SESSION['admin'])) { ?>
											<th>Aksi</th>
											<?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php
										
											$no = 1;
										
											$sql = $koneksi->query("select * from tb_anggota");
											
											while ($data=$sql->fetch_assoc()) {

                                            $jk = ($data['jk'] == 'l')?"Laki-laki":"Perempuan";
                                            
										?>
									
										<tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nim'];?></td>
											<td><?php echo $data['nama'];?></td>
											<td><?php echo $data['tempat_lahir'];?></td>
											<td><?php echo $data['tgl_lahir'];?></td>
											<td><?php echo $jk;?></td>
											<td><?php echo $data['prodi'];?></td>
											<?php
											if (isset ($_SESSION['admin'])) { ?>
											<td>
											
												<a href="?page=anggota&aksi=ubah&id=<?php echo $data['nim']; ?>" class="btn btn-info" >Ubah</a>

												<a onclick="return confirm('Hapus data ini?')"href="?page=anggota&aksi=hapus&id=<?php echo $data['nim']; ?>" class="btn btn-danger" >Hapus</a>

											</td>
											<?php } ?>
										</tr>
										
										
										<?php } ?>
									</tbody>

								</table>

								</div>

								<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-top: 8px;">Tambah Data</a>

								<a href="./laporan/laporan_anggota_excel.php" target="blank" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i>ExportToExcel</a>

								</div>
						</div>
					</div>
		</div>