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
  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/admin/dashboadAdm.css">
  <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/admin/sidebar.css">
</head>

<body>
  <!-- Sidebar -->
  <?php include('views/components/admin/sideBar.php') ?>

  <!-- Main Content -->
  <div id="mainPage" style="margin-left: 300px; padding: 60px 20px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3>Verifikasi Tanggungan</h3>
      <a href="http://localhost/bebas-tanggungan/admin/logout" class="btn btn-danger" type="button">
        < Keluar</a>
    </div>

    <!-- List Group -->
    <div class="card">
      <div class="list-group d-flex-column justify-content-start p-3">
        <div class="list-group d-flex flex-wrap gap-2">
          <a href="kelola/d2-ppls">
            <button type="button" class="btn btn-light text-black border-secondary list-group-item-action">
              DIII Pengembangan (Piranti) Perangkat Lunak Situs
            </button>
          </a>
          <a href="kelola/d4-ti">
            <button type="button" class="btn btn-light text-black border-secondary list-group-item-action mt-3" onclick="showTable('D-IV Teknik Informatika')">
              D-IV Teknik Informatika
            </button>
          </a>
          <a href="kelola/d4-sib">
            <button type="button" class="btn btn-light text-black border-secondary list-group-item-action mt-3" onclick="showTable('D-IV Sistem Informasi Bisnis')">
              D-IV Sistem Informasi Bisnis
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include('views/components/admin/footer.php') ?>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
</body>

</html>