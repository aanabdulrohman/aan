<?php 
    // koneksi database
    include '../koneksi/config.php';

  // menangkap data yang di kirim dari form
    $name = $_POST['name'];
    $email = $_POST['email'];

    // memasukan data ke database
    mysqli_query($koneksi, "INSERT INTO users VALUES ('','$name', '$email')");

    // mengalihkan ke halaman utama
    header("Location:../view/index_curd.php")

    // kurang notif jika data sudah masuk

  ?>