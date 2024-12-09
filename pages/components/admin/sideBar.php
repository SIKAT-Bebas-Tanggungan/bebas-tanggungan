<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="sidebar bg-primary text-white position-fixed" style="height: 100%; width: 277px; padding: 20px;">
  <span class="text-black rounded bg-white fw-bold fs-4 ms-2 p-2">
    <img src="../../assets/images/logoSikatBata.svg" alt="">
    <span>SIKAT-</span>
    <span style="color: #fA9D1C;">BATA</span>
  </span>
  <ul class="list-unstyled mt-5 ms-2">
    <li>
      <a href="dashboardAdm.php" 
         class="nav-link p-2 rounded mt-4 <?php echo $current_page == 'dashboardAdm.php' ? 'active' : ''; ?>">
         Beranda
      </a>
    </li>
    <li>
      <a href="manajemen.php" 
         class="nav-link p-2 rounded mt-4 <?php echo ($current_page == 'manajemen.php' || $current_page == 'formTambahAdm.php' || $current_page == 'formTambahMhs.php' || $current_page == 'formEditAdm.php' || $current_page == 'formEditMhs.php') ? 'active' : ''; ?>">
         Manajemen Pengguna
      </a>
    </li>
    <li>
      <a href="kelola.php" class="nav-link p-2 rounded mt-4 <?php echo ($current_page == 'kelola.php' || $current_page == 'tablePageD2PPLS.php' || $current_page == 'tablePageD4SIB.php' || $current_page == 'tablePageD4TI.php') ? 'active' : ''; ?>">
         Kelola Tanggungan
      </a>
    </li>
    <li>
      <a href="editForm.php" 
         class="nav-link p-2 rounded mt-4 <?php echo $current_page == 'editForm.php' ? 'active' : ''; ?>">
         Edit Form
      </a>
    </li>
  </ul>
</div>
