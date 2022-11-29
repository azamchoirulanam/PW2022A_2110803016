<?php
// Cek tombol submit
if (isset($_POST["submit"])) {

  // Cek Username & Password
  if ($_POST["username"] == "admin" && $_POST["password"] == 123) {

    // JIka benar, langsung kehalaman admin
    header("Location: latihan5e_admin.php");
    exit;
  } else {
    // Jika Salah, tampilkan pesan kesalahan
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>login</title>
</head>

<body>
  <h1>Login Admin</h1>
  <?php if (isset($error)) : ?>
    <p style="color: red;" font-style="italic">Username/Password salah!</p>
  <?php endif; ?>

  <ul>
    <form action="" method="post">
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <button type="submit" name="submit">login </button>
      </li>
    </form>
  </ul>
</body>

</html>