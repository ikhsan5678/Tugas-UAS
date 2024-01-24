<!DOCTYPE html>
<html>
<head>
    <title>Buku Perpustakaan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border-radius: 4px;
        }

        a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
 
    <h2>Edit Data Peminjaman Buku</h2>
    <a href="index.php">KEMBALI</a>

    <?php
    include 'koneksi.php';
    // Menggunakan mysqli_real_escape_string untuk mencegah SQL injection
    $id_peminjaman = mysqli_real_escape_string($koneksi, $_GET['id_peminjaman']);
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman='$id_peminjaman'";
    $data = mysqli_query($koneksi, $query);

    while ($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>            
                    <td>ID Peminjaman</td>
                    <td>
                        <!-- Menampilkan nilai id_peminjaman -->
                        <input type="hidden" name="id_peminjaman" value="<?php echo htmlspecialchars($d['id_peminjaman']); ?>">
                        <?php echo htmlspecialchars($d['id_peminjaman']); ?>
                    </td>
                </tr>
                <tr>
                <td>Judul Buku</td>
                <td>
                <select name="judul_buku" id="judul_buku">
                        <option value="Siksa Neraka" selected>Siksa Neraka</option>
                        <option value="Siksa Kubur">Siksa Kubur</option>
                        <option value="Malaikat Subuh" selected>Malaikat Subuh</option>
                        <option value="Waktu Maghrib">Waktu Maghrib</option>
                        <option value="Manfaat Shalat tahajud" selected>Manfaat Shalat tahajud</option>
                        <option value="Zikir Pagi & Petang">Zikir Pagi & Petang</option>
                        <option value="Hari Kiamat">Hari Kiamat</option>
                        <option value="Sunnah Rosul">Sunnah Rosul</option>
                        <option value="Kisah 25 Nabi">Kisah 25 Nabi</option>
                        <option value="Israk' mi'raj">Israk' mi'raj</option>
                        <option value="Mandi zunnub">Mandi Zunnub</option>
                        <option value="zus amma">zus amma</option>
                        <option value="Solat jenazah">Solat jenazah</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>Nama Peminjam</td>
                    <td><input type="text" name="nama_peminjam" value="<?php echo htmlspecialchars($d['nama_peminjam']); ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Pinjam</td>
                    <td><input type="date" name="tgl_pinjam" value="<?php echo htmlspecialchars($d['tgl_pinjam']); ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td><input type="date" name="tgl_kembali" value="<?php echo htmlspecialchars($d['tgl_kembali']); ?>"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option value="Sudah Dikembalikan" <?php if ($d['status'] == 'Sudah Dikembalikan') echo 'selected'; ?>>Sudah Dikembalikan</option>
                            <option value="Belum Dikembalikan" <?php if ($d['status'] == 'Belum Dikembalikan') echo 'selected'; ?>>Belum Dikembalikan</option>
                            <option value="Hilang" <?php if ($d['status'] == 'Hilang') echo 'selected'; ?>>Hilang</option>
                            <option value="Rusak" <?php if ($d['status'] == 'Rusak') echo 'selected'; ?>>Rusak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>       
            </table>
        </form>
        <?php 
    }
    ?>
 
</body>
</html>
