<?php 
    // menghubungkan database via file config.php
    include_once("config.php");

    // fetch all user data form database
    $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="atyle.css" />
    <title>Aan abdul rohman</title>
  </head>
  <body>
    <a href="tambah.php">Tambah baru</a><br><br>
<table width="80%" border="1">
  <tr>
    <th>Nama</th>
    <th>No hp</th>
    <th>Email</th>
    <th>Update</th>
  </tr>

  <?php 
  while($user_data = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['hp']."</td>";
    echo "<td>".$user_data['email']."</td>";
    echo "<td>".$user_data['update']."</td>";
    echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
  }
  ?>

</table>
  </body>
</html>