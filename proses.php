<?php
include_once "database.php";

$username=$_GET['username'];
$password=$_GET['password'];

$sql="SELECT * FROM kunci WHERE username='$username' AND password='$password'";
//Proses sql
$q=mysqli_query($konek,$sql)or die("Error $sql");
//ambil jumlah data
$jmldata=mysqli_num_rows($q);
//jika data > 0 maka data ada dan login sukses
//jika data == 0 maka data tidak ada dan login gagal
if($jmldata > 0){
//login sukses
//aktifkan sesi
session_start();
//ambil data dari database
$data=mysqli_fetch_assoc($q);
//buat variabel untuk sesi
$_SESSION['id']=session_id();
$_SESSION['username']=$data['username'];
$_SESSION['password']=$data['password'];
//redirect ke halaman home
header("location:homepage/index.php");
}else{
//login gagal
//kembalikan ke halaman login
echo "<script> alert('Login Gagal, Coba Lagi !');
window.location.assign('index.html'); </script>";
}