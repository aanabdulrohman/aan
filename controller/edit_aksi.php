<?php 
// include database connection file
include '../koneksi/config.php';

// MENANGKAP DATA YANG DIKIRIM DARI FORM EDIT.PHP
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  //update user data
  mysqli_query($koneksi, "UPDATE users SET name='$name', email='$email' WHERE id='$id'");

  // redirect to homepage to display update user in list
  header("Location: ../view/index.php");

  // tidak bisa muncul full name

?>

