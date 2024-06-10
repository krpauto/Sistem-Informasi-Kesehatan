<?php include("inc_header.php") ?>

<div class="container">
  <div class="alert alert-primary mt-4" role="alert">
    Halaman Admin
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-2">
    <div class="col">
      <div class="card border-primary mt-3 mb-4" style="width: 18rem;">
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
      <div class="card border-primary mt-3 mb-4" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Jumlah Pasien</h5>
          <p class="card-text">
            <?php

            $query = "SELECT * FROM user ORDER BY id";
            $qeryRun = mysqli_query($koneksi, $query);

            $row = mysqli_num_rows($qeryRun);

            echo " <p class='card-text'>$row Pasien</p>"
            ?>
          </p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card border-primary mt-3 mb-4" style="width: 18rem;">
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

</div>

<?php include("inc_footer.php") ?>