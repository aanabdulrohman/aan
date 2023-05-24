<?php 
// include database connection file
$include_once = ("../config/config.php");

// check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  //update user data
  $result = mysqli_query($mysqli, "UPDATE users SET name='$name', email='$email' WHERE id='$id'");

  // redirect to homepage to display update user in list
  header("Location: ../index.php");
}
?>

<?php 

include_once("../config/config.php");
// Display selected user data based on id
// getting id form url
$id = $_GET['id'];

// Fetch user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
  $name = $user_data['name'];
  $email = $user_data['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User Data</title>
</head>
<body>
  <!-- link to home page -->
  <a href="../index.php"></a><br><br>

<form action="edit.php" name="update_user" method="post">

<table border="0">
 <tr>
  <td>Nama</td>
  <td><input type="text" name="name" value=<?= $name; ?>></td>
 </tr>
 <tr>
  <td>Emial</td>
  <td><input type="email" name="email" value="<?= $email; ?>"></td>
 </tr>
 <tr>
  <td><input type="hidden" name="id" value="<?= $_GET['id']; ?>"></td>
  <td><input type="submit" name="update" value="Update"></td>
 </tr>
</table>

</form>
</body>
</html>