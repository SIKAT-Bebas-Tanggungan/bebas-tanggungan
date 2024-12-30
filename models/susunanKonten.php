<?php
require_once 'config/database.php';

class SusunanKontenModel
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

    // Create a new Susunan Konten
    public function createSusunanKonten($id_konten, $id_admin, $isi_konten)
    {
        try {
            $query = "EXEC sp_tambah_susunan_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_konten', $id_konten, PDO::PARAM_INT);
            $stmt->bindParam(':id_admin', $id_admin, PDO::PARAM_STR);
            $stmt->bindParam(':isi_konten', $isi_konten, PDO::PARAM_STR);
            $stmt->execute();
            return ['success' => true, 'message' => 'Susunan Konten created successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read all Susunan Konten
    public function readAllSusunanKonten()
    {
        try {
            $query = "EXEC sp_tampilkan_susunan_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return ['success' => true, 'data' => $stmt->fetchAll(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read Susunan Konten by ID
    public function readSusunanKontenById($id_susunan_konten)
    {
        try {
            $query = "EXEC sp_tampilkan_per_susunan_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_susunan_konten', $id_susunan_konten, PDO::PARAM_INT);
            $stmt->execute();
            $konten = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($konten) {
                return ['success' => true, 'data' => $konten];
            } else {
                return ['success' => false, 'message' => 'Susunan Konten not found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Update Susunan Konten
    public function updateSusunanKonten($id_susunan_konten, $id_konten, $id_admin, $isi_konten)
    {
        try {
            $query = "EXEC sp_edit_susunan_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_susunan_konten', $id_susunan_konten, PDO::PARAM_INT);
            $stmt->bindParam(':id_konten', $id_konten, PDO::PARAM_INT);
            $stmt->bindParam(':id_admin', $id_admin, PDO::PARAM_STR);
            $stmt->bindParam(':isi_konten', $isi_konten, PDO::PARAM_STR);
            $stmt->execute();
            return ['success' => true, 'message' => 'Susunan Konten updated successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Delete Susunan Konten
    public function deleteSusunanKonten($id_susunan_konten)
    {
        try {
            $query = "EXEC sp_hapus_susunan_konten";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_susunan_konten', $id_susunan_konten, PDO::PARAM_INT);
            $stmt->execute();
            return ['success' => true, 'message' => 'Susunan Konten deleted successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
