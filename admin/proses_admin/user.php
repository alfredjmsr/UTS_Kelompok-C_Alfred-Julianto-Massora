<?php
include("../config.php");







if (isset($_POST['add'])) {

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $code = md5($email . $password);

    $sql = "INSERT INTO users (nama_lengkap,username,email,password,code_verif,no_telp,alamat)
        VALUES('$nama','$username','$email','$password','$code','$notelp','$alamat')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "<script> alert('Tambah data Sukses');  </script>";
       echo "<script>location='../user.php';</script>";
    } else {
        echo "<script> alert('Tambah data gagal');  </script>";
       echo "<script>location='../user.php';</script>";
    }
} else 
    if (isset($_POST['edit'])) {

    $iduser = $_POST['id_user'];
    $passbaru = $_POST['password'];

    $sqlpass = "SELECT * FROM users where id_user = '$iduser'";
    $cekpass = mysqli_query($con, $sqlpass);
    $user = mysqli_fetch_assoc($cekpass);

    if (password_verify($passbaru, $user['password'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $notelp = $_POST['notelp'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $status = $_POST['status'];
        $sql = "update users set username='$username', nama_lengkap='$nama', email='$email', no_telp='$notelp',status='$status',alamat='$alamat' where id_user='$iduser'";
        $query = mysqli_query($con, $sql);
    } else {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];
        $notelp = $_POST['notelp'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $passbaru = password_hash($passbaru, PASSWORD_DEFAULT);
        $code = md5($email . $passbaru);
        $sql = "update users set username='$username', nama_lengkap='$nama', email='$email', no_telp='$notelp',
        status='$status',alamat='$alamat',password='$passbaru',code_verif='$code' where id_user='$iduser'";
        $query = mysqli_query($con, $sql);
    }

    if ($query) {
        echo "<script> alert('Edit data user Sukses');  </script>";
        echo "<script>location='../user.php';</script>";
    } else {
        echo "<script> alert('Edit data user gagal');  </script>";
        echo "<script>location=../'user.php';</script>";
    }
} else if (isset($_POST['hapus'])) {

    $idu = $_POST['id_user'];
    $sql = "delete from users where id_user='$idu'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "<script> alert('Hapus data sukses ');  </script>";
        echo "<script>location='../user.php';</script>";
    } else {
        echo "<script> alert('Hapus data GAGAL');  </script>";
        echo "<script>location='./user.php';</script>";
    }
}
