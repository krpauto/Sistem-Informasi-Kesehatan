<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body>
  <style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
  }

  body {
    background: #ffff;

  }

  .container {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
  }

  .box {
    background: #fdfdfd;
    display: flex;
    flex-direction: column;
    padding: 25px 25px;
    border-radius: 20px;
    box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0, 1),
      0 32px 64px -48px rgba(0, 0, 0, 0, 5);
  }

  .form-box {
    width: 450px;
    margin: 0px 10px;
  }

  .form-box header {
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 10px;
  }

  .form-box form .field {
    display: flex;
    margin: 10px auto;
    flex-direction: column;
  }

  .form-box form .input input {
    height: 40px;
    margin: 10px auto;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
  }

  .btn {
    height: 45px;
    background: rgb(87, 161, 207);
    border: 0;
    border-radius: 5px;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    transition: all.3s;
    margin-top: 10px;
    padding: 0px 10px;
  }

  .btn:hover {
    opacity: 0.82;
  }

  .submit {
    width: 100%;
  }

  .link {
    margin-bottom: 15px;
  }
  </style>

  <div class="container">
    <div class="box form-box">

      <?php
      include("config.php");
      if (isset($_POST['submit'])) {

        $nama           = $_POST['nama'];
        $email          = $_POST['email'];
        $password       = $_POST['password'];
        $umur           = $_POST['umur'];
        $no_telp        = $_POST['no_telp'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];

        $verify_query = mysqli_query($con, "SELECT email FROM user WHERE email='$email'");
        if (mysqli_num_rows($verify_query) != 0) {
          echo "<div class='messege'>
                        <p>This email is used, Try another one please!</p>
                        </div><br>";

          echo "<a href= 'javascript:self.history.back()'><button class='btn'>Go Back</button>";
        } else {

          mysqli_query($con, "INSERT INTO user(nama, email, umur, jenis_kelamin, password, no_telp) VALUES('$nama','$email','$umur','$jenis_kelamin', '$password', '$no_telp' )") or die("Error Occured");
          header("location:indexloginm.php");
        }
      } else {
      ?>
      <header>Sign Up</header>
      <form action=" " method="post">
        <div class="field input">
          <label>Nama Lengkap</label>
          <input type="text" name="nama" placeholder="Masukkan nama lengkap" id="username" autocomplete="off" required>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="email" name="email" placeholder="Masukkan email" id="email" autocomplete="off" required>
        </div>
        <div class="field input">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Masukkan password" autocomplete="off"
            required>
        </div>
        <div class="field input">
          <label for="age">Umur</label>
          <input type="text" name="umur" placeholder="Masukkan umur" id="age" autocomplete="off" required>
        </div>
        <div class="=label">
          <label> Jenis Kelamin: </label>
          <input type="radio" name="jenis_kelamin" value="Laki-laki" /> Pria
          <input type="radio" name="jenis_kelamin" value="Perempuan" />Wanita<br />
        </div>
        <div class="field input">
          <label for="password">No Telepon</label>
          <input type="text" name="no_telp" id="no_telp" placeholder="Masukkan nomor telepon" autocomplete="off"
            required>
        </div>

        <div class="field">
          <input type="submit" class="btn" name="submit" value="Register" required>
        </div>
        <div class="links">
          Already a member? <a href="indexloginm.php">Sign in!</a>
        </div>
      </form>
    </div>
    <?php } ?>
  </div>


</body>

</html>