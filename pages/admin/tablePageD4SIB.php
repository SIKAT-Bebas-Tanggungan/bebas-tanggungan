<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verifikasi Tanggungan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <!-- Font Poppins -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="../../assets/css/admin/dashboadAdm.css">
  <link rel="stylesheet" href="../../assets/css/admin/sidebar.css">
</head>
<body>
  <!-- Sidebar -->
   <?php include('../components/admin/sideBar.php') ?>

   <div id="tablePage" style="margin-left: 300px; padding: 60px 20px;">
  <div class="d-flex justify-content-start align-items-center mb-4">
    <button class="btn btn-white me-4 mb-2 border border-0" style="width: 50px; height: 50px; transform: rotate(90deg);">
      <a onclick="goBack()"><img src="../../assets/icons/arrowToggleFAQ.svg" alt="Toggle FAQ" style="width: 24px; height: 24px;"></a>
    </button>
    <h3>Verifikasi Tanggungan</h3>
    <button class="btn btn-danger ms-auto" type="button">< Keluar</button>
  </div>

    <!-- Search Input -->
    <?php include('../components/admin/searchInput.php') ?>

    <div class="table-responsive mt-4">
      <table class="table table-white table-bordered align-middle">
        <thead class="table-white">
          <tr>
            <th class="text-start">Nama</th>
            <th class="text-start">NIM</th>
            <th class="text-start">Prodi</th>
            <th class="text-start">Angkatan</th>
            <th class="text-start">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-start">Nathanael Juan</td>
            <td class="text-start">210001</td>
            <td class="text-start">D-IV Sistem Informasi Bisnis</td>
            <td class="text-start">2023</td>
            <td class="text-start">
              <a href="detailPage.php" class="btn btn-primary btn-sm">Verifikasi Tanggungan</a>
            </td>
          </tr>
          <tr>
            <td class="text-start">Ivansyah Eka</td>
            <td class="text-start">210002</td>
            <td class="text-start">D-IV Sistem Informasi Bisnis</td>
            <td class="text-start">2024</td>
            <td class="text-start">
              <a href="detailPage.php" class="btn btn-primary btn-sm">Verifikasi Tanggungan</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Footer -->
  <?php include('../components/admin/footer.php') ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../../assets/js/button.js"></script>
</body>
</html>
