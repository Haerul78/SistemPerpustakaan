<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1">
        <tr>
            <th>ID Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
        </tr>

        <?php
        $sql = "SELECT * FROM buku";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id_buku']}</td>
                    <td>{$row['judul']}</td>
                    <td>{$row['penulis']}</td>
                    <td>{$row['penerbit']}</td>
                    <td>{$row['tahun_terbit']}</td>
                    <td>{$row['stok']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada buku</td></tr>";
        }
        ?>
    </table>
</body>
</html>
