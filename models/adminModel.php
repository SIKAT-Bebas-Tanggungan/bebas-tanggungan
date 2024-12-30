<?php
require_once 'config/database.php';

class AdminModel
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

    public function createAdmin($nama_admin, $username, $password, $no_telp, $role)
    {
        try {
            $query = "EXEC sp_tambah_admin";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nama_admin', $nama_admin);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':no_telp', $no_telp);
            $stmt->bindParam(':role', $role);
            $stmt->execute();
            return ['success' => true, 'message' => 'Admin created successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function readAllAdmin()
    {
        try {
            $query = "EXEC sp_tampilkan_admin";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function readAdminById($id_admin)
    {
        try {
            $query = "EXEC sp_tampilkan_admin_berdasarkan_id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_admin', $id_admin);
            $stmt->execute();
            return $stmt->fetch();;
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function updateAdmin($id_admin, $nama_admin, $username, $no_telp)
    {
        try {
            $query = "EXEC sp_edit_admin";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nama_admin', $nama_admin);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':no_telp', $no_telp);
            $stmt->bindParam(':id_admin', $id_admin);
            $stmt->execute();
            return ['success' => true, 'message' => 'Admin updated successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function deleteAdmin($id_admin)
    {
        try {
            $query = "EXEC sp_hapus_admin";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_admin', $id_admin);
            $stmt->execute();
            return ['success' => true, 'message' => 'Admin deleted successfully.'];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function loginAdmin($username, $password)
    {
        try {
            $pdo = getPDOConnection();

            $stmt = $pdo->prepare("EXEC sp_login_admin");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch();

            if ($result) {
                $hashedPassword = hash('sha256', $password);

                if ($result['password'] === $password) {
                    $_SESSION['id_admin'] = $result['id_admin'];
                    $_SESSION['nama'] = $result['nama'];
                    $_SESSION['role'] = $result['role'];
                    header("Location: http://localhost/bebas-tanggungan/admin/dashboard");
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
