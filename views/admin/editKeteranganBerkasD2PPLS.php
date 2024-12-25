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
            <h3>Edit Keterangan Berkas D-II Pengembangan Perangkat Lunak Situs</h3>
            <button class="btn btn-danger ms-auto" type="button">
                < Keluar</button>
        </div>

        <div class="container mt-3">
      
      <!-- Card Content -->
      <!-- Card Form Create Admin -->
      <div class="card p-4 border-0 shadow-sm card-form   " id="formCreateAdm" style="border-radius: 10px; margin-top: 0; border-top-left-radius: 10px; border-top-right-radius: 10px;">
        <form>
          <div class="row mb-4 align-items-center">
            <label for="judul" class="col-sm-3 col-form-label fw-medium">Judul</label>
            <div class="col-sm-9">
              <input type="text" class="form-control px-3 py-2" id="judul" placeholder="Masukkan Judul">
            </div>
          </div>
          <div class="row mb-4 align-items-center">
            <label for="username" class="col-sm-3 col-form-label fw-medium">Keterangan</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control px-3 py-2" id="keterangan" placeholder="Masukkan Keterangan"></textarea>
            </div>
          </div>
        </form>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
            <a href="editLinkBerkasD2PPLS.php" class="btn btn-info text-white me-md-2" type="button">Simpan</a>
            
        </div>
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