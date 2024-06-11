<?php include("inc_header.php") ?>

<style>
input::placeholder {
  font-size: 14px;
}

select {
  font-size: 14px !important;
}

input[type="date"] {
  font-size: 14px;
}
</style>

<?php
$email          = "";
$password       = "";
$nama           = "";
$no_telp        = "";
$alamat         = "";
$tanggal_lahir  = "";
$spesialis      = "";
$pengalaman     = "";
$jenis_kelamin  = "";
$tanggal_masuk  = "";

$isi            = "";
$foto           = "";
$foto_name      = "";
$error          = "";
$sukses         = "";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "";
}

if ($id != "") {
  $sql1   = "SELECT * FROM dokter WHERE id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);

  $email          = $r1['email'];
  $password       = $r1['password'];
  $nama           = $r1['nama'];
  $no_telp        = $r1['no_telp'];
  $alamat         = $r1['alamat'];
  $tanggal_lahir  = $r1['tanggal_lahir'];
  $spesialis      = $r1['spesialis'];
  $pengalaman     = $r1['pengalaman'];
  $jenis_kelamin  = $r1['jenis_kelamin'];
  $tanggal_masuk  = $r1['tanggal_masuk'];

  $isi        = $r1['isi'];
  $foto       = $r1['foto'];

  if ($isi == '') {
    $error  = "Data tidak ditemukan";
  }
}

