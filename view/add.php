<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="../view/index.php">Beranda</a><br><br>

  <form action="../controller/tambah_aksi.php" method="post" name="form1">
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
</body>
</html>