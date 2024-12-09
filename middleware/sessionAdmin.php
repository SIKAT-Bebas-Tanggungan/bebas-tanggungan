<?php
function ensureAdminAuthenticated()
{
    session_start();
    if (!isset($_SESSION['id_admin'])) {
        header("Location: http://localhost/bebas-tanggungan/admin/login");
        exit();
    }
}
?>