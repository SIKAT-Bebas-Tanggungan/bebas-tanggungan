<?php
require_once 'models/adminModel.php';
require_once 'models/mahasiswaModel.php';
require_once 'models/statusTanggunganModel.php';
require_once 'middleware/sessionAdmin.php';

class AdminController
{
    private $adminModel;
    private $mahasiswaModel;
    private $statusTanggunganModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->mahasiswaModel = new MahasiswaModel();
        $this->statusTanggunganModel = new StatusTanggunganModel();
    }

    public function login()
    {
        session_start();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = $this->adminModel->loginAdmin($username, $password);

            if ($result['success']) {
                $_SESSION['id_admin'] = $result['id_admin'];
                $_SESSION['role'] = $result['role'];
                header("Location: http://localhost/bebas-tanggungan/admin/dashboard");
                exit();
            } else {
                $errorMessage = $result['message'];
                require_once 'views/admin/loginAdm.php';
            }
        } else {
            require_once 'views/admin/loginAdm.php';
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: http://localhost/bebas-tanggungan/admin/login");
        exit();
    }


    public function dashboard()
    {
        ensureAdminAuthenticated();

        $adminId = $_SESSION['id_admin'];
        $admin = $this->adminModel->readAdminById($adminId);

        require_once 'views/admin/dashboardAdm.php';
    }

    public function manajemen()
    {
        ensureAdminAuthenticated();

        $mahasiswa = $this->mahasiswaModel->readAllMahasiswa();
        $admin = $this->adminModel->readAllAdmin();

        require_once 'views/admin/manajemen.php';
    }

    public function editAdmin($adminId)
    {
        ensureAdminAuthenticated();

        $admin = $this->adminModel->readAdminById($adminId);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nama_admin = htmlspecialchars(trim($_POST['nama_admin']));
            $username = htmlspecialchars(trim($_POST['username']));
            $no_telp = htmlspecialchars(trim($_POST['no_telp']));

            $result = $this->adminModel->updateAdmin($adminId, $nama_admin, $username, $no_telp);
            header("Location: http://localhost/bebas-tanggungan/admin/manajemen/edit-admin/".$adminId);
            exit();
        } else {
            require_once 'views/admin/formEditAdm.php';
        }
    }

    public function deleteMahasiswa($nim)
    {
        ensureAdminAuthenticated();

        $this->mahasiswaModel->deleteMahasiswa($nim);
        header("Location: http://localhost/bebas-tanggungan/admin/manajemen");
    }

    public function editMahasiswa($nim)
    {
        ensureAdminAuthenticated();

        $mahasiswa = $this->mahasiswaModel->readMahasiswaByNim($nim);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $role = $_SESSION['role'];
            $nama_mahasiswa = htmlspecialchars(trim($_POST['nama_mahasiswa']));
            $password = htmlspecialchars(trim($_POST['password']));
            $angkatan = htmlspecialchars(trim($_POST['angkatan']));
            $prodi = htmlspecialchars(trim($_POST['prodi']));

            $result = $this->mahasiswaModel->updateMahasiswa($role, $nim, $nama_mahasiswa, $prodi, $password, $angkatan);
            header("Location: http://localhost/bebas-tanggungan/admin/manajemen/edit-mahasiswa/".$nim);
            exit();
        } else {
            require_once 'views/admin/formEditMhs.php';
        }
    }

    public function deleteAdmin($adminId)
    {
        ensureAdminAuthenticated();

        $this->adminModel->deleteAdmin($adminId);
        header("Location: http://localhost/bebas-tanggungan/admin/manajemen");
    }

    public function kelola()
    {
        ensureAdminAuthenticated();

        $mahasiswa = $this->mahasiswaModel->readAllMahasiswa();

        require_once 'views/admin/kelola.php';
    }

    public function kelolaD2Ppls($prodi)
    {
        ensureAdminAuthenticated();

        $mahasiswa = $this->mahasiswaModel->readMahasiswaByProdi($prodi);

        require_once 'views/admin/tablePageD2PPLS.php';
    }

    public function kelolaD4Ti($prodi)
    {
        ensureAdminAuthenticated();

        $mahasiswa = $this->mahasiswaModel->readMahasiswaByProdi($prodi);

        require_once 'views/admin/tablePageD4TI.php';
    }

    public function kelolaMahasiswa($nim)
    {
        ensureAdminAuthenticated();

        $mahasiswa = $this->mahasiswaModel->readMahasiswaByNim($nim);

        require_once 'views/admin/detailPage.php';
    }

    public function kelolaD4Sib($prodi)
    {
        ensureAdminAuthenticated();

        $mahasiswa = $this->mahasiswaModel->readMahasiswaByProdi($prodi);
        require_once 'views/admin/tablePageD4SIB.php';
    }

    public function editForm()
    {
        ensureAdminAuthenticated();
        require_once 'views/admin/editForm.php';
    }

    public function verifikasiTanggungan()
    {
        $statusTanggungan = $this->statusTanggunganModel->readStatusTanggungan();

        require_once 'views/admin/verifikasiTanggungan.php';
    }
}
