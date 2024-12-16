<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIKAT - BATA</title>
  <!-- Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <!-- Font Poppins -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/styleIndex.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow">
    <div class="container">
      <div class="d-flex align-items-center">
        <a href="../index.php" class="d-flex align-items-center text-decoration-none">
          <img
            src="assets/icons/backToTop.svg"
            alt="icon"
            width="50"
            height="50"
            class="me-2"
            style="transform: rotate(-90deg);" />
          <img
            src="assets/images/logoSikatBata.svg"
            alt="icon"
            width="50"
            height="50"
            class="me-2" />
        </a>
        <span class="sikat-bata fw-bold fs-4 ms-2">
          <span class="sikat">SIKAT-</span>
          <span class="bata">BATA</span>
        </span>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <main class="container mt-5">
    <h2 class="text-center mb-4 fw-bold">
      Pertanyaan Seputar <br />
      <span style="color: #FA9D1C;">Sistem Kelola Bebas Tanggungan</span>
    </h2>
    <div class="row g-3 mt-5">
      <div class="col-md-6">
        <div class="d-flex justify-content-between align-items-center border border-black rounded mt-2">
          <span class="p-3 fw-medium">Apa itu Sistem Kelola Bebas Tanggungan?</span>
          <button class="btn me-3 toggle-btn">
            <img src="assets/icons/arrowToggleFAQ.svg" alt="arrowToggleFAQ">
          </button>
        </div>
        <div class="dropdown-content" style="display: none;">
          <p class="p-3 border border-black rounded-bottom mt-1">
            Sistem Kelola Bebas tanggungan (SIKAT -BATA) adalah sistem yang dibuat untuk membantu mahasiswa dalam menyelesaikan tanggung tugas akhir untuk memenuhi seluruh kewajiban akademik dan administratif sebelum menyelesaikan studi.
          </p>
        </div>
        <div class="d-flex justify-content-between align-items-center border border-black rounded mt-2">
          <span class="p-3 fw-medium">Bagaimana cara mahasiswa mengecek status tanggungan mereka?</span>
          <button class="btn me-3 toggle-btn">
            <img src="assets/icons/arrowToggleFAQ.svg" alt="arrowToggleFAQ">
          </button>
        </div>
        <div class="dropdown-content" style="display: none;">
          <p class="p-3 border border-black rounded-bottom mt-1">
            Mahasiswa dapat login ke sistem SIKAT-BATA, lalu memeriksa bagian Menu "Status Tanggungan" untuk melihat status tanggungan yang perlu diselesaikan.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="d-flex justify-content-between align-items-center border border-black rounded mt-2">
          <span class="p-3 fw-medium">Siapa saja yang berhak menggunakan sistem ini?</span>
          <button class="btn me-3 toggle-btn">
            <img src="http://localhost/bebas-tanggungan/views/assets/icons/arrowToggleFAQ.svg" alt="arrowToggleFAQ">
          </button>
        </div>
        <div class="dropdown-content" style="display: none;">
          <p class="p-3 border border-black rounded-bottom mt-1">
            Sistem ini ditujukan untuk mahasiswa yang sedang menyelesaikan tugas akhir studi, dan admin jurusan sebagai verifikator tugas akhir.
          </p>
        </div>
        <div class="d-flex justify-content-between align-items-center border border-black rounded mt-2">
          <span class="p-3 fw-medium">Apa yang harus dilakukan jika ada status tanggungan yang belum selesai?</span>
          <button class="btn me-3 toggle-btn">
            <img src="http://localhost/bebas-tanggungan/views/assets/icons/arrowToggleFAQ.svg" alt="arrowToggleFAQ">
          </button>
        </div>
        <div class="dropdown-content" style="display: none;">
          <p class="p-3 border border-black rounded-bottom mt-1">
            Mahasiswa dapat menghubungi Admin Jurusan untuk menyelesaikan tanggung-an sebelum melanjutkan proses kelulusan.
          </p>
        </div>
      </div>
    </div>
    <div class="text-start mt-4 mt-5">
      <button class="btn btn-primary px-4 py-2">Pertanyaan Lebih Lanjut &gt;</button>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-top py-3 mt-4">
    <div class="container text-center">
      <p class="mb-0">
        © Copyright <span class="text-kelompok-enam">Kelompok Enam</span>. All
        Rights Reserved
      </p>
      <small>Made by <span class="text-kelompok-enem">Kelompok Enem</span></small>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="assets/js/faq.js"></script>
</body>

</html>