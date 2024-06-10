<?php include("inc_header.php") ?>
<?php
$nama      = "";

$isi        = "";
$foto       = "";
$foto_name  = "";
$error      = "";
$sukses     = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = "";
}

if ($id != "") {
    $sql1   = "select * from informasi where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $nama  = $r1['nama'];

    $isi        = $r1['isi'];
    $foto       = $r1['foto'];

    if ($isi == '') {
        $error  = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $nama      = $_POST['nama'];
    $isi        = $_POST['isi'];


    if ($nama == '' or $isi == '') {
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

            $foto_name = "informasi_" . time() . "_" . $foto_name;
            move_uploaded_file($foto_file, $direktori . "/" . $foto_name);

            $foto = $foto_name;
        } else {
            $foto_name = $foto; //memasukkan data dari data yang sebelumnya ada
        }

        if ($id != "") {
            $sql1   = "update informasi set nama = '$nama',foto='$foto_name',isi='$isi',tgl_isi=now() where id = '$id'";
        } else {
            $sql1       = "insert into informasi(nama,foto,isi) values ('$nama','$foto_name','$isi')";
        }

        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Sukses memasukkan data";
        } else {
            $error      = "Gagal cuy masukkan data";
        }
    }
}
?>

<div class="container">
  <div class="alert alert-primary mt-4" role="alert">
    Halaman Tambah Data Informasi Kesehatan
  </div>
  <div class="mb-3">
    <a href="informasi.php" class="btn btn-primary">
      Kembali ke Halaman Informasi Kesehatan</a>
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
  <div class="alert alert-primary" role="alert">
    <?php echo $sukses ?>
  </div>
  <?php
    }
    ?>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="nama" class="form-label">Judul Berita</label>
      <div class="col-sm-10"></div>
      <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" name="nama"
        placeholder="Masukkan judul berita">
    </div>
    <div class="mb-3">
      <label for="foto" class="form-label">Upload Gambar</label>
      <div class="col-sm-10"></div>
      <?php
            if ($foto) {
                echo "<img src='../gambar/$foto' style='max-height:100px;max-width:100px'/>";
            }
            ?>
      <input type="file" class="form-control" id="foto" name="foto">
    </div>
    <div class="mb-3">
      <label for="isi" class="form-label">Deskripsi Berita</label>
      <textarea name="isi" class="form-control" id="summernote"><?php echo $isi ?></textarea>

    </div>
    <div class="mb-3">
      <div class="col-sm-2"></div>
      <div class="col-sm-10"></div>
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
    </div>
  </form>

</div>
<?php include("inc_footer.php") ?>