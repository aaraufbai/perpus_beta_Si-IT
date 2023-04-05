<?php 

include '../koneksi.php';

$id_update = $_POST['id_update'];
$tanggal = $_POST['tanggal'];
$tanggal = $_POST['tanggal'];
$nm_peminjam = $_POST['nm_peminjam'];
$nm_buku = $_POST['nm_buku'];
$no_tlp = $_POST['no_tlp'];
$jl = $_POST['jumlah'];
$pj = $_POST['pinjaman'];

mysqli_query($koneksi,"insert into t_update values('$id_update','$tanggal','$nm_peminjam','$nm_buku','$no_tlp','$jl','$pj')");

header("location:input_data.php?id=$id");








?>