<?php
include '../koneksi.php';
$id = $_GET ['id_update'];
mysqli_query($koneksi,"delete from t_update where id_update='$id'");
header("location:update.php?id=$id");
?>