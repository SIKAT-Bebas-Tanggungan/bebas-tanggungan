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
      <a href="formTambahUser.php" style="text-decoration: none; color: black  ;"><img src="../../assets/icons/addUser.svg" alt="iconAddUser"> Tambah Pengguna</a>
    </button>
  </div>
  <ul class="nav nav-tabs" id="userTabs">
    <li class="nav-item">
      <a class="nav-link border text-black" aria-current="page" href="#" data-tab="admin">Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link border text-black" href="#" data-tab="mahasiswa">Mahasiswa</a>
    </li>
</ul> 
<div class="table-responsive">
<table class="table table-white align-middle w-100" id="adminTableBody" style="width: 100%;">
  <thead>
    <tr>  
      <th class="fw-medium p-2">Nama</th>
      <th class="fw-medium">Username</th>
      <th class="fw-medium">Nomor Telepon</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Admin</td>
      <td>Admin@admin</td>
      <td>82134567900</td>
      <td>
        <a href="formEditUser.php"><button class="btn btn-info"><img src="../../assets/icons/editUser.svg" alt="Delete" /></button></a>
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
  <script src="../../assets/js/admin/navTabs.js"></script>
  
</body>

</html>