<?php
require('../config.php');
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users where email = '$email'";
$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) == 0) {
    echo "<script>alert('Akun tidak ditemukan, Lakukan Registrasi Terlebih Dahulu');</script>";
    echo "<script>location='../register.php';</script>";
} else {
    $user = mysqli_fetch_assoc($query);
    if (password_verify($password, $user['password'])) {
        if ($user['status'] == 1) {
            session_start();
            $_SESSION['isLogin'] = true;
            $_SESSION['user'] = $user;
            echo "<script>location='../admin/index.php';</script>";
        } else {
            echo "<script>alert('Anda gagal melakukan Login, Lakukan verifikasi terlebih dahulu');</script>";
            echo "<script>location='../login.php';</script>";
        }
    } else {
        echo "<script>alert('Anda gagal melakukan Login, Password salah');</script>";
        echo "<script>location='../login.php';</script>";
    }
}
