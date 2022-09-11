<?php 
    include 'koneksi.php';
    $id_buku = $_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $stok_buku = $_POST['stok_buku'];
    $harga_buku = $_POST['harga_buku'];
    $sql = "UPDATE gudang SET nama_buku = '$nama_buku', stok_buku = '$stok_buku', harga_buku = '$harga_buku' WHERE id_buku = $id_buku";
    if (mysqli_query($connect, $sql)) {
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>