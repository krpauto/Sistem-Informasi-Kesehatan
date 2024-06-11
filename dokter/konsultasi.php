<?php
include("inc_header.php");
include("config.php");
session_start();

if (isset($_POST['sendReply'])) {
  $replyMessage = mysqli_real_escape_string($con, $_POST['reply_message']);
  $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
  $dokter_id = $_SESSION['id'];
  $nama = $_SESSION['nama'];

  $query = "INSERT INTO pesan (user_id, doctor_id, sender, pesan, created_at) VALUES ('$user_id', '$dokter_id', '$nama', '$replyMessage')";
  mysqli_query($koneksi, $query);

  header("Location: konsultasi.php");
  exit;
}
?>

<div class="container">
  <div class="alert alert-primary mt-4" role="alert">
    Halaman Konsultasi Dokter
  </div>

  <!-- Daftar pesan dari pasien -->
  <div class="messages mb-4">
    <h5>Pesan dari Pasien</h5>
    <?php
    $doctorId = $_SESSION['id'];
    $query = "SELECT * FROM pesan WHERE dokter_id = '$dokter_id'";
    $result = mysqli_query($koneksi, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='message'>";
      echo "<p><strong>{$row['sender']}:</strong> {$row['message']}</p>";
      echo "<p class='text-muted'><small>{$row['created_at']}</small></p>";

      // Form untuk membalas pesan
      echo "<form action='konsultasi.php' method='post' class='mt-2'>";
      echo "<div class='mb-3'>";
      echo "<textarea class='form-control' name='reply_message' rows='2' placeholder='Balas pesan ini' required></textarea>";
      echo "<input type='hidden' name='user_id' value='{$row['user_id']}'>";
      echo "<button type='submit' name='sendReply' class='btn btn-primary mt-2'>Kirim Balasan</button>";
      echo "</form>";

      echo "<hr>";
      echo "</div>";
    }
    ?>
  </div>
</div>

<?php include("inc_footer.php"); ?>