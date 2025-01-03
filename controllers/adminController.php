<?php
require_once 'models/adminModel.php';
require_once 'models/mahasiswaModel.php';
require_once 'models/statusTanggunganModel.php';
require_once 'models/unggahBerkas.php';
require_once 'middleware/sessionAdmin.php';

class AdminController
{
    private $adminModel;
    private $mahasiswaModel;
    private $statusTanggunganModel;
    private $unggahBerkasModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->mahasiswaModel = new MahasiswaModel();
        $this->statusTanggunganModel = new StatusTanggunganModel();
        $this->unggahBerkasModel = new UnggahBerkasModel();
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

            $this->adminModel->updateAdmin($adminId, $nama_admin, $username, $no_telp);
            header("Location: http://localhost/bebas-tanggungan/admin/manajemen");
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

            $this->mahasiswaModel->updateMahasiswa($role, $nim, $nama_mahasiswa, $prodi, $password, $angkatan);
            header("Location: http://localhost/bebas-tanggungan/admin/manajemen");
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

    public function tambahAdmin()
    {
        ensureAdminAuthenticated();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nama_admin = htmlspecialchars(trim($_POST['nama_admin']));
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));
            $no_telp = htmlspecialchars(trim($_POST['no_telp']));
            $role = 'admin';

            $this->adminModel->createAdmin($nama_admin, $username, $password, $no_telp, $role);
            header("Location: http://localhost/bebas-tanggungan/admin/manajemen");
        } else {
            require_once 'views/admin/formTambahAdm.php';
        }
    }

    public function tambahMahasiswa()
    {
        ensureAdminAuthenticated();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nama_mahasiswa = htmlspecialchars(trim($_POST['nama_mahasiswa']));
            $nim = htmlspecialchars(trim($_POST['nim']));
            $prodi = htmlspecialchars(trim($_POST['prodi']));
            $angkatan = htmlspecialchars(trim($_POST['angkatan']));

            $this->mahasiswaModel->createMahasiswa($nim, $nama_mahasiswa, $prodi, $angkatan);
            header("Location: http://localhost/bebas-tanggungan/admin/manajemen");
        } else {
            require_once 'views/admin/formTambahMhs.php';
        }
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
        $unggahBerkas = $this->unggahBerkasModel->readUnggahBerkasByNim($nim) ?? [];
        if (!is_array($unggahBerkas)) {
            $unggahBerkas = [];
        }

        usort($unggahBerkas, function ($a, $b) {
            if (!is_array($a) || !is_array($b) || !isset($a['id_berkas']) || !isset($b['id_berkas'])) {
                return 0;
            }
            return $a['id_berkas'] - $b['id_berkas'];
        });

        $mappedData = [];
        foreach ($unggahBerkas as $item) {
            if (isset($item['id_berkas'])) {
                $mappedData[$item['id_berkas']] = $item;
            }
        }

        $result = [];
        for ($i = 1; $i <= 6; $i++) {
            if (isset($mappedData[$i])) {
                $result[] = $mappedData[$i];
            } else {
                $result[] = ['id_berkas' => $i, 'nama_file' => '-'];
            }
        }

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
