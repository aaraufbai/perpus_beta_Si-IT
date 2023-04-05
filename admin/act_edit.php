<?php 

include '../koneksi.php';

$id = $_POST['id_update'];
$peminjam = $_POST['nm_peminjam'];
$nm_buku = $_POST['nm_buku'];
$no_tlp = $_POST['no_tlp'];
$jl = $_POST['jumlah'];
$pj = $_POST['pinjaman'];

mysqli_query($koneksi,"update t_update set nm_peminjam='$peminjam', nm_buku='$nm_buku', no_tlp='$no_tlp', jumlah='$jl', pinjaman='$pj' where id_update='$id'");

header("location:update.php?a=us");

?>