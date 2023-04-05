<?php

//nama host,Uasername,password dan nama database
$koneksi = mysqli_connect("localhost","root","","db_ukk");

//Periksa Koneksi
if (mysqli_connect_errno()){
            echo "Koneksi database gagal:" .mysqli_connect_error();
}

?>