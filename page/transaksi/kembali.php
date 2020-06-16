<?php

$id=$_GET['id'];
$judul=$_GET['judul'];

$sql = $koneksi -> query ("update tb_transaksi set status = 'kembali' where id ='$id'");

$sql = $koneksi -> query ("update tb_transaksi set jumlah_buku = (jumlah_buku=1) where judul ='$judul'");
?>
<script type="text/javascript">
	alert("Proses Kembalikan Buku Berhasil");
	window.location.href="?page=transaksi";
</script>
<?php

?>