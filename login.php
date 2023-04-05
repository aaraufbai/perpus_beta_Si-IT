<?php

session_start();

//menghubungkan dengan koneksi  

include './koneksi.php';

//menangkap data yang dikirim dari form  

$username = $_POST['username'];
$password = $_POST['password']; 

//fungsi md5 di atas untuk enkripsi kedalam bentuk md5 

//menyeleksi data admin dengan username dan password yang sesuai  

$data = mysqli_query($koneksi, "select * from t_login where username='$username'");

//menghitung jumlah data yang ditemukan  

//cek jika username dan password yang di input di temukan, buat session dan alihkan halaman ke halaman admin(folder admin),  
//jika tidak, alihkan kembali ke halaman depan sambil mengirim pesan gagal  

if (mysqli_num_rows($data) === 1) {

    $row = mysqli_fetch_assoc($data);

    if (password_verify($password, $row["password"])) {
        if ($row['level'] == 'admin') {
            $_SESSION['level'] = 'admin';
            $_SESSION['username'] = $username;
            // $_SESSION['alert_shown'] = false;
            header('location:./admin/index.php');
        } elseif ($row['level'] == 'kepsek') {
            $_SESSION['level'] = 'kepsek';
            $_SESSION['username'] = $username;
            header('location:./pemilik/index.php');
        }
    }else{
        header('location:index.php?data=gagal');
    }
}
