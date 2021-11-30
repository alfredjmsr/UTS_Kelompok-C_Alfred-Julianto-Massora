<?php
require('../config.php');

if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $sql = "SELECT * FROM users where code_verif = '$code'";


    $query = mysqli_query($con, $sql);


    if (mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_assoc($query);
        $id = $user['id_user'];
        $sql =  "UPDATE users set status=1 where id_user='$id'";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "<script>alert('Verifikasi Berhasil, Silahkan Login');</script>";
            echo "<script>location='../index.php';</script>";
        } else {
            echo "<script>alert('Verifikasi Gagal');</script>";
            echo "<script>location='../index.php';</script>";
        }
    } else {
        echo "<script>alert('Verifikasi Gagal, terjadi kesalahan');</script>";
        echo "<script>location='../index.php';</script>";
    }
} else {
    echo "<script>alert('Verifikasi Gagal, terjadi kesalahan');</script>";
    echo "<script>location='../index.php';</script>";
}
