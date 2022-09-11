<html>
    <head>
        <title>Data Gudang</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Buku</th>
                <th>Stok Buku</th>
                <th>Harga Buku</th>
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
                    </tr>
                    <?php
                    }
                    echo "</table>";
                } else { echo "0 results"; }
            ?>
        </table>
    </body>
</html>