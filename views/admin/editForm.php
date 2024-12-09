<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    crossorigin="anonymous"
  />
   <!-- Font Poppins -->
   <link
   href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
   rel="stylesheet"
 />
 <link rel="stylesheet" href="../assets/css/admin/dashboadAdm.css">
 <link rel="stylesheet" href="../assets/css/admin/sidebar.css">
</head>
<body>
  <!-- Sidebar -->
   <?php include('../components/admin/sideBar.php') ?>

 <!-- Main Content -->
 <div id="mainPage" style="margin-left: 300px; padding: 60px 20px;">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Edit Form</h3>
      <button class="btn btn-danger" type="button">< Keluar</button>
  </div>

  <!-- List Group -->
  <div class="card">
    <div class="list-group d-flex-column justify-content-start p-3">
  <div class="list-group d-flex flex-wrap gap-2">
    <a href="editFormProdi.php">
    <button type="button" class="btn btn-light text-black border-secondary list-group-item-action">
      Edit Form dan Alur
    </button>
    </a>
    <a href="editFormProdi.php">
    <button type="button" class="btn btn-light text-black border-secondary list-group-item-action mt-3" onclick="showTable('D-IV Teknik Informatika')">
      Edit Berkas Tugas Akhir dan Form
    </button>
  </div>
</div>
</div>
</div>

  <!-- Footer -->
  <?php include('../components/admin/footer.php') ?>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"
  ></script>
</body>
</html>