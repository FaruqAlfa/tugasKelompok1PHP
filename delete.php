<?php 
    include 'koneksi.php';
    $id_buku = $_GET['id_buku'];
    $sql = "DELETE FROM gudang WHERE id_buku = $id_buku";
    if (mysqli_query($connect, $sql)) {
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>