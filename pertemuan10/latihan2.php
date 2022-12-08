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
    <li><?= $mahasiswa[0]; ?></li>
    <li><?php print $mahasiswa[1]; ?></li>
    <li><?= $mahasiswa[2]; ?></li>
    <li><?php print $mahasiswa[3]; ?></li>
  </ul>
</body>

</html>