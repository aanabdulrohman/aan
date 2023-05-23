<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="../index.php">Beranda</a><br><br>

  <form action="add.php" method="post" name="form1">
    <table>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>email</td>
        <td><input type="email" name="email"></td>
      </tr>
      <td></td>
      <td><input type="submit" name="Submit" value="Tambah"></td>
    </table>
  </form>

  <?php 
  // check if form submitted, insert form data into users table.
  if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    // include database connection file
    include_once("../config/config.php");

    // insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO users(name,email) VALUES ('$name', '$email')");

    // show message when users added
    echo "User added successfully. <a href='../index.php'>View Users</a>";

  }
  ?>
</body>
</html>