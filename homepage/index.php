<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buku Perpustakaan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h2 {
            color: #3498db;
            margin-top: 20px;
        }

        a {
            display: block;
            text-decoration: none;
            color: #3498db;
            margin-bottom: 20px;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td a {
            margin-right: 5px;
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            border-radius: 3px;
        }

        td a.edit {
            background-color: #2ecc71;
        }

        td a.delete {
            background-color: #e74c3c;
        }

        td a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Data Peminjaman Buku Perpustakaan</h2>
    <a href="tambah.php">Tambah Data Peminjaman Buku</a>

    <table border="3">
        <tr>
            <th>No</th>
            <th>ID Peminjaman</th>
            <th>Judul Buku</th>
            <th>Nama Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>OPSI</th>
        </tr>

        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from peminjaman");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_peminjaman']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['nama_peminjam']; ?></td>
                <td><?php echo $d['tgl_pinjam']; ?></td>
                <td><?php echo $d['tgl_kembali']; ?></td>
                <td><?php echo $d['status']; ?></td>
                
                <td>
                    <a class="edit" href="edit.php?id_peminjaman=<?php echo $d['id_peminjaman']; ?>">EDIT</a>
                    <a class="delete" href="hapus.php?id_peminjaman=<?php echo $d['id_peminjaman']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>
