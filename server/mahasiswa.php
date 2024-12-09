<?php
session_start();
require 'conn.php';

function createMahasiswa($nim, $nama, $id_prodi, $angkatan)
{
    try {
        $pdo = getPDOConnection();
        $query = "INSERT INTO mahasiswa (nim, nama, id_prodi, password) 
                  VALUES (:nim, :nama, :id_prodi, :password, :angkatan)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nim', $nim);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':id_prodi', $id_prodi);
        $stmt->bindParam(':password', $nim);
        $stmt->bindParam(':angkatan', $angkatan);
        $stmt->execute();
        return ['success' => true, 'message' => 'Mahasiswa created successfully.'];
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

function readMahasiswa()
{
    try {
        $pdo = getPDOConnection();
        $query = "SELECT * FROM mahasiswa";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $mahasiswa = $stmt->fetch();

        if ($mahasiswa) {
            return ['success' => true, 'data' => $mahasiswa];
        } else {
            return ['success' => false, 'message' => 'Mahasiswa not found.'];
        }
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

function readMahasiswaByNim($nim)
{
    try {
        $pdo = getPDOConnection();
        $query = "SELECT * FROM mahasiswa WHERE nim = :nim";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nim', $nim);
        $stmt->execute();
        $mahasiswa = $stmt->fetch();

        if ($mahasiswa) {
            return ['success' => true, 'data' => $mahasiswa];
        } else {
            return ['success' => false, 'message' => 'Mahasiswa not found.'];
        }
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

function updateMahasiswa($role, $nim, $nama, $id_prodi, $password, $angkatan)
{
    try {
        if ($role !== 'mahasiswa') {
            $pdo = getPDOConnection();
            $query = "UPDATE mahasiswa SET nama = :nama, id_prodi = :id_prodi, password = :password, angkatan = :angkatan  
                      WHERE nim = :nim";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':id_prodi', $id_prodi);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':angkatan', $angkatan);
            $stmt->bindParam(':nim', $nim);
            $stmt->execute();
        } else {
            $pdo = getPDOConnection();
            $query = "UPDATE mahasiswa SET nama = :nama, id_prodi = :id_prodi, angkatan = :angkatan  
                  WHERE nim = :nim";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':id_prodi', $id_prodi);
            $stmt->bindParam(':angkatan', $angkatan);
            $stmt->bindParam(':nim', $nim);
            $stmt->execute();
        }

        return ['success' => true, 'message' => 'Mahasiswa updated successfully.'];
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

function deleteMahasiswa($nim)
{
    try {
        $pdo = getPDOConnection();
        $query = "DELETE FROM mahasiswa WHERE nim = :nim";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nim', $nim);
        $stmt->execute();
        return ['success' => true, 'message' => 'Mahasiswa deleted successfully.'];
    } catch (PDOException $e) {
        return ['success' => false, 'message' => $e->getMessage()];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'] ?? '';

    switch ($action) {
        case 'create':
            if (!isset($_SESSION['id_admin']) && $_SESSION['role'] !== 'admin' | 'super-admin') {
                die("Error: Unauthorized.");
            }
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $id_prodi = $_POST['id_prodi'];
            $angkatan = $_POST['angkatan'];
            createMahasiswa($nim, $nama, $id_prodi, $angkatan);
            break;

        case 'read':
            readMahasiswa();
            break;

        case 'readByNim':
            $nim = $_SESSION['nim'];
            readMahasiswaByNim($nim);
            break;

        case 'update':
            if (!isset($_SESSION['id_admin']) || !isset($_SESSION['nim'])) {
                die("Error: Unauthorized.");
            }
            $role = $_SESSION['role'];
            $nim = $_SESSION['nim'] ? $_SESSION['nim'] : $_POST['nim'];
            $nama_admin = $_POST['nama'];
            $id_prodi = $_POST['id_prodi'];
            $password = $_POST['password'];
            $angkatan = $_POST['angkatan'];
            updateMahasiswa($role, $nim, $nama, $id_prodi, $password, $angkatan);
            break;

        case 'delete':
            if (!isset($_SESSION['id_admin']) && $_SESSION['role'] !== 'admin' | 'super-admin') {
                die("Error: Unauthorized.");
            }
            $nim = $_POST['nim'];
            deleteMahasiswa($nim);
            break;

        default:
            echo "Invalid action.";
    }
} else {
    echo "Invalid request method.";
}
