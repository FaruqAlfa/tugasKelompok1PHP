<?php
include "koneksi.php";

$id_buku = $_GET['id_buku'];
$nama_buku = $_GET['nama_buku'];
$stok_buku = $_GET['stok_buku'];
$harga_buku = $_GET['harga_buku'];

$sql = "INSERT INTO gudang(id_buku, nama_buku, stok_buku, harga_buku)
VALUES ('$id_buku, $nama_buku, $stok_buku, $harga_buku')";

if (mysqli_query($connect, $sql)) {
    echo "Data Berhasil Di Tambahkan";
} else {
    echo "Err" . mysqli_error($connect);
}
