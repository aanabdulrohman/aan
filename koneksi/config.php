<?php 
// isi nama host, username, dan password db
$koneksi = mysqli_connect("localhost", "root","", "rd_db");

// check connection
if(mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>