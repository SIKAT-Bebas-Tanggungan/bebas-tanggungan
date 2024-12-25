<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        crossorigin="anonymous" />
    <!-- Font Poppins -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/admin/dashboadAdm.css">
    <link rel="stylesheet" href="../assets/css/admin/sidebar.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Sidebar -->
    <?php include('../components/admin/sideBar.php') ?>

    <!-- Main Content -->
    <div id="mainPage" style="margin-left: 300px; padding: 60px 20px;">
        <div class="d-flex justify-content-start align-items-center mb-4">
            <button class="btn btn-white me-4 mb-2 border border-0" style="width: 50px; height: 50px; transform: rotate(90deg);">
                <a onclick="goBack()"><img src="../assets/icons/arrowToggleFAQ.svg" alt="Toggle FAQ" style="width: 24px; height: 24px;"></a>
            </button>
            <h3>Edit Detail Form D-IV Teknik Informatika</h3>
            <button class="btn btn-danger ms-auto" type="button">
                < Keluar</button>
        </div>

        <div class="form-check">
            <input class="form-check-input border-black" type="radio" name="editOption" id="laporanTugasAkhir">
            <label class="form-check-label d-flex justify-content-between align-items-start" for="laporanTugasAkhir">
                <span>
                    <span class="fw-medium fs-5">Laporan Tugas Akhir/Skripsi</span><span class="fw-bold text-danger">*</span>
                    <div class="row mt-3">
                        <div class="col-md-20">
                            <dl class="mb-0">
                                Laporan terdiri dari:
                                <li style="list-style-type: none;">- Cover</li>
                                <li style="list-style-type: none;">- Daftar Isi-Gambar-Tabel</li>
                                <li style="list-style-type: none;">- Kata Pengantar</li>
                                <li style="list-style-type: none;">- Abstrak Indo-Inggris</li>
                                <li style="list-style-type: none;">- Pengesahan (ttd lengkap)</li>
                                <li style="list-style-type: none;">- Bab 1 sampai Penutup</li>
                                <li style="list-style-type: none;">- Daftar Pustaka</li>
                                <li style="list-style-type: none;">- Lampiran (bila ada)</li>
                                <div class="mt-3">catatan: upload dalam bentuk pdf dan sudah bertanda tangan (max 10 MB)</div>
                            </dl>
                        </div>
                    </div>
                </span>
                <span class="col mt-5 text-end">Upload 1 supported file: PDF. Max 10 MB.</span>
            </label>
        </div>

        <div class="form-check mt-4">
            <input class="form-check-input border-black" type="radio" name="editOption" id="programAplikasi">
            <label class="form-check-label w-100 mt" for="programAplikasi">
                <span class="fw-medium fs-5">Program/Aplikasi Tugas Akhir</span><span class="fw-bold text-danger">*</span>
                <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        catatan: Format PDF max 1 MB
                    </div>
                    <div class="col-4 text-end">
                        Upload 1 supported file: PDF. Max 1 MB.
                    </div>
                </div>
            </label>
        </div>

        <div class="form-check mt-4">
            <input class="form-check-input border-black" type="radio" name="editOption" id="uploadSuratPublikasi">
            <label class="form-check-label w-100 mt" for="uploadSuratPublikasi">
                <span class="fw-medium fs-5">Upload Surat Pernyataan Publikasi</span><span class="fw-bold text-danger">*</span>
                <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        catatan: Format PDF max 1 MB
                    </div>
                    <div class="col-4 text-end">
                        Upload 1 supported file: PDF. Max 1 MB.
                    </div>
                </div>
            </label>
        </div>

        <div class="form-check mt-4">
            <input class="form-check-input border-black" type="radio" name="editOption" id="uploadTandaPenyerahanLaporanAkhir">
            <label class="form-check-label w-100 mt" for="uploadTandaPenyerahanLaporanAkhir">
                <span class="fw-medium fs-5">Upload Tanda Terima Penyerahan Laporan Akhir/Skripsi</span><span class="fw-bold text-danger">*</span>
                <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        catatan: Format PDF max 1 MB
                    </div>
                    <div class="col-4 text-end">
                        Upload 1 supported file: PDF. Max 1 MB.
                    </div>
                </div>
            </label>
        </div>

        <div class="form-check mt-4">
            <input class="form-check-input border-black" type="radio" name="editOption" id="uploadTandaPeneyerahanLaporanPKL">
            <label class="form-check-label w-100 mt" for="uploadTandaPeneyerahanLaporanPKL">
                <span class="fw-medium fs-5">Upload Tanda Terima Penyerahan Laporan PKL</span><span class="fw-bold text-danger">*</span>
                <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        catatan: Format PDF max 1 MB
                    </div>
                    <div class="col-4 text-end">
                        Upload 1 supported file: PDF. Max 1 MB.
                    </div>
                </div>
            </label>
        </div>

        <div class="form-check mt-4 mb-5">
            <input class="form-check-input border-black" type="radio" name="editOption" id="UploadTOEIC">
            <label class="form-check-label w-100 mt" for="UploadTOEIC">
                <span class="fw-medium fs-5">Upload Scan TOEIC dengan skor minimal 450 untuk Diploma 4</span><span class="fw-bold text-danger">*</span>
                <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        catatan: Format PDF max 1 MB
                    </div>
                    <div class="col-4 text-end">
                        Upload 1 supported file: PDF. Max 1 MB.
                    </div>
                </div>
            </label>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-5">
  <a href="editMoreDetailFormD4TI.php" class="btn btn-info text-white me-md-2" type="button">Edit</a>
  <button class="btn btn-primary" type="button">Simpan</button>
</div>
        <!-- Footer -->
        <?php include('../components/admin/footer.php') ?>

        <!-- Bootstrap JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="../assets/js/button.js"></script>
</body>

</html>