if (isset($_POST['simpan'])) {

  $email          = $_POST['email'];
  $password       = $_POST['password'];
  $nama           = $_POST['nama'];
  $no_telp        = $_POST['no_telp'];
  $alamat         = $_POST['alamat'];
  $tanggal_lahir  = $_POST['tanggal_lahir'];
  $spesialis      = $_POST['spesialis'];
  $pengalaman     = $_POST['pengalaman'];
  $jenis_kelamin  = $_POST['jenis_kelamin'];
  $tanggal_masuk  = $_POST['tanggal_masuk'];
  $isi            = $_POST['isi'];


  if ($email == '' or $password == '' or $no_telp == '' or $alamat == '' or $tanggal_lahir == '' or $spesialis == '' or $pengalaman == '' or $jenis_kelamin == '' or $tanggal_masuk == '' or $nama == '' or $isi == '') {
    $error     = "Silakan masukkan semua data yakni adalah data isi dan nama.";
  }

  if ($_FILES['foto']['name']) {
    $foto_name = $_FILES['foto']['name'];
    $foto_file = $_FILES['foto']['tmp_name'];

    $detail_file = pathinfo($foto_name);
    $foto_ekstensi = $detail_file['extension'];
    // Array ( [dirname] => . [basename] => Romi Satrio Wahono.jpg [extension] => jpg [filename] => Romi Satrio Wahono )
    $ekstensi_yang_diperbolehkan = array("jpg", "jpeg", "png", "gif");
    if (!in_array($foto_ekstensi, $ekstensi_yang_diperbolehkan)) {
      $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png dan gif";
    }
  }

  if (empty($error)) {
    if ($foto_name) {
      $direktori = "../gambar";

      @unlink($direktori . "/$foto"); //delete data

      $foto_name = "dokter_" . time() . "_" . $foto_name;
      move_uploaded_file($foto_file, $direktori . "/" . $foto_name);

      $foto = $foto_name;
    } else {
      $foto_name = $foto; //memasukkan data dari data yang sebelumnya ada
    }

    if ($id != "") {
      $sql1       = "UPDATE dokter SET email = '$email', password = '$password', no_telp = '$no_telp', alamat = '$alamat', spesialis = '$spesialis', pengalaman = '$pengalaman', jenis_kelamin = '$jenis_kelamin', tanggal_masuk = '$tanggal_masuk', tanggal_lahir = '$tanggal_lahir', nama = '$nama',foto='$foto_name',isi='$isi' WHERE id = '$id'";
    } else {
      $sql1       = "insert into dokter(email,password,nama,no_telp,alamat,tanggal_lahir,spesialis,pengalaman,jenis_kelamin,tanggal_masuk,foto,isi) values ('$email','$password','$nama','$no_telp','$alamat','$tanggal_lahir','$spesialis','$pengalaman','$jenis_kelamin','$tanggal_masuk', '$foto_name','$isi')";
    }

    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
      $sukses     = "
      <strong>Berhasil!</strong> Data Dokter Sudah Tersimpan.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
    } else {
      $error      = "Gagal masukkan data";
    }
  }
}
?>
<div class="container">
  <div class="alert alert-primary mt-4" role="alert">
    Halaman Profile
  </div>
  <?php
  if ($error) {
  ?>
  <div class="alert alert-danger" role="alert">
    <?php echo $error ?>
  </div>
  <?php
  }
  ?>
  <?php
  if ($sukses) {
  ?>
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <?php echo $sukses ?>
  </div>
  <?php
  }
  ?>

  <form action="" method="post" enctype="multipart/form-data" class="row g-3 mt-2">

    <div>
      <h5 class="form-label">Data Login</h5>
      <hr>
    </div>

    <div class="col-md-6">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email'] ?>"
        placeholder="Masukkan email">
    </div>
    <div class="col-md-6">
      <label class="form-label">Password</label>
      <input type="text" class="form-control" name="password" value="<?php echo $_SESSION['password'] ?>"
        placeholder="Masukkan password">
    </div>

    <div>
      <hr>
    </div>

    <div>
      <h5 class="form-label">Data Pribadi Dokter</h5>
      <hr>
    </div>

    <div class="col-md-6">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['nama'] ?>"
        placeholder="Masukkan nama lengkap">
    </div>
    <div class="col-md-6">
      <label class="form-label">No Telepon</label>
      <input type="text" class="form-control" name="no_telp" value="<?php echo $_SESSION['no_telp'] ?>"
        placeholder="Masukkan no telepon">
    </div>
    <div class="col-md-6">
      <label class="form-label">Alamat Lengkap</label>
      <input type="text" class="form-control" name="alamat" value="<?php echo $_SESSION['alamat'] ?>"
        placeholder="Masukkan alamat">
    </div>
    <div class="col-md-6">
      <label class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $_SESSION['tanggal_lahir'] ?>"
        placeholder="Masukkan tanggal lahir">
    </div>
    <div class="col-md-6">
      <label class="form-label">Spesialis</label>
      <input type="text" class="form-control" name="spesialis" value="<?php echo $_SESSION['spesialis'] ?>"
        placeholder="Masukkan spesialis">
    </div>
    <div class="col-md-6">
      <label class="form-label">Pengalaman</label>
      <input type="text" class="form-control" name="pengalaman" value="<?php echo $_SESSION['pengalaman'] ?>"
        placeholder="Masukkan pengalaman">
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
      <label class="form-label">Tanggal Masuk</label>
      <input type="date" class="form-control" name="tanggal_masuk" value="<?php echo $_SESSION['tanggal_masuk'] ?>"
        placeholder="Masukkan no telepon">
    </div>

    <div class="col-md-12">
      <label for="foto" class="form-label">Foto</label>
      <input type="file" class="form-control" id="foto" name="foto">
      <div class="col-sm-10 mt-2"></div>
      <?php
      if ($_SESSION['foto']) {
        echo "<img src='../gambar/$_SESSION[foto]' style='max-height:100px;max-width:100px'/>";
      }
      ?>
    </div>


    <div class="col-md-12">
      <div class="mb-3">
        <label for="isi" class="form-label">Isi</label>
        <textarea name="isi" class="form-control" id="summernote"><?php echo $_SESSION['isi'] ?></textarea>

      </div>
    </div>

    <div>
      <hr>
    </div>

    <div class="mt-2 mb-4">
      <div class="col-sm-2"></div>
      <div class="col-sm-10"></div>
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
    </div>



    <!-- <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <div class="col-sm-10"></div>
      <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" name="nama">
    </div>
    <div class="mb-3">
      <label for="foto" class="form-label">Foto</label>
      <div class="col-sm-10"></div>
      <?php
      if ($foto) {
        echo "<img src='../gambar/$foto' style='max-height:100px;max-width:100px'/>";
      }
      ?>
      <input type="file" class="form-control" id="foto" name="foto">
    </div>
    <div class="mb-3">
      <label for="isi" class="form-label">Isi</label>
      <textarea name="isi" class="form-control" id="summernote"><?php echo $isi ?></textarea>

    </div>
    <div class="mb-3">
      <div class="col-sm-2"></div>
      <div class="col-sm-10"></div>
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
    </div> -->


  </form>

</div>

<?php include("inc_footer.php") ?>