<?php 
// koneksi ke database
include '../koneksi/config.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "delete from users where id='$id'");

// mengalihkan halaman ke index
header ("location:../view/index_curd.php")
?>