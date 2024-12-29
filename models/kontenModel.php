<?php
require_once 'config/database.php';

class KontenModel
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

    public function createKonten($nama)
    {
        try {
            $query = "EXEC sp_tambah_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nama', $nama, PDO::PARAM_STR);
            $stmt->execute();
            return ['success' => true, 'message' => 'Konten created successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function readAllKonten()
    {
        try {
            $query = "EXEC sp_tampilkan_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return ['success' => true, 'data' => $stmt->fetchAll(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function readKontenById($id_konten)
    {
        try {
            $query = "EXEC sp_tampilkan_per_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_konten', $id_konten, PDO::PARAM_INT);
            $stmt->execute();
            $konten = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($konten) {
                return ['success' => true, 'data' => $konten];
            } else {
                return ['success' => false, 'message' => 'Konten not found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function updateKonten($id_konten, $nama)
    {
        try {
            $query = "EXEC sp_edit_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nama', $nama, PDO::PARAM_STR);
            $stmt->bindParam(':id_konten', $id_konten, PDO::PARAM_INT);
            $stmt->execute();
            return ['success' => true, 'message' => 'Konten updated successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function deleteKonten($id_konten)
    {
        try {
            $query = "EXEC sp_hapus_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_konten', $id_konten, PDO::PARAM_INT);
            $stmt->execute();
            return ['success' => true, 'message' => 'Konten deleted successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
