<?php 

include '../koneksi.php';

$id = $_POST['id_buku'];
$nm_buku = $_POST['nm_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$th = $_POST['th'];
$halaman = $_POST['halaman'];
$lr = $_POST['lorong'];
$acak = $_POST['acak'];

mysqli_query($koneksi,"update t_buku set nm_buku='$nm_buku', penulis='$penulis', penerbit='$penerbit', th='$th', halaman='$halaman', lorong='$lr', acak='$acak' where id_buku='$id'");

header("location:rak_buku.php");

?>