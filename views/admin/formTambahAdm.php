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
      <div class="d-flex align-items-center">
        <button class="btn btn-white me-4 border border-0 p-2 mb-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; transform: rotate(90deg);">
          <a onclick="goBack()"><img src="http://localhost/bebas-tanggungan/views/assets/icons/arrowToggleFAQ.svg" alt="Toggle FAQ" style="width: 24px; height: 24px;"></a>
        </button>
        <h3>Tambah Pengguna</h3>
      </div>
      <a href="http://localhost/bebas-tanggungan/admin/logout" class="btn btn-danger" type="button">
        < Keluar</a>
    </div>
  </div>

  <div class="container mt-3">

    <!-- Card Content -->
    <!-- Card Form Create Admin -->
    <div class="card p-4 border-0 shadow-sm card-form   " id="formCreateAdm" style="border-radius: 10px; margin-top: 0; border-top-left-radius: 0; border-top-right-radius: 0;">
      <form method="POST">
        <div class="row mb-4 align-items-center">
          <label for="name" class="col-sm-3 col-form-label fw-semibold">Nama:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control rounded-pill px-3 py-2" name="nama_admin" placeholder="Nama">
          </div>
        </div>
        <div class="row mb-4 align-items-center">
          <label for="username" class="col-sm-3 col-form-label fw-semibold">Username:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control rounded-pill px-3 py-2" name="username" placeholder="Username">
          </div>
        </div>
        <div class="row mb-4 align-items-center">
          <label for="password" class="col-sm-3 col-form-label fw-semibold">Password:</label>
          <div class="col-sm-9">
            <input type="password" class="form-control rounded-pill px-3 py-2" name="password" placeholder="Password">
          </div>
        </div>
        <div class="row mb-4 align-items-center">
          <label for="phone" class="col-sm-3 col-form-label fw-semibold">Nomor Telepon:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control rounded-pill px-3 py-2" name="no_telp" placeholder="Nomor Telepon">
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <button type="submit" id="addAdmButton" class="btn btn-info text-white fw-bold px-4 rounded-3" style="width: 150px;">Tambah</button>
        </div>
      </form>
    </div>

    <!-- Footer -->
    <?php include('views/components/admin/footer.php') ?>

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"></script>
    <script src="http://localhost/bebas-tanggungan/views/assets/js/button.js"></script>
</body>

</html>