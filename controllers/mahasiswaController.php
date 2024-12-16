<?php
require_once 'models/mahasiswaModel.php';
require_once 'middleware/sessionMahasiswa.php';

class MahasiswaController
{
    private $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
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

        require_once 'views/mahasiswa/dashboardMhs.php';
    }

    public function editProfile()
    {
        ensureMahasiswaAuthenticated();

        $nim = $_SESSION['nim'];
        $role = $_SESSION['role'];
        $mahasiswa = $this->mahasiswaModel->readMahasiswaByNim($nim);

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
        
        require_once 'views/mahasiswa/bebasTanggungan.php';
    }
}
