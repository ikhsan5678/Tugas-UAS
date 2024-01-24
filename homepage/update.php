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
 
// update data ke database
mysqli_query($koneksi,"update peminjaman set judul_buku='$judul_buku', nama_peminjam='$nama_peminjam', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali', status='$status' where id_peminjaman='$id_peminjaman'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>