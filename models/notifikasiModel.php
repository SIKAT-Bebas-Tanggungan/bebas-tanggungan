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
            $query = "INSERT INTO notifikasi (nama, isi, waktu, id_admin, nim) 
                      VALUES (:nama, :isi, :waktu, :id_admin, :nim)";
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
            $query = "SELECT * FROM notifikasi WHERE nim = :nim";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nim', $nim);
            $stmt->execute();
            $notifikasi = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($notifikasi) {
                return ['success' => true, 'data' => $notifikasi];
            } else {
                return ['success' => false, 'message' => 'No notifications found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function updateNotifikasi($id_notifikasi, $nama, $isi, $waktu, $id_admin, $nim)
    {
        try {
            $query = "UPDATE notifikasi 
                      SET nama = :nama, isi = :isi, waktu = :waktu, id_admin = :id_admin, nim = :nim 
                      WHERE id_notifikasi = :id_notifikasi";
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
