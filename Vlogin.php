<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Sebagai Mahasiswa</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: "Roboto", sans-serif;
    background-color: #f0f0f0;
  }

  .container {
    text-align: center;
  }

  .login-button {
    display: block;
    width: 300px;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #e0e0e0;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
    color: black;
    cursor: pointer;
  }

  .login-button:hover {
    background-color: #d0d0d0;
  }
  </style>

  <div class="container">
    <a href="indexlogina.php" class="login-button">Login Sebagai Admin</a>
    <a href="indexlogind.php" class="login-button">Login Sebagai Dokter</a>
    <a href="indexloginm.php" class="login-button">Login Sebagai Pasien</a>
  </div>
</body>

</html>