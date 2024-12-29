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
  <div class="content" style="margin-left: 300px; padding: 60px 20px;">
    <div class="d-flex justify-content-between align-items-center">
      <h1>Hai, <span class="text-primary"><?php echo($admin['nama_admin']); ?></span>!</h1>
      <a href="http://localhost/bebas-tanggungan/admin/logout" class="btn btn-danger" type="button">
        < Keluar</a>
    </div>
    <h2 class="mt-5 fw-bold">Dashboard <span style="color: #fA9D1C;">Informasi Tanggungan</span></h2>

    <div class="row mt-4">
      <div class="col-md-3">
        <div class="card text-start bg-primary text-white p-3 h-100">
          <h5 class="fs-5 fw-light">Total Jumlah Tanggungan</h5>
          <h2>20</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-start bg-primary text-white p-3 h-100">
          <h5 class="fs-5 fw-light">Tanggungan yang belum diselesaikan</h5>
          <h2>5</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-start bg-primary text-white p-3 h-100">
          <h5 class="fs-5 fw-light">Tanggungan yang sudah diselesaikan</h5>
          <h2>10</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-start bg-primary text-white p-3 h-100">
          <h5 class="fs-5 fw-light">Tanggungan saat ini</h5>
          <h2>5</h2>
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