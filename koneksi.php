<?php
//koneksi

$host = "localhost";
$user = "root";
$pass = "";
$db = "tokobuku";

$connect = mysqli_connect($host, $user, $pass, $db);


if ($connect) {
    // echo 'berhasil koneksi ke database';
} else {
    echo "gagal koneknsi ke database <br>" . mysqli_connect_error();
}

//ambil data dari tabel
$sql = "SELECT * FROM gudang";

//ambil data tokoBuku dari object result
if (mysqli_query($connect, $sql)) {
    // echo "<br> Berhasil ambil data";
} else {
    echo "<br> gagal " . mysqli_error($connect);
}