<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIKAT-BATA</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- Font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/mahasiswa/dashboardMhs.css">
  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/mahasiswa/footer.css">
  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/mahasiswa/navbarWithLink.css">
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php include('views/components/mahasiswa/navbar.php') ?>

  <!-- Modal Notif -->
  <?php include('views/components/mahasiswa/modalNotif.php') ?>

  <!-- Main Content -->
  <main class="container my-5 d-flex flex-grow-1 align-item-center justify-content-center">
    <div class="card p-4 shadow-sm w-100" style="max-width: 1280px;">
      <h2 class="mb-4">Hai, <strong><?php echo ($mahasiswa['nama_mahasiswa']); ?></strong>!</h2>
      <p>NIM: <strong><?php echo ($mahasiswa['nim']); ?></strong></p>
      <p>Program Studi: <strong><?php echo ($mahasiswa['prodi']); ?></strong></p>
      <p>Jurusan: <strong>TEKNOLOGI INFORMASI</strong></p>
      <hr />
      <h4 class="mb-3 text-primary">Pilih Layanan</h4>
      <div class="d-flex flex-row gap-3">
        <a href="http://localhost/bebas-tanggungan/mahasiswa/unduh-form" class="btn btn-outline-primary flex-fill">Unduh Form dan Alur</a>
        <a href="http://localhost/bebas-tanggungan/mahasiswa/unggah-ta" class="btn btn-outline-primary flex-fill">Unggah Tugas Akhir dan Form</a>
        <a href="http://localhost/bebas-tanggungan/mahasiswa/status" class="btn btn-outline-primary flex-fill">Bebas Tanggungan</a>
        <a href="https://wa.me/6285179605484" class="btn btn-outline-primary flex-fill">Kendala Melalui Whatsapp</a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include('views/components/mahasiswa/footer.php') ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- JS Modal Notification-->
  <script src="http://localhost/bebas-tanggungan/views/assets/js/mahasiswa/notification.js"></script>

</body>

</html>
