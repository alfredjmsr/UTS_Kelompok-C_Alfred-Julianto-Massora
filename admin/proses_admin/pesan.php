<?php
include("../config.php");


if (isset($_POST['add'])) {

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
        echo "<script> alert('Transaksi Berhasil, Total pembayaran adalah');  </script>";
        echo "<script>location='../pesan.php';</script>";
    } else {
        echo "<script> alert('Tambah data gagal');  </script>";
        echo "<script>location='../pesan.php';</script>";
    }
} else if (isset($_POST['edit'])) {
    $id = $_POST['id_transaksi'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $notelp = $_POST['telp'];
    $berat = $_POST['berat'];
    $tanggal = $_POST['tanggal'];
    $harga = 100000 * $berat;

    $sql = "update  transaksi set nama='$nama', jenis_barang ='$jenis', no_telp='$notelp', 
    berat='$berat', tanggal='$tanggal', harga='$harga' where id_transaksi ='$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "<script> alert('Data Berhasi di Edit');  </script>";
        echo "<script>location='../pesan.php';</script>";
    } else {
        echo "<script> alert('Data Gagal di Edit');  </script>";
        echo "<script>location='../pesan.php;</script>";
    }
} else if (isset($_POST['hapus'])) {

    $idu = $_POST['id_transaksi'];
    $sql = "delete from transaksi where id_transaksi='$idu'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "<script> alert('Hapus data sukses ');  </script>";
        echo "<script>location='../pesan.php';</script>";
    } else {
        echo "<script> alert('Hapus data GAGAL');  </script>";
        echo "<script>location='./pesan.php';</script>";
    }
}
