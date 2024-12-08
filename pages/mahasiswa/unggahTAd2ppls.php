<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unggah Berkas - SIKAT-BATA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="../../assets/css/mahasiswa/dashboardMhs.css">
  <link rel="stylesheet" href="../../assets/css/mahasiswa/navbarWithLink.css">
  <link rel="stylesheet" href="../../assets/css/mahasiswa/footer.css">

</head>
<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
  <?php include('../components/mahasiswa/navbarWithLink.php') ?>

    <!-- Main Content -->
    <div class="container my-5">
        <h2 class="section-title fs-3 fw-bold mb-4">Unggah <span class="berkas">Berkas</span></h2>

        <!-- Card Utama: Semua Form -->
        <div class="card p-4 shadow-sm mb-4">
            <div class="d-grid gap-2 d-md-block">
                 <a onclick="goBack()" class="btn btn-outline-secondary mb-3 d-inline-block me-2">< Kembali</a>
                    </div>
                    <form>
                        <!-- Card 1: Laporan Tugas Akhir/Skripsi -->
                        <div class="card p-4 shadow-sm mb-4">
                            <h5 class="fs-5 fw-bold">Laporan Tugas Akhir/Skripsi<span class="text-danger">*</span></h5>
                            <input type="file" class="form-control" id="laporanTugasAkhir" />
                            <small class="mt-2 text-muted">
                                Laporan terdiri dari:<br />
                                - Cover<br />
                                - Daftar Isi-Gambar-Tabel<br />
                                - Kata Pengantar<br />
                                - Abstrak Indo-Inggris<br />
                                - Pengesahan (ttd. lengkap)<br />
                                - Bab 1 sampai Penutup<br />
                                - Daftar Pustaka<br />
                                - Lampiran (bila ada)<br />

                            </small>
                            <small class="mt-4 text-muted">Catatan: Upload dalam bentuk PDF, maksimal 10 MB.</small>
                        </div>

                        <!-- Card 2: Program/Aplikasi Tugas Akhir -->
                        <div class="card p-4 shadow-sm mb-4">
                            <h5 class="fs-5 fw-bold">Program/Aplikasi Tugas Akhir<span class="text-danger">*</h5>
                            <input type="file" class="form-control" id="programAplikasi" />
                            <small class="mt-2 text-muted">Catatan: Upload dalam bentuk ZIP/RAR, maksimal 1 GB.</small>
                        </div>

                        <!-- Card 3: Upload Penyerahan Alat / Buku Sumbangan -->
                        <div class="card p-4 shadow-sm mb-4">
                            <h5 class="fs-5 fw-bold">Upload Penyerahan Alat / Buku Sumbangan<span class="text-danger">*</h5>
                            <input type="file" class="form-control" id="suratPublikasi" />
                            <small class="mt-2 text-muted">Format PDF, maksimal 1 MB.</small>
                        </div>

                        <!-- Card 4: Tanda Terima Penyerahan Laporan Akhir/Skripsi -->
                        <div class="card p-4 shadow-sm mb-4">
                            <h5 class="fs-5 fw-bold">Tanda Terima Penyerahan Laporan Akhir/Skripsi<span
                                    class="text-danger">*</h5>
                            <input type="file" class="form-control" id="tandaTerimaLA" />
                            <small class="mt-2 text-muted">Format PDF, maksimal 1 MB.</small>
                        </div>

                        <!-- Card 5: Tanda Terima Penyerahan Laporan PKL -->
                        <div class="card p-4 shadow-sm mb-4">
                            <h5 class="fs-5 fw-bold">Tanda Terima Penyerahan Laporan PKL<span class="text-danger">*</h5>
                            <input type="file" class="form-control" id="tandaTerimaPKL" />
                            <small class="mt-2 text-muted">Format PDF, maksimal 1 MB.</small>
                        </div>

                        <!-- Card 6: Upload Bukti Pengisian Tracer Study -->
                        <div class="card p-4 shadow-sm mb-4">
                            <h5 class="fs-5 fw-bold">Upload Bukti Pengisian Tracer Study<span class="text-danger">*</h5>
                            <input type="file" class="form-control" id="scanToeic" />
                            <small class="mt-2 text-muted">Format PDF, maksimal 1 MB.</small>
                        </div>
                    </form>
                </div>

        <!--Button & danger text-->
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-danger mb-4">*Form tidak boleh kosong</div>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary me-2 rounded-pill">Unggah</button>
                <button type="button" class="btn btn-info text-light rounded-pill">Simpan</button>
            </div>
        </div>
    </div>

  <!-- Footer -->
  <?php include('../components/mahasiswa/footer.php') ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <script src="../../assets/js/button.js"></script>
</body>

</html>