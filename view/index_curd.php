<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Aan abdul rohman</title>
  </head>
  <body>
    <a href="../index.html">Back to Home</a><br>
    <a href="../view/add.php">Tambah baru</a><br><br>
<table width="80%" border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Update</th>
  </tr>

  <?php 
    // menghubungkan database via file config.php
    include '../koneksi/config.php';

    // fetch all user data form database
    $no = 1;
    $data = mysqli_query($koneksi, "select * from users");

    // looping data form db
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $d['name']; ?></td>
        <td><?= $d['email']; ?></td>
        <td>
          <a href="../view/edit.php?id=<?= $d['id']; ?>">Edit</a>
          <a href="../controller/hapus_aksi.php?id=<?= $d['id']; ?>">Hapus</a>
        </td>
      </tr>
      <?php 
    }  
      ?>

</table>
  </body>
</html>
