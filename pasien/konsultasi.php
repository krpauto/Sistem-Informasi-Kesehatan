<?php
include("inc_header.php");
// include("config.php");
session_start();

if (isset($_POST['sendMessage'])) {
  $pesan      = mysqli_real_escape_string($koneksi, $_POST['pesan']);
  $user_id    = $_SESSION['id'];
  $dokter_id  = $_POST['dokter_id']; // Ubah dari 'doctor_id' menjadi 'dokter_id' sesuai dengan nama atribut select pada HTML
  $sender     = $_SESSION['nama'];

  $query = "INSERT INTO pesan (user_id, dokter_id, sender, pesan) VALUES ('$user_id', '$dokter_id', '$sender', '$pesan')"; // Menggunakan 'dokter_id' sesuai dengan struktur tabel
  mysqli_query($koneksi, $query);

  header("Location: konsultasi.php");
  exit;
}
?>

<div class="container">
  <div class="alert alert-primary mt-4" role="alert">
    Halaman Konsultasi Pasien
  </div>

  <!-- Form mengirim pesan -->
  <form action="konsultasi.php" method="post" class="mb-4">
    <div class="mb-3">
      <label for="message" class="form-label">Pesan</label>
      <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="dokter_id" class="form-label">Pilih Dokter</label>
      <!-- Ubah dari 'doctor_id' menjadi 'dokter_id' sesuai dengan id pada HTML -->
      <select class="form-select" id="dokter_id" name="dokter_id" required>
        <option value="">-- Pilih Dokter --</option>
        <?php
        $doctors = mysqli_query($koneksi, "SELECT id, nama, spesialis FROM dokter");
        while ($doctor = mysqli_fetch_assoc($doctors)) {
          echo "<option value='{$doctor['id']}'>{$doctor['nama']} - {$doctor['spesialis']}</option>";
        }
        ?>
      </select>

    </div>
    <button type="submit" name="sendMessage" class="btn btn-primary">Kirim Pesan</button>
  </form>

  <!-- Daftar pesan -->
  <div class="messages">
    <h5>Pesan Konsultasi</h5>
    <?php
    $userId = $_SESSION['id'];
    $query = "SELECT * FROM pesan WHERE user_id = '$userId' ORDER BY created_at DESC";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='message'>";
      echo "<p><strong>{$row['sender']}:</strong> {$row['pesan']}</p>"; // Menggunakan 'pesan' sebagai kolom pesan sesuai dengan struktur tabel
      echo "<p class='text-muted'><small>{$row['created_at']}</small></p>";
      echo "<hr>";
      echo "</div>";
    }
    ?>
  </div>
</div>

<?php include("inc_footer.php"); ?>