<?php
$mahasiswa = [
  ["Azam Choirul Anam", "2110803016", "Sistem Informasi", "azamchoirulanam@gmail.com"],
  ["Novita", "23224345", "Teknik Informatika", "novita2211@gmail.com"],
  ["Siti Arbaina", "223445564", "PGMI", "arbaina2505@gmail.com"],
] ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
      <li><?php echo $mhs[0]; ?></li>
      <li><?php echo $mhs[1]; ?></li>
      <li><?php echo $mhs[2]; ?></li>
      <li><?php echo $mhs[3]; ?></li>
    </ul>
  <?php } ?>
</body>

</html>