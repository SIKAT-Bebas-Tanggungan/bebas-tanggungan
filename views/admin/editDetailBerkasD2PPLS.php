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
            <h3>Edit Detail Berkas D-II Pengembangan Perangkat Lunak Situs</h3>
            <button class="btn btn-danger ms-auto" type="button">
                < Keluar</button>
        </div>

        <main class="container my-5">
            <div class="text-start">
                <div class="row">
                    <div class="col">
                        <div class="">      
                            <label class="form-check-label d-flex align-items-start">
                                <input class="form-check-input border-black me-2" type="radio" name="berkas" id="berkas">
                                <span>Unduh Berkas Yang diperlukan di link berikut:</span>
                            </label>
                            <p>
                                <a href="#">Bebas Tanggungan JTI!</a>
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="">      
                            <label class="form-check-label d-flex align-items-start">
                                <input class="form-check-input border-black me-2" type="radio" name="berkas" id="alur">
                                <span>Alur Bebas Tanggungan di link berikut:</span>
                            </label>
                            <p>
                                <a href="#">Alur Bebas Tanggungan JTI!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input border-black me-2" type="radio" name="berkas" id="tugasAkhir">
                <label class="form-check-label d-flex align-items-center mt-4">
                    <div class="row">
                        <h5 class="fw-bold">1. TUGAS AKHIR</h5>
                        Berkas yang diunggah:
                        <ol class="ms-3">
                            <li>Laporan Tugas Akhir/Skripsi yang sudah ber TTD format PDF maksimal 10 MB.</li>
                            <li>Upload Program/Aplikasi Tugas Akhir/Skripsi format ZIP/RAR maksimal 1 GB.</li>
                            <li>Upload Surat Pernyataan Publikasi Jurnal/Paper/Conference/Seminar/HAKI/dll.</li>
                        </ol>
                    </div>
                </label>
            </div>
   
            <div class="form-check">
                <input class="form-check-input border-black me-2" type="radio" name="berkas" id="docAdmin">
                <label class="form-check-label d-flex align-items-center mt-4">
                    <div class="row">  
                        <h5 class="fw-bold">2. ADMINISTRASI PROGRAM STUDI</h5>
                        Berkas yang diunggah dalam format PDF maksimal 1 MB:
                        <ol class="ms-3">
                            <li>Tanda Terima Penyerahan Laporan Tugas Akhir/Skripsi ke Ruang Baca.</li>
                            <li>Tanda Terima Penyerahan Laporan PKL/Magang ke Ruang Baca.</li>
                            <li>Upload Surat Bebas Kompen.</li>
                            <li>Upload Scan TOEIC dengan skor minimal 450 untuk Diploma 4.</li>
                        </ol>
                    </div> 
                </label>
            </div>
        </main>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
            <a href="editLinkBerkasD2PPLS.php" class="btn btn-info text-white me-md-2" type="button">Edit</a>
            <button class="btn btn-primary" type="button">Simpan</button>
        </div>

        <!-- Footer -->
        <?php include('../components/admin/footer.php') ?>

        <!-- Bootstrap JS -->
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                crossorigin="anonymous"></script>
        <script src="../assets/js/button.js"></script>
        <script src="../assets/js/admin/berkasD2PPLS.js"></script>
</body>

</html>