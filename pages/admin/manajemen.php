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
  <link rel="stylesheet" href="../../assets/css/admin/dashboadAdm.css">
  <link rel="stylesheet" href="../../assets/css/admin/sidebar.css">
</head>

<body>
  <!-- Sidebar -->
  <?php include('../components/admin/sideBar.php') ?>

 <!-- Main Content -->
 <div class="content" style="margin-left: 300px; padding: 60px 20px">
  <div class="d-flex justify-content-between align-items-center">
    <h3>Data Pengguna</h3>
      <button class="btn btn-danger" type="button">< Keluar</button>
  </div>

    <!--Search input-->
  <?php include('../components/admin/searchInput.php') ?>


  <div class="d-flex justify-content-end mt-4">
    <button class="btn btn-outline-info p-2" id="btn-add-user" style="border-radius: 20px;">
    <a id="add-user-link" href="#" style="text-decoration: none; color: black;">
      <img src="../../assets/icons/addUser.svg" alt="iconAddUser"> Tambah Pengguna
    </a>
  </button>
  </div>
  <ul class="nav nav-tabs" id="userTabs">
  <li class="nav-item">
    <button class="nav-link border text-black active bg-primary text-white" data-tab="admin">
      Admin
    </button>
  </li>
  <li class="nav-item">
    <button class="nav-link border text-black" data-tab="mahasiswa">
      Mahasiswa
    </button>
  </li>
</ul>

<div id="content-admin" class="table-content" style="display: none;">
  <div class="table-responsive">
    <table class="table table-white align-middle w-100">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Username</th>
          <th>Nomor Telepon</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Admin</td>
          <td>Admin@admin</td>
          <td>82134567900</td>
          <td>
            <a href="formEditAdm.php"><button class="btn btn-info"><img src="../../assets/icons/editUser.svg" alt="Delete" /></button></a>
            <button class="btn btn-danger"><img src="../../assets/icons/deleteUser.svg" alt="Edit" /></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div id="content-mahasiswa" class="table-content" style="display: none;">
  <div class="table-responsive">
    <table class="table table-white align-middle w-100">
      <thead>
        <tr>
          <th>Nama</th>
          <th>NIM</th>
          <th>Prodi</th>
          <th>Angkatan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Mahasiswa123</td>
          <td>1234123123</td>
          <td>D4 TI</td>
          <td>2024</td>
          <td>
            <a href="formEditMhs.php"><button class="btn btn-info"><img src="../../assets/icons/editUser.svg" alt="Delete" /></button></a>
            <button class="btn btn-danger"><img src="../../assets/icons/deleteUser.svg" alt="Edit" /></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


  <!-- Footer -->
  <?php include('../components/admin/footer.php') ?>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
    
  <!--js Tabs Table-->
  <script src="../../assets/js/admin/tabsHandler.js"></script>  
</body>

</html>