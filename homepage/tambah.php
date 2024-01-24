<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Perpustakaan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 60%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        a {
            text-decoration: none;
            color: #3498db;
            display: block;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #2ecc71;
            color: #fff;
            padding: 12px 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #27ae60;
        }
    </style>
</head>

<body>
    <form method="post" action="tambah_aksi.php">
        <h2>Tambah Data Peminjaman Buku</h2>
        <a href="index.php"> KEMBALI</a>
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="number" name="id_peminjaman"></td>
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
                        <option value="Solat jenazah">Shalat jenazah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Peminjam</td>
                <td><input type="text" name="nama_peminjam"></td>
            </tr>
            <tr>
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tgl_pinjam"></td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tgl_kembali"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status" id="status">
                        <option value="Sudah Dikembalikan" selected>Sudah Dikembalikan</option>
                        <option value="Belum Dikembalikan">Belum Dikembalikan</option>
                        <option value="Hilang">Hilang</option>
                        <option value="Rusak">Rusak</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>
