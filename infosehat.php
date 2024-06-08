<?php include_once ("inc_header.php") ?>
<style>
    .kartu-informasi{
        margin-bottom: 30px;
    }
</style>
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
    </div>
    
</body>
</html>