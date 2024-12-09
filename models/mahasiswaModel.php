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

    public function createMahasiswa($nim, $nama, $id_prodi, $angkatan)
    {
        try {
            $query = "INSERT INTO mahasiswa (nim, nama, id_prodi, password, angkatan) 
                      VALUES (:nim, :nama, :id_prodi, :password, :angkatan)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nim', $nim);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':id_prodi', $id_prodi);
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
            $query = "SELECT * FROM mahasiswa";
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
            $query = "SELECT * FROM mahasiswa WHERE nim = :nim";
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
            $query = "SELECT * FROM mahasiswa WHERE prodi = :prodi";
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
            $query = "UPDATE mahasiswa 
                  SET nama_mahasiswa = :nama_mahasiswa, 
                      prodi = :prodi, 
                      angkatan = :angkatan 
                  WHERE nim = :nim";

            if ($role !== 'mahasiswa') {
                $query = "UPDATE mahasiswa 
                      SET nama_mahasiswa = :nama_mahasiswa, 
                          prodi = :prodi, 
                          password = :password, 
                          angkatan = :angkatan 
                      WHERE nim = :nim";
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
            $query = "DELETE FROM mahasiswa WHERE nim = :nim";
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

            $stmt = $pdo->prepare("SELECT password FROM mahasiswa WHERE nim = :nim");
            $stmt->bindParam(':nim', $nim, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch();

            if ($result) {
                $hashedPassword = hash('sha256', $password);

                if ($result['password'] === $password) {
                    $_SESSION['nim'] = $nim;
                    $_SESSION['role'] = 'mahasiswa';
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
