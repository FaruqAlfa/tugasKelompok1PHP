<?php
include "koneksi.php";
$nama_buku = $_GET['nama_buku'];
$stok_buku = $_GET['stok_buku'];
$harga_buku = $_GET['harga_buku'];

$sql = "INSERT INTO gudang (nama_buku, stok_buku, harga_buku) VALUES ('$nama_buku', '$stok_buku', '$harga_buku')";

if (mysqli_query($connect, $sql)) {
    echo "Sukses Menambahkan Data baru";
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
