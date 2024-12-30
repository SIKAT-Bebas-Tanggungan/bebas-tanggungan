<?php
require_once 'models/mahasiswaModel.php';
require_once 'models/statusTanggunganModel.php';
require_once 'models/unggahBerkas.php';
require_once 'models/notifikasiModel.php';
require_once 'middleware/sessionMahasiswa.php';

class MahasiswaController
{
    private $mahasiswaModel;
    private $statusTanggunganModel;
    private $unggahBerkasModel;
    private $notifikasiModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->statusTanggunganModel = new StatusTanggunganModel();
        $this->unggahBerkasModel = new UnggahBerkasModel();
        $this->notifikasiModel = new NotifikasiModel();
    }

    public function login()
    {
        session_start();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nim = $_POST['nim'];
            $password = $_POST['password'];

            $result = $this->mahasiswaModel->loginMahasiswa($nim, $password);

            if ($result['success']) {
                $_SESSION['nim'] = $result['nim'];
                $_SESSION['role'] = 'mahasiswa';
                header("Location: http://localhost/bebas-tanggungan/mahasiswa/dashboard");
                exit();
            } else {
                $errorMessage = $result['message'];
                require_once 'views/mahasiswa/loginMhs.php';
            }
        } else {
            require_once 'views/mahasiswa/loginMhs.php';
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: http://localhost/bebas-tanggungan/mahasiswa/login");
        exit();
    }


    public function dashboard()
    {
        ensureMahasiswaAuthenticated();

        $nim = $_SESSION['nim'];
        $mahasiswa = $this->mahasiswaModel->readMahasiswaByNim($nim);
        $notifikasiList = $this->notifikasiModel->readNotifikasi($nim);        
        
        require_once 'views/mahasiswa/dashboardMhs.php';
    }

    public function editProfile()
    {
        ensureMahasiswaAuthenticated();

        $nim = $_SESSION['nim'];
        $role = $_SESSION['role'];
        $mahasiswa = $this->mahasiswaModel->readMahasiswaByNim($nim);
        $notifikasiList = $this->notifikasiModel->readNotifikasi($nim);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $role = $_SESSION['role'];
            $nama_mahasiswa = htmlspecialchars(trim($_POST['nama_mahasiswa']));
            $password = htmlspecialchars(trim($_POST['password']));
            $angkatan = htmlspecialchars(trim($_POST['angkatan']));
            $prodi = htmlspecialchars(trim($_POST['prodi']));

            $result = $this->mahasiswaModel->updateMahasiswa($role, $nim, $nama_mahasiswa, $prodi, $password, $angkatan);
            header("Location: http://localhost/bebas-tanggungan/mahasiswa/edit-profile");
            exit();
        } else {
            require_once 'views/mahasiswa/editProfileMhs.php';
        }
    }

    public function bebasTanggungan()
    {
        ensureMahasiswaAuthenticated();

        $nim = $_SESSION['nim'];
        $mahasiswa = $this->mahasiswaModel->readMahasiswaByNim($nim);
        $statusTanggungan = $this->statusTanggunganModel->readStatusTanggunganByNim($nim);
        $unggahBerkas = $this->unggahBerkasModel->readUnggahBerkasByNim($nim) ?? [];
        $statusTanggungan = $this->statusTanggunganModel->readStatusTanggunganByNim($nim) ?? [];

        // Ensure both data sets are arrays
        if (!is_array($unggahBerkas)) {
            $unggahBerkas = [];
        }
        if (!is_array($statusTanggungan)) {
            $statusTanggungan = [];
        }

        // Step 2: Sort `unggah_berkas` by `id_berkas`
        usort($unggahBerkas, function ($a, $b) {
            return ($a['id_berkas'] ?? 0) - ($b['id_berkas'] ?? 0);
        });

        // Step 3: Extract the sorted `id_unggah` order
        $sortedIdUnggah = array_column($unggahBerkas, 'id_unggah');

        // Step 4: Sort `status_tanggungan` based on the sorted `id_unggah` order
        usort($statusTanggungan, function ($a, $b) use ($sortedIdUnggah) {
            if (!is_array($a) || !isset($a['id_unggah']) || !is_array($b) || !isset($b['id_unggah'])) {
                return 0;
            }
        
            $orderA = array_search($a['id_unggah'], $sortedIdUnggah);
            $orderB = array_search($b['id_unggah'], $sortedIdUnggah);
        
            $orderA = ($orderA === false) ? PHP_INT_MAX : $orderA;
            $orderB = ($orderB === false) ? PHP_INT_MAX : $orderB;
        
            return $orderA - $orderB;
        });
        

        // At this point:
        // 1. `$unggahBerkas` is sorted by `id_berkas`.
        // 2. `$statusTanggungan` is sorted by the `id_unggah` order from `unggahBerkas`.
        
        if (!is_array($statusTanggungan) || empty($statusTanggungan)) {
            echo "Error: `statusTanggungan` is not a valid array or is empty.";
            die();
        }
        require_once 'views/mahasiswa/bebasTanggungan.php';
    }

    public function unggahTanggungan()
    {
        ensureMahasiswaAuthenticated();
        $prodi = $_SESSION['prodi'];
        if ($prodi !== 'Piranti Perangkat Lunak Situs') {
            require_once 'views/mahasiswa/unggahTA.php';
        } else {
            require_once 'views/mahasiswa/unggahTAd2ppls.php';
        }
    }

    public function unduhForm()
    {
        ensureMahasiswaAuthenticated();

        require_once 'views/mahasiswa/unduhFormAlur.php';
    }
}
