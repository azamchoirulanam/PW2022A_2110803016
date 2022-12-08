<?php
$mahasiswa = [
  [
    "nama" => "Azam Choirul Anam",
    "NIM" => "2110803016",
    "Jurusan" => "Sistem Informasi",
    "email" => "azamchoirulanam@gmail.com"
  ],
  [
    "nama" => "Novita",
    "NIM" => "2322434554",
    "Jurusan" => "Teknik Informatika",
    "email" => "novita2211@gmail.com"
  ],
  "nama" => "Siti Arbaina",
  "NIM" => "2354433564",
  "Jurusan" => "PGMI",
  "email" => "arbaina2505h@gmail.com"
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
      <li>Nama : <?php echo $mhs["nama"]; ?></li>
      <li>NIM : <?php echo $mhs["NIM"]; ?></li>
      <li>Jurusan : <?php echo $mhs["Jurusan"]; ?></li>
      <li>E-mail : <?php echo $mhs["email"]; ?></li>
    </ul>
  <?php } ?>
</body>

</html>