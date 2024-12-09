<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIKAT-BATA</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <!-- Font Poppins -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/mahasiswa/dashboardMhs.css">
  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/mahasiswa/footer.css">
  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/mahasiswa/navbarWithLink.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
  <?php include('views/components/mahasiswa/navbar.php') ?>

  <!-- modal notification-->
  <?php include('views/components/mahasiswa/modalNotif.php') ?>

  <!-- Main Content -->
  <main class="container my-5 flex-grow-1">
    <!-- Section Header -->
    <h2 class="section-title fs-3 fw-bold">Edit <span class="berkas">Profile</span></h2>
    <a onclick="goBack()" class="btn btn-outline-secondary mb-3">
      < Kembali</a>

        <!-- Card Utama: Form Biodata -->
        <form method="POST">
          <div class="card p-4 shadow-sm mb-4">
            <div class="row g-3 align-items-center">
              <!-- Deskripsi -->
              <div class="col-md-4">
                <p class="fw-bold mb-2">NIM</p>
              </div>
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="<?php echo ($mahasiswa['nim']); ?>" disabled />
              </div>
              <div class="col-md-4">
                <p class="fw-bold mb-2">Nama Lengkap</p>
              </div>
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo ($mahasiswa['nama_mahasiswa']); ?>" name="nama_mahasiswa"/>
              </div>
              <div class="col-md-4">
                <p class="fw-bold mb-2">Password</p>
              </div>
              <div class="col-md-8">
                <input type="password" class="form-control" placeholder="Password" value="<?php echo ($mahasiswa['password']); ?>" name="password"/>
              </div>
              <div class="col-md-4">
                <p class="fw-bold mb-2">Angkatan</p>
              </div>
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Angkatan" value="<?php echo ($mahasiswa['angkatan']); ?>" name="angkatan"/>
              </div>
              <div class="col-md-4">
                <p class="fw-bold mb-2">Prodi</p>
              </div>
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Prodi" value="<?php echo ($mahasiswa['prodi']); ?>" name="prodi"/>
              </div>
              <div class="col-md-4">
                <p class="fw-bold mb-2">Tanggal Lahir</p>
              </div>
              <div class="col-md-8">
                <input type="date" class="form-control" placeholder="Angkatan" />
              </div>
            </div>
          </div>

          <!-- Button-->
          <div class="d-flex justify-content-end mt-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
  </main>

  <!-- Footer -->
  <?php include('views/components/mahasiswa/footer.php') ?>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="http://localhost/bebas-tanggungan/views/assets/js/button.js"></script>
</body>

</html>