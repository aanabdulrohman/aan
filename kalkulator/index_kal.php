<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
  <link rel="stylesheet" href="../css/stylee.css">
</head>
<body>

<!-- function -->
  <?php 
  if(isset($_POST['hitung'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];
    switch($operasi){
      case'tambah':
        $hasil = $bil1+$bil2;
        break;
        case 'kurang' :
          $hasil = $bil1-$bil2;
          break;
          case 'kali' :
            $hasil = $bil1 * $bil2;
            break;
            case 'bagi' :
              $hasil = $bil1 / $bil2;
            break;
    }
  }
  ?>

<a href="../index.html">Back to Home</a>
<div class="kalkulator">
<h2 class="judul">Kalkulator Sederhana</h2>

<form action="index_kal.php" method="post">
  
<input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Masukan bilangan pertama">
  <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Masukan bilangan kedua">

<select name="operasi" class="opt">
  <option value="tambah">+</option>
  <option value="kurang">-</option>
  <option value="kali">x</option>
  <option value="bagi">/</option>
</select>

<input type="submit" name="hitung" value="Hitung" class="tombol">
</form>

<?php 
if(isset ($_POST['hitung'])){
?>
<input type="number" value="<?= $hasil; ?>" class="bil">
<?php } ?>
</div>
</body>
</html>