<?php
require_once 'config/database.php';

class NotifikasiModel
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

    public function createNotifikasi($nama, $isi, $waktu, $id_admin, $nim)
    {
        try {
            $query = "EXEC sp_tambah_notifikasi";
            $stmt = $this->pdo->prepare($query);
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

    public function readNotifikasi($nim)
    {
        try {
            $query = "EXEC sp_tampilkan_notifikasi";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nim', $nim);
            $stmt->execute();
            $notifikasi = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($notifikasi) {
                return $notifikasi;
            } else {
                return [];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function updateNotifikasi($id_notifikasi, $nama, $isi, $waktu, $id_admin, $nim)
    {
        try {
            $query = "EXEC sp_edit_notifikasi";
            $stmt = $this->pdo->prepare($query);
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
}
