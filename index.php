<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    a {
        text-decoration: none;
        color: #black;
        margin: 10px;
    }
</style>
<body>
    <a href="inserForm.html">Tambah Data</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Buku</th>
            <th>Stok Buku</th>
            <th>Harga Buku</th>
            <th>Aksi</th>
        </tr>
        <?php
            include 'koneksi.php';
            $sql = "SELECT * FROM gudang";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id_buku']; ?></td>
                    <td><?php echo $row['nama_buku']; ?></td>
                    <td><?php echo $row['stok_buku']; ?></td>
                    <td><?php echo $row['harga_buku']; ?></td>
                    <td>
                        <a href="updateForm.php?id_buku=<?php echo $row['id_buku']; ?>">Edit</a>
                        <a href="delete.php?id_buku=<?php echo $row['id_buku']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                echo "</table>";
            } else { echo "0 results"; }
        ?>
</body>
</html>