<?php
session_start();
require 'conn.php';

function createAdmin($nama_admin, $no_telp) {
    try {
        $pdo = getPDOConnection();
        $query = "INSERT INTO admin (nama_admin, username, password, no_telp) 
                  VALUES (:nama_admin, :username, :password, :no_telp, :role)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nama_admin', $nama_admin);
        $stmt->bindParam(':username', $nama_admin);
        $stmt->bindParam(':password', $nama_admin);
        $stmt->bindParam(':no_telp', $no_telp);
        $stmt->bindParam(':role', 'admin');
        $stmt->execute();
        return ['success' => true, 'message' => 'Admin created successfully.'];
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

function readAdmin($id_admin) {
    try {
        $pdo = getPDOConnection();
        $query = "SELECT * FROM admin WHERE id_admin = :id_admin"; // Assuming username acts as `id_admin`
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id_admin', $id_admin);
        $stmt->execute();
        $admin = $stmt->fetch();

        if ($admin) {
            return ['success' => true, 'data' => $admin];
        } else {
            return ['success' => false, 'message' => 'Admin not found.'];
        }
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

function updateAdmin($id_admin, $nama_admin, $username, $no_telp) {
    try {
        $pdo = getPDOConnection();
        $query = "UPDATE admin SET nama_admin = :nama_admin, username = :username, no_telp = :no_telp 
                  WHERE id_admin = :id_admin";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nama_admin', $nama_admin);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':no_telp', $no_telp);
        $stmt->bindParam(':id_admin', $id_admin);
        $stmt->execute();
        return ['success' => true, 'message' => 'Admin updated successfully.'];
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

function deleteAdmin($id_admin) {
    try {
        $pdo = getPDOConnection();
        $query = "DELETE FROM admin WHERE id_admin = :id_admin";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id_admin', $id_admin);
        $stmt->execute();
        return ['success' => true, 'message' => 'Admin deleted successfully.'];
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
            if ($_SESSION['role'] !== 'super-admin') {
                die("Error: Unauthorized.");
            }
            $nama_admin = $_POST['nama_admin'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $no_telp = $_POST['no_telp'];
            createAdmin($nama_admin, $username, $password, $no_telp);
            break;

        case 'read':
            $id_admin = $_SESSION['id_admin'];
            readAdmin($id_admin);
            break;

        case 'update':
            $id_admin = $_SESSION['id_admin'];
            $nama_admin = $_POST['nama_admin'];
            $username = $_POST['username'];
            $no_telp = $_POST['no_telp'];
            updateAdmin($id_admin, $nama_admin, $username, $no_telp);
            break;

        case 'delete':
            if ($_SESSION['role'] !== 'super-admin') {
                die("Error: Unauthorized.");
            }
            $id_admin = $_POST['id_admin'];
            deleteAdmin($id_admin);
            break;

        default:
            echo "Invalid action.";
    }
}
?>
