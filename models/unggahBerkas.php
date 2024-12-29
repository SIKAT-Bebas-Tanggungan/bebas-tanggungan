<?php
require_once 'config/database.php';

class UnggahBerkasModel
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

    // Create a new Unggah Berkas
    public function createUnggahBerkas($id_mahasiswa, $id_berkas, $lokasi_file)
    {
        try {
            $query = "INSERT INTO unggah_berkas (id_mahasiswa, id_berkas, lokasi_file) 
                      VALUES (:id_mahasiswa, :id_berkas, :lokasi_file)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_mahasiswa', $id_mahasiswa, PDO::PARAM_INT);
            $stmt->bindParam(':id_berkas', $id_berkas, PDO::PARAM_INT);
            $stmt->bindParam(':lokasi_file', $lokasi_file, PDO::PARAM_LOB);
            $stmt->execute();
            return ['success' => true, 'message' => 'File uploaded successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read all Unggah Berkas
    public function readAllUnggahBerkas()
    {
        try {
            $query = "SELECT * FROM unggah_berkas";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return ['success' => true, 'data' => $stmt->fetchAll(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read Unggah Berkas by ID
    public function readUnggahBerkasById($id_unggah)
    {
        try {
            $query = "SELECT * FROM unggah_berkas WHERE id_unggah = :id_unggah";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_unggah', $id_unggah, PDO::PARAM_INT);
            $stmt->execute();
            $berkas = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($berkas) {
                return $berkas;
            } else {
                return ['success' => false, 'message' => 'File not found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read Unggah Berkas by NIM
    public function readUnggahBerkasByNim($nim)
    {
        try {
            $query = "SELECT * FROM unggah_berkas WHERE nim = :nim";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nim', $nim, PDO::PARAM_INT);
            $stmt->execute();
            $berkas = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($berkas) {
                return $berkas;
            } else {
                return ['success' => false, 'message' => 'File not found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Update Unggah Berkas
    public function updateUnggahBerkas($id_unggah, $id_mahasiswa, $id_berkas, $lokasi_file)
    {
        try {
            $query = "UPDATE unggah_berkas 
                      SET id_mahasiswa = :id_mahasiswa, id_berkas = :id_berkas, lokasi_file = :lokasi_file 
                      WHERE id_unggah = :id_unggah";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_unggah', $id_unggah, PDO::PARAM_INT);
            $stmt->bindParam(':id_mahasiswa', $id_mahasiswa, PDO::PARAM_INT);
            $stmt->bindParam(':id_berkas', $id_berkas, PDO::PARAM_INT);
            $stmt->bindParam(':lokasi_file', $lokasi_file, PDO::PARAM_LOB);
            $stmt->execute();
            return ['success' => true, 'message' => 'File updated successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Delete Unggah Berkas
    public function deleteUnggahBerkas($id_unggah)
    {
        try {
            $query = "DELETE FROM unggah_berkas WHERE id_unggah = :id_unggah";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_unggah', $id_unggah, PDO::PARAM_INT);
            $stmt->execute();
            return ['success' => true, 'message' => 'File deleted successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
