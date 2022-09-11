<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h1>Update Data</h1>
    <?php
        include 'koneksi.php';
        $id_buku = $_GET['id_buku'];
        $sql = "SELECT * FROM gudang WHERE id_buku = $id_buku";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <form action="update.php" method="POST">
                <input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>">
                <label for="nama_buku">Nama Buku</label>
                <input type="text" name="nama_buku" value="<?php echo $row['nama_buku']; ?>">
                <label for="stok_buku">Stok Buku</label>
                <input type="text" name="stok_buku" value="<?php echo $row['stok_buku']; ?>">
                <label for="harga_buku">Harga Buku</label>
                <input type="text" name="harga_buku" value="<?php echo $row['harga_buku']; ?>">
                <input type="submit" value="Update">
            </form>
            <?php
            }
        } else { echo "0 results"; }
    ?>
</body>
</html>