<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
</head>
<body>
    <h1>Daftar Anggota</h1>
    <table border="1">
        <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
        </tr>

        <?php
        $sql = "SELECT * FROM anggota";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id_anggota']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['alamat']}</td>
                    <td>{$row['nomor_telepon']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada anggota</td></tr>";
        }
        ?>
    </table>
</body>
</html>
