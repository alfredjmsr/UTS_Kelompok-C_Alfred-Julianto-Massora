<?php
include("config.php");


if (isset($_POST['pesan'])) {

    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $notelp = $_POST['telp'];
    $berat = $_POST['berat'];
    $tanggal = $_POST['tanggal'];
    $harga = 100000 * $berat;

    $sql = "INSERT INTO transaksi (nama,no_telp,jenis_barang,tanggal,berat,harga)
        VALUES('$nama','$notelp','$jenis','$tanggal','$berat','$harga')";
    $query = mysqli_query($con, $sql);


    if ($query) {
        echo "<script> alert('Transaksi Berhasil, Total pembayaran adalah'.$harga);  </script>";
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script> alert('Tambah data gagal');  </script>";
        echo "<script>location='index.php';</script>";
    }
}
