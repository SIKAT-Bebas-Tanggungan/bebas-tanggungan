<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Status Bebas Tanggungan - SIKAT-BATA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
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
    <div class="container my-5">
        <h2 class="section-title fs-3 fw-bold mb-4">Status <span style="color: #FA9D1C">Bebas Tanggungan</span></h2>
        <a href="dashboardMhs.html" class="btn btn-outline-secondary mb-3 d-inline-block me-2">
            < Kembali</a>
                <p class="mb-1 fs-4">Hai, <span class="fw-medium">MAHASISWA 123!</span></p>
                <hr />
                <p>NIM: <strong>1231231234</strong></p>
                <p>Program Studi: <strong>DII PENGEMBANGAN PIRANTI LUNAK SITUS</strong></p>
                <p>Jurusan: <strong>TEKNOLOGI INFORMASI</strong></p>
                <hr />

                <!-- Card 1: Alat/Program/Aplikasi -->
                <div class="card p-4 shadow-sm mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Alat/Program/Aplikasi</h5>
                        <span class="bg-success text-white rounded-pill p-2">Selesai</span>
                    </div>
                </div>

                <!-- Card 2: Laporan -->
                <div class="card p-4 shadow-sm mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Laporan</h5>
                        <span class="bg-info text-white rounded-pill p-2">Menunggu Verifikasi</span>
                    </div>
                </div>

                <!-- Card 3: Upload Penyerahan Alat / Buku Sumbangan -->
                <div class="card p-4 shadow-sm mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Penyerahan Alat / Buku Sumbangan</h5>
                        <span class="bg-info text-white rounded-pill p-2">Menunggu Verifikasi</span>
                    </div>
                </div>

                <!-- Card 4: Distribusi Laporan Skripsi -->
                <div class="card p-4 shadow-sm mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Distribusi Laporan Skripsi</h5>
                        <span class="bg-info text-white rounded-pill p-2">Menunggu Verifikasi</span>
                    </div>
                </div>

                <!-- Card 5: Distribusi Laporan Magang -->
                <div class="card p-4 shadow-sm mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Distribusi Laporan Magang</h5>
                        <span class="bg-info text-white rounded-pill p-2">Menunggu Verifikasi</span>
                    </div>
                </div>

                <!-- Card 6: Pengisian Tracer Study -->
                <div class="card p-4 shadow-sm mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Pengisian Tracer Study</h5>
                        <span class="bg-success text-white rounded-pill p-2">Selesai</span>
                    </div>
                </div>

                <!-- Card 7: Status Pengajuan -->
                <div class="card p-4 shadow-sm mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Status Pengajuan</h5>
                        <span class="bg-danger text-white rounded-pill p-2">Tidak Disetujui</span>
                    </div>
                </div>

                <!-- Card for Admin Notes -->
                <div class="card p-4 shadow-sm mb-5">
                    <h5>Catatan Admin:</h5>
                    <p class="text-muted">Berkas yang diperlukan untuk bebas tanggungan belum lengkap</p>
                </div>

                <div class="mt-5"></div> <!-- Additional space below the card -->
    </div>

 <!-- Footer -->
 <?php include('../components/mahasiswa/footer.php') ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <script src="../assets/js/button.js"></script>
</body>
</html>