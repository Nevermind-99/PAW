<?php include'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data master supplier</title>
</head>
<body>
    <h2>Data master supplier</h2>
    <a href="tambah.php">++ tambah data</a><br><br>

    <table border="1" cellpanding="8">
        <tr>
            <th>ID</th>
            <th>nama</th>
            <th>telepon</th>
            <th>alamat</th>
            <th>aksi</th>
        </tr>

        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM supplier" );
        while ($data =mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".$data['id']."</td>
                    <td>".$data['nama']."</td>
                    <td>".$data['telp']."</td>
                    <td>".$data['alamat']."</td>
                
                    <td>
                     <a href= ' edit.php?id=".$data['id']."'>edit</a> |
                     <a href= ' hapus.php?id=".$data['id']."' onclick='return comfirm(\"yakin mau hapus data ini ???\"'>hapus</a>
            </tr>";
        }
        ?>
    </table>
</body>
</html>