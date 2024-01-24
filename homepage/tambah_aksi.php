<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_peminjaman = $_POST['id_peminjaman'];
$judul_buku = $_POST['judul_buku'];
$nama_peminjam = $_POST['nama_peminjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$status = $_POST['status'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into peminjaman values('$id_peminjaman','$judul_buku','$nama_peminjam','$tgl_pinjam','$tgl_kembali','$status')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>