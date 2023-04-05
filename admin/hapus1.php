<?php
include '../koneksi.php';
$id = $_GET ['id_buku'];
mysqli_query($koneksi,"delete from t_buku where id_buku='$id'");
header("location:rak_buku.php?id_buku=$id");
?>