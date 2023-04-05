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

mysqli_query($koneksi,"insert into t_buku values('$id_buku','$nm_buku','$penulis','$penerbit','$th','$halaman','$lr','$acak')");

header("location:input_buku.php?id_buku=$id_buku");


