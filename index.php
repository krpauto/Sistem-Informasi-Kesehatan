<?php include_once ("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <img src="<?php echo ambil_gambar('13') ?>" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('13') ?></p>
        <h2><?php echo ambil_judul('13') ?></h2>
        <?php echo maximum_kata(ambil_isi('13'), 34) ?>
        <p><a href="<?php echo buat_link_halaman('13') ?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
    </div>
</section>

<!-- untuk home awal-->
<section id="Informasi Kesehatan Awal">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('15') ?></p>
        <h2><?php echo ambil_judul('15') ?></h2>
        <?php echo maximum_kata(ambil_isi('15'), 34) ?>
        <p><a href="<?php echo buat_link_halaman('15') ?>" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
    </div>
    <img src="<?php echo ambil_gambar('15') ?>" />
</section>

<!-- untuk Informasi Kesehatan -->
<section id="Informasi Kesehatan">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Informasi Kesehatan</p>
            <h2>Topik Terbaru</h2>
            <p>Berikut adalah Tips atau Informasi untuk Anda</p>
        </div>

        <div class="informasi-list">
            <?php
            $sql1 = "SELECT * FROM informasi ORDER BY id DESC";
            $q1 = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
                ?>
                <div class="kartu-informasi">
                    <a href="<?php echo buat_link_informasi($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . informasi_foto($r1['id']); ?>"
                            alt="Informasi Foto" />
                        <h1><?php echo $r1['nama']; ?></h1>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>


    </div>
    </div>
</section>

<!-- untuk Dokter -->
<section id="Konsultasi">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Partner</p>
            <h2>Doctor</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi magni tempore expedita sequi. Similique
                rerum doloremque impedit saepe atque maxime.</p>
        </div>

        <div class="partner-list">
            <?php
            $sql1 = "select * from dokter order by id asc";
            $q1 = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_assoc($q1)) {
                ?>
                <div class="kartu-partner">
                    <a href="<?php echo buat_link_dokter($r1['id']) ?>">
                    <img src ="<?php echo url_dasar()."/gambar/".dokter_foto($r1['id']) ?>">
                    <h1><?php echo $r1['nama']; ?></h1>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<?php include_once ("inc_footer.php") ?>