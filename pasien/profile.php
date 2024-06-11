<?php include("inc_header.php"); ?>

<?php
// include("config.php");

if (isset($_POST['simpan'])) {
  $email          = mysqli_real_escape_string($koneksi, $_POST['email']);
  $password       = mysqli_real_escape_string($koneksi, $_POST['password']);
  $nama           = mysqli_real_escape_string($koneksi, $_POST['nama']);
  $no_telp        = mysqli_real_escape_string($koneksi, $_POST['no_telp']);
  $umur           = mysqli_real_escape_string($koneksi, $_POST['umur']);
  $jenis_kelamin  = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
  $id             = $_SESSION['id'];

  $sql1 = "UPDATE user SET email = '$email', password = '$password', nama = '$nama', umur = '$umur', jenis_kelamin = '$jenis_kelamin', no_telp = '$no_telp' WHERE id = '$id'";
  $q1 = mysqli_query($koneksi, $sql1);

  if ($q1) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['nama'] = $nama;
    $_SESSION['umur'] = $umur;
    $_SESSION['jenis_kelamin'] = $jenis_kelamin;
    $_SESSION['no_telp'] = $no_telp;

    $message = "<div class='alert alert-success mt-4' role='alert'>Data berhasil diperbarui!</div>";
  } else {
    $message = "<div class='alert alert-danger mt-4' role='alert'>Terjadi kesalahan saat memperbarui data. Silakan coba lagi.</div>";
  }
}
?>

<div class="container">
  <div class="alert alert-primary mt-4" role="alert">
    Halaman Profile
  </div>

  <?php
  if (isset($message)) {
    echo $message;
  }
  ?>

  <form class="row g-3 mt-2" action="" method="post">
    <div class="col-md-6">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" value="<?php echo $_SESSION['email']; ?>"
        required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword4"
        value="<?php echo $_SESSION['password']; ?>" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" id="inputNama" value="<?php echo $_SESSION['nama']; ?>"
        required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Umur</label>
      <input type="text" class="form-control" name="umur" id="inputUmur" value="<?php echo $_SESSION['umur']; ?>"
        required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-select" required>
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="laki-laki" <?php echo ($_SESSION['jenis_kelamin'] == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki
        </option>
        <option value="perempuan" <?php echo ($_SESSION['jenis_kelamin'] == 'perempuan') ? 'selected' : ''; ?>>Perempuan
        </option>
      </select>
    </div>
    <div class="col-md-6">
      <label class="form-label">No Telepon</label>
      <input type="text" class="form-control" name="no_telp" id="inputNoTelp"
        value="<?php echo $_SESSION['no_telp']; ?>" required>
    </div>
    <div class="col-12">
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </form>
</div>

<?php include("inc_footer.php"); ?>