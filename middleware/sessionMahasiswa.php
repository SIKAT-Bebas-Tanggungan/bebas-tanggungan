<?php
function ensureMahasiswaAuthenticated()
{
    session_start();
    if (!isset($_SESSION['nim'])) {
        header("Location: http://localhost/bebas-tanggungan/mahasiswa/login");
        exit();
    }
}
?>