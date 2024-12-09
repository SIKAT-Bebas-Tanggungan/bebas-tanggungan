<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Unduh Berkas - SIKAT-BATA</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <!-- Font Poppins -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="../assets/css/mahasiswa/dashboardMhs.css">
  <link rel="stylesheet" href="../assets/css/mahasiswa/navbarWithLink.css">
  <link rel="stylesheet" href="../assets/css/mahasiswa/footer.css">
  
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php include('../components/mahasiswa/navbarWithLink.php') ?>

  <!-- Main Content -->
  <div class="container my-5">
    <h2 class="section-title fs-3 fw-bold mb-4">Hubungi <span class="berkas">Admin</span></h2>
    <div class="card p-4 shadow-sm">
    <div class="d-grid gap-2 d-md-block">
        <a onclick="goBack()" class="btn btn-outline-secondary mb-3 d-inline-block me-2">< Kembali</a>
      </div>
      <h2 class="mt-2 fs-5 fw-medium">Jika Memiliki Kendala atau pertanyaan lebih lanjut , Bisa Menghubungi Nomor Yang Tertera Berikut (WhatsApp):</h5>
        <ul class="mt-4"><img src="../assets/icons/adminWA.svg" alt="adminWA" class="me-2"><strong>Bu Yanti</strong> (Verifikator) - <a href="">08380066233</a> (Chat Only)</ul>
        <ul class="mt-2"><img src="../assets/icons/adminWA.svg" alt="adminWA" class="me-2"><strong>Mas Anggi</strong> (Verifikator) - <a href="">0895630505222</a> (Chat Only)</ul>
        <ul class="mt-2"><img src="../assets/icons/adminWA.svg" alt="adminWA" class="me-2"><strong>Bu Titis</strong> (Admin D2PPLS) - <a href="">085790686586</a> (chat Only)</ul>
    </div>
  </div>

  <!-- Footer -->
  <?php include('../components/mahasiswa/footer.php') ?>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
  <script src="../assets/js/button.js"></script>
</body>
</html>