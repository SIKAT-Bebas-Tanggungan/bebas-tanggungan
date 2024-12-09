<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="sidebar bg-primary text-white position-fixed" style="height: 100%; width: 277px; padding: 20px;">
  <span class="text-black rounded bg-white fw-bold fs-4 ms-2 p-2">
    <img src="http://localhost/bebas-tanggungan/views/assets/images/logoSikatBata.svg" alt="">
    <span>SIKAT-</span>
    <span style="color: #fA9D1C;">BATA</span>
  </span>
  <ul class="list-unstyled mt-5 ms-2">
    <li>
      <a href="http://localhost/bebas-tanggungan/admin/dashboard"
        class="nav-link p-2 rounded mt-4 <?php echo $current_page == 'dashboardAdm.php' ? 'active' : ''; ?>">
        Beranda
      </a>
    </li>
    <li>
      <a href="http://localhost/bebas-tanggungan/admin/manajemen"
        class="nav-link p-2 rounded mt-4 <?php echo $current_page == 'manajemen.php' ? 'active' : ''; ?>">
        Manajemen Pengguna
      </a>
    </li>
    <li>
      <a href="http://localhost/bebas-tanggungan/admin/kelola"
        class="nav-link p-2 rounded mt-4 <?php echo $current_page == 'kelola.php' ? 'active' : ''; ?>">
        Kelola Tanggungan
      </a>
    </li>
    <li>
      <a href="http://localhost/bebas-tanggungan/admin/edit-form"
        class="nav-link p-2 rounded mt-4 <?php echo $current_page == 'editForm.php' ? 'active' : ''; ?>">
        Edit Form
      </a>
    </li>
  </ul>
</div>