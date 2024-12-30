<?php
require_once 'config/database.php';

class BerkasModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getPDOConnection();
    }

    private function getPDOConnection()
    {
        return getPDOConnection();
    }

    // Create a new berkas
    public function createBerkas($nama_berkas)
    {
        try {
            $query = "EXEC sp_tambah_berkas";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nama_berkas', $nama_berkas, PDO::PARAM_STR);
            $stmt->execute();
            return ['success' => true, 'message' => 'Berkas created successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read all berkas
    public function readAllBerkas()
    {
        try {
            $query = "EXEC sp_tampilkan_berkas";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return ['success' => true, 'data' => $stmt->fetchAll(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read berkas by ID
    public function readBerkasById($id_berkas)
    {
        try {
            $query = "EXEC sp_tampilkan_per_berkas";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_berkas', $id_berkas, PDO::PARAM_INT);
            $stmt->execute();
            $berkas = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($berkas) {
                return ['success' => true, 'data' => $berkas];
            } else {
                return ['success' => false, 'message' => 'Berkas not found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Update berkas
    public function updateBerkas($id_berkas, $nama_berkas)
    {
        try {
            $query = "EXEC sp_edit_berkas";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nama_berkas', $nama_berkas, PDO::PARAM_STR);
            $stmt->bindParam(':id_berkas', $id_berkas, PDO::PARAM_INT);
            $stmt->execute();
            return ['success' => true, 'message' => 'Berkas updated successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Delete berkas
    public function deleteBerkas($id_berkas)
    {
        try {
            $query = "EXEC sp_hapus_berkas";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_berkas', $id_berkas, PDO::PARAM_INT);
            $stmt->execute();
            return ['success' => true, 'message' => 'Berkas deleted successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
