<?php
$mahasiswa = ["Azam Choirul Anam", "2110803016", "Sistem Informasi", "azamchoirulanam@gmail.com"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Coba Array</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><?php print $mhs; ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>