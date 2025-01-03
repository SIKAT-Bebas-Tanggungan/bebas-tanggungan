<?php
require_once 'config/database.php';

class StatusTanggunganModel
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

    // Create a new status tanggungan
    public function createStatusTanggungan(
        $id_mahasiswa,
        $id_unggah,
        $id_admin,
        $status,
        $tanggal_pengecekan,
        $status_pengajuan, //  kolom ini dihapus saja
        $catatan_admin
    ) {
        try {
            $query = "EXEC sp_tambah_status_tanggungan";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_mahasiswa', $id_mahasiswa);
            $stmt->bindParam(':id_unggah', $id_unggah);
            $stmt->bindParam(':id_admin', $id_admin);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':tanggal_pengecekan', $tanggal_pengecekan);
            $stmt->bindParam(':status_pengajuan', $status_pengajuan);
            $stmt->bindParam(':catatan_admin', $catatan_admin);
            $stmt->execute();
            return ['success' => true, 'message' => 'Status Tanggungan created successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read all status tanggungan
    public function readStatusTanggungan()
    {
        try {
            $query = "EXEC sp_tampilkan_status_tanggungan";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $statusTanggungan = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($statusTanggungan) {
                return $statusTanggungan;
            } else {
                return ['success' => false, 'message' => 'No records found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read status tanggungan by ID
    public function readStatusTanggunganById($id_status)
    {
        try {
            $query = "EXEC sp_tampilkan_per_status_tanggungan";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_status', $id_status);
            $stmt->execute();
            $statusTanggungan = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($statusTanggungan) {
                return $statusTanggungan;
            } else {
                return ['success' => false, 'message' => 'Status Tanggungan not found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Read status tanggungan by NIM
    public function readStatusTanggunganByNim($nim)
    {
        try {
            $query = "EXEC sp_tampilkan_nim_status_tanggungan";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nim', $nim);
            $stmt->execute();
            $statusTanggungan = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($statusTanggungan) {
                return $statusTanggungan;
            } else {
                return ['success' => false, 'message' => 'Status Tanggungan not found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    // Update status tanggungan
    public function updateStatusTanggungan(
        $id_status,
        $id_mahasiswa,
        $id_unggah,
        $id_admin,
        $status,
        $tanggal_pengecekan,
        $status_pengajuan,
        $catatan_admin
    ) {
        try {
            $query = "EXEC sp_edit_status_tanggungan";

            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_mahasiswa', $id_mahasiswa);
            $stmt->bindParam(':id_unggah', $id_unggah);
            $stmt->bindParam(':id_admin', $id_admin);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':tanggal_pengecekan', $tanggal_pengecekan);
            $stmt->bindParam(':status_pengajuan', $status_pengajuan);
            $stmt->bindParam(':catatan_admin', $catatan_admin);
            $stmt->bindParam(':id_status', $id_status);
            $stmt->execute();
            return ['success' => true, 'message' => 'Status Tanggungan updated successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
