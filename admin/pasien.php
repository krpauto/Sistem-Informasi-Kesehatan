<?php include("inc_header.php") ?>

<style>
input::placeholder {
  font-size: 14px;
}

input[type="submit"] {
  font-size: 14px;
}
</style>

<?php
$sukses = "";
$katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
if (isset($_GET['op'])) {
  $op = $_GET['op'];
} else {
  $op = "";
}
if ($op == 'delete') {
  $id = $_GET['id'];
  $sql1   = "select foto from user where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  @unlink("../gambar/" . $r1['foto']);

  $sql1   = "delete from user where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  if ($q1) {
    $sukses     = "<strong>Berhasil!</strong> Data Pasien Sudah Terhapus.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
  }
}
?>
<div class="container">
  <div class="alert alert-primary mt-4" role="alert">
    Halaman Data Pasien
  </div>
  <!-- <p>
    <a href="dokter_input.php">
      <input type="button" class="btn btn-primary" value="Tambah Data Dokter">
    </a>
  </p> -->
  <?php
  if ($sukses) {
  ?>
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <?php echo $sukses ?>
  </div>
  <?php
  }
  ?>


  <form class="row g-3" method="get">
    <div class="col-auto">
      <input class="form-control" type="text" placeholder="Search" name="katakunci" aria-label="Search"
        value="<?php echo $katakunci ?>" />
    </div>
    <div class="col-auto">
      <input type="submit" name="cari" class="btn btn-secondary" value="Cari Pasien" />
    </div>
  </form>
  <table class="table table-stripped table-bordered mt-3">
    <thead>
      <tr>
        <th class="col-1">#</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>No Telepon</th>
        <!-- <th clas="col-1">Aksi</th> -->
      </tr>
    </thead>
    <tbody>
      <?php
      $sqltambahan = "";
      $per_halaman = 5;
      if ($katakunci != '') {
        $array_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($array_katakunci); $x++) {
          $sqlcari[] = "(nama like '%" . $array_katakunci[$x] . "%' or isi like '%" . $array_katakunci[$x] . "%')";
        }
        $sqltambahan    = " where " . implode(" or ", $sqlcari);
      }
      $sql1   = "select * from user $sqltambahan";
      $page   = isset($_GET['page']) ? (int)$_GET['page'] : 1;
      $mulai  = ($page > 1) ? ($page * $per_halaman) - $per_halaman : 0;
      $q1     = mysqli_query($koneksi, $sql1);
      $total  = mysqli_num_rows($q1);
      $pages  = ceil($total / $per_halaman);
      $nomor  = $mulai + 1;
      $sql1   = $sql1 . " order by id desc limit $mulai,$per_halaman";


      $q1     = mysqli_query($koneksi, $sql1);

      while ($r1 = mysqli_fetch_array($q1)) {
      ?>
      <tr>
        <td><?php echo $nomor++ ?></td>
        <!-- <td><img src="../gambar/<?php echo dokter_foto($r1['id']) ?>" style="max-height:100px;max: width 100px;" /></td> -->
        <td><?php echo $r1['nama'] ?></td>
        <td><?php echo $r1['umur'] ?></td>
        <td><?php echo $r1['jenis_kelamin'] ?></td>
        <td><?php echo $r1['no_telp'] ?></td>
        <!-- <td>
            <a href="dokter_input.php?id=<?php echo $r1['id'] ?>">
              <span class="badge bg-warning text-light">Edit</span>
            </a>
            <a href="pasien.php?op=delete&id=<?php echo $r1['id'] ?>" onclick="return confirm('Apakah yakin mau hapus data?')">
              <span class="badge bg-danger text-light">Delete</span>
            </a>
          </td> -->
      </tr>
      <?php
      }

      ?>

    </tbody>
  </table>

  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <?php
      $cari = isset($_GET['cari']) ? $_GET['cari'] : "";

      for ($i = 1; $i <= $pages; $i++) {
      ?>
      <li class="page-item">
        <a class="page-link"
          href="dokter.php?katakunci=<?php echo $katakunci ?>&cari=<?php echo $cari ?>&page=<?php echo $i ?>"><?php echo $i ?></a>
      </li>
      <?php
      }
      ?>
    </ul>
  </nav>

</div>

<?php include("inc_footer.php") ?>