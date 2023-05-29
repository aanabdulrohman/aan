
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data User</title>
</head>
<body>
  <!-- link to home page -->
  <a href="../view/index_curd.php"></a><br><br>

  
<?php 

// koneksi ke database
include '../koneksi/config.php';

// Display selected user data based on id
// getting id form url
$id = $_GET['id'];

// Fetch user data based on id
$data = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");

// looping data
while($d = mysqli_fetch_array($data)){
  ?>
<form action="../controller/edit_aksi.php" method="post">

<table border="0">
 <tr>
  <td>Nama</td>
  <td><input type="text" name="name" value="<?= $d['name']; ?>"></td>
  <input type="hidden" name="id" value="<?= $d['id']; ?>">
  
 </tr>
 <tr>
  <td>Email</td>
  <td><input type="email" name="email" value="<?= $d['email']; ?>"></td>
 </tr>
 <tr>
  <td><input type="submit" name="update" value="Update"></td>
 </tr>
</table>
</form>
<?php 
}
?>
</body>
</html>