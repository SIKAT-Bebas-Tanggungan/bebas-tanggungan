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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../assets/css/mahasiswa/dashboardMhs.css">
  <link rel="stylesheet" href="../assets/css/mahasiswa/navbarWithLink.css">
  <link rel="stylesheet" href="../assets/css/mahasiswa/footer.css">
  
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
   <?php include('../components/mahasiswa/navbarWithLink.php') ?>

  <!-- Main Content -->
  <main class="container my-5">
    <h2 class="section-title fs-3 fw-bold mb-4">Unduh <span style="color: #FA9D1C">Berkas</span></h2>
    <div class="card p-4 shadow-sm">
      <div class="d-grid gap-2 d-md-block">
        <a onclick="goBack()" class="btn btn-outline-secondary mb-3 d-inline-block me-2">< Kembali</a>
      </div>
        <div class="container overflow-hidden text-center">
            <div class="row gx-5">
            <div class="col">
            <div class="p-3">      
                <p class="mb-2">Unduh Berkas Yang diperlukan di link berikut:</p>
                <p>
                  <a href="#">Bebas Tanggungan JTI!</a>
                </p>
                </div>
            </div>
            <div class="col">
                <div class="p-3">      
                    <p class="mb-2">Alur Bebas Tanggungan di link berikut:</p>
                    <p>
                      <a href="#">Alur Bebas Tanggungan JTI!</a>
                    </p>
                </div>
            </div>
        </div>
      </div>
      <hr />

      <h5 class="mt-4 fw-bold">1. TUGAS AKHIR</h5>
      <p>Berkas yang diunggah:</p>
      <ol>
        <li>Laporan Tugas Akhir/Skripsi yang sudah ber TTD format PDF maksimal 10 MB.</li>
        <li>Upload Program/Aplikasi Tugas Akhir/Skripsi format ZIP/RAR maksimal 1 GB.</li>
        <li>Upload Surat Pernyataan Publikasi Jurnal/Paper/Conference/Seminar/HAKI/dll.</li>
      </ol>

      <h5 class="mt-4 fw-bold">2. ADMINISTRASI PROGRAM STUDI</h5>
      <p>Berkas yang diunggah dalam format PDF maksimal 1 MB:</p>
      <ol>
        <li>Tanda Terima Penyerahan Laporan Tugas Akhir/Skripsi ke Ruang Baca.</li>
        <li>Tanda Terima Penyerahan Laporan PKL/Magang ke Ruang Baca.</li>
        <li>Upload Surat Bebas Kompen.</li>
        <li>Upload Scan TOEIC dengan skor minimal 450 untuk Diploma 4.</li>
      </ol>

    </div>
  </main>

  <!-- Footer -->
  <?php include('../components/mahasiswa/footer.php')?>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
  <script src="../assets/js/button.js"></script>
</body>
</html>