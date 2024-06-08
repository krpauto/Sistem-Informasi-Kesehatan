<?php include("inc_header.php") ?>
<h1 class="mb-2">Halaman Admin</h1>

<div class="row row-cols-1 row-cols-md-3 g-2">
  <div class="col">
    <div class="card border-primary mt-4 mb-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Jumlah Dokter</h5>
        <p class="card-text">
          <?php

          $query = "SELECT * FROM dokter ORDER BY id";
          $qeryRun = mysqli_query($koneksi, $query);

          $row = mysqli_num_rows($qeryRun);

          echo " <p class='card-text'>$row Dokter</p>"
          ?>
        </p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card border-primary mt-4 mb-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Jumlah Dokter</h5>
        <p class="card-text">
          <?php

          $query = "SELECT * FROM members ORDER BY id";
          $qeryRun = mysqli_query($koneksi, $query);

          $row = mysqli_num_rows($qeryRun);

          echo " <p class='card-text'>$row Pasien</p>"
          ?>
        </p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card border-primary mt-4 mb-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Jumlah Informasi</h5>
        <p class="card-text">
          <?php

          $query = "SELECT * FROM informasi ORDER BY id";
          $qeryRun = mysqli_query($koneksi, $query);

          $row = mysqli_num_rows($qeryRun);

          echo " <p class='card-text'>$row Informasi</p>"
          ?>
        </p>
      </div>
    </div>
  </div>

</div>

<?php include("inc_footer.php") ?>