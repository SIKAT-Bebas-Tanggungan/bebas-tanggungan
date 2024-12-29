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
        <a id="add-user-link" style="text-decoration: none; color: black;">
          <img src="http://localhost/bebas-tanggungan/views/assets/icons/addUser.svg" alt="iconAddUser"> Tambah Pengguna
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
            <?php foreach ($admin as $row): ?>
              <tr>
                <td><?php echo htmlspecialchars($row['nama_admin']); ?></td>
                <td><?php echo htmlspecialchars($row['username']); ?></td>
                <td><?php echo htmlspecialchars($row['no_telp']); ?></td>
                <td>
                  <a href="http://localhost/bebas-tanggungan/admin/manajemen/edit-admin/<?php echo $row['id_admin']; ?>" class="btn btn-info">
                    <img src="http://localhost/bebas-tanggungan/views/assets/icons/editUser.svg" alt="Edit" />
                  </a>
                  <a href="http://localhost/bebas-tanggungan/admin/manajemen/delete-admin/<?php echo $row['id_admin']; ?>" class="btn btn-danger">
                    <img src="http://localhost/bebas-tanggungan/views/assets/icons/deleteUser.svg" alt="Delete" />
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
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
            <?php foreach ($mahasiswa as $row): ?>
              <tr>
                <td><?php echo htmlspecialchars($row['nama_mahasiswa']); ?></td>
                <td><?php echo htmlspecialchars($row['nim']); ?></td>
                <td><?php echo htmlspecialchars($row['prodi']); ?></td>
                <td><?php echo htmlspecialchars($row['angkatan']); ?></td>
                <td>
                  <a href="http://localhost/bebas-tanggungan/admin/manajemen/edit-mahasiswa/<?php echo $row['nim']; ?>" class="btn btn-info">
                    <img src="http://localhost/bebas-tanggungan/views/assets/icons/editUser.svg" alt="Edit" />
                  </a>
                  <a href="http://localhost/bebas-tanggungan/admin/manajemen/delete-mahasiswa/<?php echo $row['nim']; ?>" class="btn btn-danger">
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
    <script src="http://localhost/bebas-tanggungan/views/assets/js/admin/tabsHandler.js"></script>
</body>

</html>