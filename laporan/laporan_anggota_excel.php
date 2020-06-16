<?php

    $koneksi = new msqli("localhost","root","","db_perpustakaan");

    $filename = "anggota_excel-(".date('d-m-Y').").xls";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type : application/vdn.ms-excel");

?>

<h2>Laporan Anggota</h2>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
		<th>Program Studi</th>
        
    </tr>

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
											
	</tr>

    <?php } ?>

</table>