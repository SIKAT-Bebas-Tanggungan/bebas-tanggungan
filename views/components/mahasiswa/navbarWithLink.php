<?php
$current_page = basename($_SERVER['REQUEST_URI']);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow">
  <a class="navbar-brand nav-logo me-auto fs-4 ps-5" href="http://localhost/bebas-tanggungan/mahasiswa/dashboard">
    <img src="http://localhost/bebas-tanggungan/views/assets/images/logoSikatBata.svg" alt="logoSikatBata" class="me-2">
    SIKAT - <span>BATA</span>
  </a>
  <div class="collapse navbar-collapse d-flex justify-content-between">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a
          class="nav-link <?php echo $current_page == 'dashboard' ? 'active' : ''; ?>"
          href="http://localhost/bebas-tanggungan/mahasiswa/dashboard"
          style="color: <?php echo $current_page == 'dashboard' ? '#FA9D1C' : 'black'; ?>;">
          Beranda
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link <?php echo $current_page == 'unduhFormAlur.php' ? 'active' : ''; ?>"
          href="unduhFormAlur.php"
          style="color: <?php echo $current_page == 'unduhFormAlur.php' ? '#FA9D1C' : 'black'; ?>;">
          Unduh Form
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link <?php echo $current_page == 'unggahTA.php' ? 'active' : ''; ?>"
          href="unggahTA.php"
          style="color: <?php echo $current_page == 'unggahTA.php' ? '#FA9D1C' : 'black'; ?>;">
          Unggah Form
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link <?php echo $current_page == 'status' ? 'active' : ''; ?>"
          href="http://localhost/bebas-tanggungan/mahasiswa/status"
          style="color: <?php echo $current_page == 'status' ? '#FA9D1C' : 'black'; ?>;">
          Status Bebas Tanggungan
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link <?php echo $current_page == 'hubungiAdmin.php' ? 'active' : ''; ?>"
          href="hubungiAdmin.php"
          style="color: <?php echo $current_page == 'hubungiAdmin.php' ? '#FA9D1C' : 'black'; ?>;">
          Hubungi Admin
        </a>
      </li>
    </ul>
  </div>
  <a href="#" class="ms-2 me-5">
    <img src="http://localhost/bebas-tanggungan/views/assets/icons/logout.svg" alt="">
  </a>
</nav>