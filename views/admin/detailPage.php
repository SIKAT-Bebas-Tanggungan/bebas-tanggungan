<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Verifikasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/admin/dashboadAdm.css">
  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/admin/sidebar.css">
</head>

<body>
  <!-- Sidebar -->
  <?php include('views/components/admin/sideBar.php') ?>

  <div class="content" style="margin-left: 300px; padding: 60px 20px;">
    <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <button class="btn btn-white me-4 border border-0 p-2 mb-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; transform: rotate(90deg);">
          <a onclick="goBack()"><img src="http://localhost/bebas-tanggungan/views/assets/icons/arrowToggleFAQ.svg" alt="Toggle FAQ" style="width: 24px; height: 24px;"></a>
        </button>
        <h3>Edit Pengguna</h3>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="http://localhost/bebas-tanggungan/admin/logout" class="btn btn-danger" type="button">
          < Keluar</a>
      </div>
    </div>

    <div class="mt-4">
      <h2 id="studentName"><?php echo htmlspecialchars($mahasiswa['nama_mahasiswa']); ?></h2>
      <hr>
      <p id="studentDetails">
        NIM: <?php echo htmlspecialchars($mahasiswa['nim']); ?><br />
        Program Studi: <?php echo htmlspecialchars($mahasiswa['prodi']); ?><br />
        Jurusan: Teknologi Informasi
      </p>
      <hr>

      <!-- Cards for Verification Items -->
      <div class="d-flex flex-column gap-3">
        <div class="card p-3 shadow-sm">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-8 d-flex flex-column">
              <span>Laporan Tugas Akhir/Skripsi</span>
              <a href="#">Laporan_akhir_mahasiswa_123</a>
            </div>
            <div class="col-4 d-flex justify-content-end">
              <div class="btn btn-sm bg-info d-flex align-items-center rounded">
                <img src="http://localhost/bebas-tanggungan/views/assets/icons/verifCheck.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card p-3 shadow-sm">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-8 d-flex flex-column">
              <span>Program/Aplikasi Tugas Akhir</span>
              <a href="#">Laporan_akhir_mahasiswa_123</a>
            </div>
            <div class="col-4 d-flex justify-content-end">
              <div class="btn btn-sm bg-info d-flex align-items-center rounded">
                <img src="http://localhost/bebas-tanggungan/views/assets/icons/verifCheck.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card p-3 shadow-sm">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-8 d-flex flex-column">
              <span>Upload Surat Pernyataan Publikasi</span>
              <a href="#">Laporan_akhir_mahasiswa_123</a>
            </div>
            <div class="col-4 d-flex justify-content-end">
              <div class="btn btn-sm bg-info d-flex align-items-center rounded">
                <img src="http://localhost/bebas-tanggungan/views/assets/icons/verifCheck.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card p-3 shadow-sm">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-8 d-flex flex-column">
              <span>Upload Tanda Terima Penyerahan Laporan TA/Skripsi</span>
              <a href="#">Laporan_akhir_mahasiswa_123</a>
            </div>
            <div class="col-4 d-flex justify-content-end">
              <div class="btn btn-sm bg-info d-flex align-items-center rounded">
                <img src="http://localhost/bebas-tanggungan/views/assets/icons/verifCheck.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card p-3 shadow-sm">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-8 d-flex flex-column">
              <span>Upload Tanda Terima Penyerahan Laporan PKL</span>
              <a href="#">Laporan_akhir_mahasiswa_123</a>
            </div>
            <div class="col-4 d-flex justify-content-end">
              <div class="btn btn-sm bg-info d-flex align-items-center rounded">
                <img src="http://localhost/bebas-tanggungan/views/assets/icons/verifCheck.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card p-3 shadow-sm">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-8 d-flex flex-column">
              <span>Upload Scan TOEIC (Minimal 450 untuk Diploma 4)</span>
              <a href="#">Laporan_akhir_mahasiswa_123</a>
            </div>
            <div class="col-4 d-flex justify-content-end">
              <div class="btn btn-sm bg-info d-flex align-items-center rounded">
                <img src="http://localhost/bebas-tanggungan/views/assets/icons/verifCheck.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Status Submission -->
      <div class="card p-3 mt-4 shadow-sm">
        <div class="d-flex justify-content-between align-items-center">
          <strong>Status Pengajuan:</strong>
          <div>
            <button class="btn btn-info btn-sm ms-3"><img src="http://localhost/bebas-tanggungan/views/assets/icons/verifCheck.svg" alt=""></button>
            <button class="btn btn-danger btn-sm ms-2"><img src="http://localhost/bebas-tanggungan/views/assets/icons/notVerif.svg" alt=""></button>
          </div>
        </div>
      </div>

      <!-- Admin Notes -->
      <div class="card p-3 mt-4 shadow-sm">
        <label for="adminNotes" class="form-label">Catatan Admin untuk Mahasiswa:</label>
        <textarea class="form-control" id="adminNotes" rows="3"></textarea>
      </div>
      <div class="d-flex justify-content-end mt-3 mb-5">
        <button class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include('views/components/admin/footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="http://localhost/bebas-tanggungan/views/assets/js/button.js"></script>
</body>

</html>