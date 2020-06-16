<?php
    $nim =$_GET['id'];
    $koneksi->query("delete from tb_anggota where nim = '$nim'");
?>
<script type="text/javascript">
        window.location.href="?page=anggota";
</script>