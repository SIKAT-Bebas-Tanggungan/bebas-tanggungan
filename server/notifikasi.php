<?php
require 'conn.php';

function createNotifikasi($nama, $isi, $waktu, $id_admin, $nim) {
    try {
        $pdo = getPDOConnection();
        $query = "INSERT INTO notifikasi (nama, isi, waktu, id_admin) 
                  VALUES (:nama, :isi, :waktu, :id_admin, :nim)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':isi', $isi);
        $stmt->bindParam(':waktu', $waktu);
        $stmt->bindParam(':id_admin', $id_admin);
        $stmt->bindParam(':nim', $nim);
        $stmt->execute();
        return ['success' => true, 'message' => 'Notifikasi created successfully.'];
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

function readNotifikasi($nim) {
    try {
        $pdo = getPDOConnection();
        $query = "SELECT * FROM notifikasi WHERE nim = :nim";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nim', $nim);
        $stmt->execute();
        $notifikasi = $stmt->fetch();

        if ($notifikasi) {
            return ['success' => true, 'data' => $notifikasi];
        } else {
            return ['success' => false, 'message' => 'Notifikasi not found.'];
        }
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

function updateNotifikasi($id_notifikasi, $nama, $isi, $waktu, $id_admin, $nim) {
    try {
        $pdo = getPDOConnection();
        $query = "UPDATE notifikasi SET nama = :nama, isi = :isi, waktu = :waktu, id_admin = :id_admin =, nim = :nim
                  WHERE id_notifikasi = :id_notifikasi";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':isi', $isi);
        $stmt->bindParam(':waktu', $waktu);
        $stmt->bindParam(':id_admin', $id_admin);
        $stmt->bindParam(':nim', $nim);
        $stmt->bindParam(':id_notifikasi', $id_notifikasi);
        $stmt->execute();
        return ['success' => true, 'message' => 'Notifikasi updated successfully.'];
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['id_admin'])) {
        die("Error: No admin ID in session.");
    }
    $action = $_POST['action'] ?? '';

    switch ($action) {
        case 'create':
            if (!isset($_SESSION['id_admin'])) {
                die("Error: Unauthorized.");
            }
            $nama = $_POST['nama'];
            $isi = $_POST['isi'];
            $waktu = $_POST['waktu'];
            $id_admin = $SESSION['id_admin'];
            $nim = $_POST['nim'];
            createNotifikasi($nama, $isi, $waktu, $id_admin, $nim);
            break;

        case 'read':
            $id_admin = $_SESSION['id_admin'];
            readNotifikasi($id_admin);
            break;

        case 'update':
            $id_admin = $_SESSION['id_admin'];
            $nama = $_POST['nama'];
            $isi = $_POST['isi'];
            $id_admin = $_POST['waktu'];
            $nim = $_POST['nim'];
            updateNotifikasi($id_admin, $nama, $isi, $waktu, $nim, $id_notifikasi);
            break;

        default:
            echo "Invalid action.";
    }
} else {
    echo "Invalid request method.";
}
?>
