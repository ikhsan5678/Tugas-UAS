<?php
require_once "koneksi.php";
$id_peminjaman = $_GET['id_peminjaman'];
$delete = "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";
if (mysqli_query($koneksi, $delete)) {
    echo "<script>alert('Data Sudah Dihapus');window.location.assign('index.php');</script>";
} else {
    echo "<script>alert('Gagal Menghapus Data');window.location.assign('index.php');</script>";
}
?>
