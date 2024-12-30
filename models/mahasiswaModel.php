<?php
require_once 'config/database.php';

class MahasiswaModel
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

    public function createMahasiswa($nim, $nama_mahasiswa, $prodi, $angkatan)
    {
        try {
            $query = "EXEC sp_tambah_mahasiswa";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nim', $nim);
            $stmt->bindParam(':nama_mahasiswa', $nama_mahasiswa);
            $stmt->bindParam(':prodi', $prodi);
            $stmt->bindParam(':password', $nim); // Default password is NIM
            $stmt->bindParam(':angkatan', $angkatan);
            $stmt->execute();
            return ['success' => true, 'message' => 'Mahasiswa created successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function readAllMahasiswa()
    {
        try {
            $query = "EXEC sp_tampilkan_mahasiswa";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function readMahasiswaByNim($nim)
    {
        try {
            $query = "EXEC sp_tampilkan_mahasiswa_berdasarkan_nim";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nim', $nim);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function readMahasiswaByProdi($prodi)
    {
        try {
            $query = "EXEC sp_tampilkan_prodi_mahasiswa";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':prodi', $prodi);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function updateMahasiswa($role, $nim, $nama_mahasiswa, $prodi, $password, $angkatan)
    {
        try {
            // Prepare the query based on the role
            $query = "EXEC sp_edit_mahasiswa";

            if ($role !== 'mahasiswa') {
                $query = "EXEC sp_edit_biodata_mahasiswa";
            }

            $stmt = $this->pdo->prepare($query);

            // Use bindValue to prevent re-binding issues
            $stmt->bindValue(':nama_mahasiswa', trim($nama_mahasiswa));
            $stmt->bindValue(':prodi', trim($prodi));
            $stmt->bindValue(':angkatan', trim($angkatan));
            $stmt->bindValue(':nim', trim($nim));

            if ($role !== 'mahasiswa') {
                $stmt->bindValue(':password', trim($password));
            }

            $stmt->execute();

            return ['success' => true, 'message' => 'Mahasiswa updated successfully.'];
        } catch (PDOException $e) {
            // Debugging output
            echo "Error: " . $e->getMessage(); // For debugging only
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }


    public function deleteMahasiswa($nim)
    {
        try {
            $query = "EXEC sp_hapus_mahasiswa";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nim', $nim);
            $stmt->execute();
            return ['success' => true, 'message' => 'Mahasiswa deleted successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function loginMahasiswa($nim, $password)
    {
        try {
            $pdo = getPDOConnection();

            $stmt = $pdo->prepare("EXEC sp_login_mahasiswa");
            $stmt->bindParam(':nim', $nim, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch();

            if ($result) {
                $hashedPassword = hash('sha256', $password);

                if ($result['password'] === $password) {
                    $_SESSION['nim'] = $nim;
                    $_SESSION['role'] = 'mahasiswa';
                    $_SESSION['prodi'] = $result['prodi'];
                    header("Location: http://localhost/bebas-tanggungan/mahasiswa/dashboard");
                    exit();
                } else {
                    return ['success' => false, 'message' => 'Login Failed.'];
                }
            } else {
                return ['success' => false, 'message' => 'Admin not found.'];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
