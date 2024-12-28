<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIKAT - BATA</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/styleIndex.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow"
    >
      <div class="container">
        <a class="navbar-brand d-flex align-items-center">
          <img
            src="http://localhost/bebas-tanggungan/views/assets/images/logoPoltek.png"
            alt="Logo"
            width="50"
            height="50"
            class="d-inline-block align-text-top"
          />
          <img
            src="http://localhost/bebas-tanggungan/views/assets/images/JTI_Polinema.png"
            alt="Logo"
            width="50"
            height="50"
            class="d-inline-block align-text-top"
          />
          <img
            src="http://localhost/bebas-tanggungan/views/assets/images/logoSikatBata.svg"
            alt="Logo"
            width="50"
            height="50"
            class="d-inline-block align-text-top ms-2"
          />
        </a>
        <span class="sikat-bata">
          <span class="sikat">SIKAT-</span>
          <span class="bata">BATA</span>
        </span>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#fitur">Fitur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="faq">FAQ</a></li>
            <li class="nav-item">
              <a class="btn btn-primary btn-navbar" href="mahasiswa">Ajukan Layanan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div id="beranda" class="container my-5">
      <div
        class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg"
      >
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-2 text-body-emphasis hero-title">
            <span class="mb-2 d-block">Sistem Kelola Bebas Tanggungan Jurusan Teknologi Informasi Politeknik Negeri Malang (POLINEMA)</span>
          </h1>
          <div
            class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3"
          >
              <a class="btn btn-primary btn-lg px-4 me-md-2 fw-light" href="pages/mahasiswa/loginMhs.php">Ajukan Layanan</a>

          </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img
            class="rounded-lg-3"
            src="http://localhost/bebas-tanggungan/views/assets/images/jurusan.png"
            alt=""
            width="522px"
          />
        </div>
      </div>
    </div>

    <!-- Features Section -->
    <div id="fitur" class="container my-5">
      <h2 class="text-left mb-4">Fitur
        <div>
            <img src="http://localhost/bebas-tanggungan/views/assets/icons/lineShort.svg">
        </div>
      </h2>
      <div class="row text-center">
        <div class="col-md-3">
          <div class="card feature-card p-3 border-0 shadow-sm">
            <p class="feature-text">Cetak Form</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card feature-card p-3 border-0 shadow-sm">
            <p class="feature-text">Terhubung Dengan Whatsapp</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card feature-card p-3 border-0 shadow-sm">
            <p class="feature-text">Status Validasi</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card feature-card p-3 border-0 shadow-sm">
            <p class="feature-text">Cepat</p>
          </div>
        </div>
      </div>
    </div>

    <!-- About Section -->
    <div id="tentang" class="bg-light py-5">
      <div class="container">
        <h2 class="text-left mb-4">
          Tentang
          <span class="sikat-bata-tentang">
            <span class="sikat">SIKAT - </span>
            <span class="bata">BATA</span>
          </span>
          <div>
            <img src="http://localhost/bebas-tanggungan/views/assets/icons/lineLong.svg">
        </div>
        </h2>
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="http://localhost/bebas-tanggungan/views/assets/images/gedungJTI.png" class="img-fluid rounded-start" alt="gedungPolinema">
            </div>
            <div class="col-sm-8">
              <div class="card-body">
                <p class="card-text lead align-items-center p-2 pt-4 ms-4">   
                   Sistem Kelola Bebas Tanggungan Akhir Mahasiswa Polinema (SIKAT-TA)
                  adalah sebuah sistem yang dibuat untuk mahasiswa tingkat akhir
                  guna memastikan bahwa seorang mahasiswa telah menyelesaikan
                  seluruh kewajiban akademik sebelum dinyatakan lulus.</p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
      <img src="http://localhost/bebas-tanggungan/views/assets/icons/backToTop.svg" alt="" />
    </a>

    <!-- Footer -->
    <?php include('views/components/mahasiswa/footer.php') ?> 

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="http://localhost/bebas-tanggungan/views/assets/js/button.js"></script>
  </body>
</html>