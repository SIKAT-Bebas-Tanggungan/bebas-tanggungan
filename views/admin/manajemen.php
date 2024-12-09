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
  <div class="content" style="margin-left: 300px; padding: 60px 20px">
    <div class="d-flex justify-content-between align-items-center">
      <h3>Data Pengguna</h3>
      <a href="http://localhost/bebas-tanggungan/admin/logout" class="btn btn-danger" type="button">
        < Keluar</a>
    </div>

    <!--Search input-->
    <?php include('views/components/admin/searchInput.php') ?>


    <div class="d-flex justify-content-end mt-4">
      <button class="btn btn-outline-info p-2" id="btn-add-user" style="border-radius: 20px;">
        <a href="formTambahUser.php" style="text-decoration: none; color: black  ;"><img src="http://localhost/bebas-tanggungan/views/assets/icons/addUser.svg" alt="iconAddUser"> Tambah Pengguna</a>
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
      <table class="table table-striped align-middle w-100" id="adminTableBody" style="width: 100%;">
        <thead>
          <tr>
            <th class="fw-medium p-2">Nama</th>
            <th class="fw-medium">Username</th>
            <th class="fw-medium">Nomor Telepon</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($admin as $row): ?>
            <tr>
              <td><?php echo htmlspecialchars($row['nama_admin']); ?></td>
              <td><?php echo htmlspecialchars($row['username']); ?></td>
              <td><?php echo htmlspecialchars($row['no_telp']); ?></td>
              <td>
                <a href="http://localhost/bebas-tanggungan/admin/manajemen/edit-user/<?php echo $row['id_admin']; ?>" class="btn btn-info">
                  <img src="http://localhost/bebas-tanggungan/views/assets/icons/editUser.svg" alt="Edit" />
                </a>
                <a href="http://localhost/bebas-tanggungan/admin/manajemen/delete-user/<?php echo $row['id_admin']; ?>" class="btn btn-danger">
                  <img src="http://localhost/bebas-tanggungan/views/assets/icons/deleteUser.svg" alt="Delete" />
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Footer -->
  <?php include('views/components/admin/footer.php') ?>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>

  <!--js Tabs Table-->
  <script src="http://localhost/bebas-tanggungan/views/assets/js/admin/navTabs.js"></script>

</body>

</html>