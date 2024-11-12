<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
</head>
<body>
    <h1>Data Peminjaman</h1>
    <table border="1">
        <tr>
            <th>ID Peminjaman</th>
            <th>ID Anggota</th>
            <th>ID Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
        </tr>

        <?php
        $sql = "SELECT * FROM peminjaman";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id_peminjaman']}</td>
                    <td>{$row['id_anggota']}</td>
                    <td>{$row['id_buku']}</td>
                    <td>{$row['tanggal_pinjam']}</td>
                    <td>{$row['tanggal_kembali']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data peminjaman</td></tr>";
        }
        ?>
    </table>
</body>
</html>
