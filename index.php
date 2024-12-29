<?php
require_once 'controllers/AdminController.php';
require_once 'controllers/MahasiswaController.php';

$adminController = new AdminController();
$mahasiswaController = new MahasiswaController();

$requestUri = $_SERVER['REQUEST_URI'];
$basePath = '/bebas-tanggungan';
$uri = str_replace($basePath, '', $requestUri);

$uri = strtok(trim($uri, '/'), '?');

$uriSegments = explode('/', $uri);

$baseRoute = $uriSegments[0] ?? '';

switch ($baseRoute) {
    case '':
        require_once 'views/index.php';
        break;

    case 'faq':
        require_once 'views/faq.php';
        break;
    
    case 'admin':
        $adminAction = $uriSegments[1] ?? 'dashboard';

        switch ($adminAction) {
            case 'dashboard':
                $adminController->dashboard();
                break;

            case 'login':
                $adminController->login();
                break;

            case 'logout':
                $adminController->logout();
                break;

            case 'manajemen':
                $subAction = $uriSegments[2] ?? '';

                if (!empty($subAction)) {
                    $id = $uriSegments[3] ?? null;
                    switch ($subAction) {
                        // case'tambah-

                        case 'edit-admin':
                            if (!empty($id)) {
                                $adminController->editAdmin($id);
                            } else {
                                require_once 'views/404Page.php';
                            }
                            break;

                        case 'delete-admin':
                            if (!empty($id)) {
                                $adminController->deleteAdmin($id);
                            } else {
                                require_once 'views/404Page.php';
                            }
                            break;
                        case 'edit-mahasiswa':
                            if (!empty($id)) {
                                $adminController->editMahasiswa($id);
                            } else {
                                require_once 'views/404Page.php';
                            }
                            break;

                        case 'delete-mahasiswa':
                            if (!empty($id)) {
                                $adminController->deleteMahasiswa($id);
                            } else {
                                require_once 'views/404Page.php';
                            }
                            break;
                        
                        case 'tambah-admin':
                            $adminController->tambahAdmin();
                            break;
                        
                        case 'tambah-mahasiswa':
                            $adminController->tambahMahasiswa();
                            break;

                        default:
                            require_once 'views/404Page.php';
                            break;
                    }
                } else {
                    $adminController->manajemen();
                    break;
                }
                break;
            case 'kelola':
                $subAction = $uriSegments[2] ?? '';

                if (!empty($subAction)) {
                    $nim = $uriSegments[3] ?? null;

                    switch ($subAction) {
                        case 'd2-ppls':
                            if (!empty($nim)) {
                                $adminController->kelolaMahasiswa($nim);
                            } else {
                                $adminController->kelolaD2Ppls('Piranti Perangkat Lunak Situs');
                            }
                            break;

                        case 'd4-ti':
                            if (!empty($nim)) {
                                $adminController->kelolaMahasiswa($nim);
                            } else {
                                $adminController->kelolaD4Ti('Teknik Informatika');
                            }
                            break;

                        case 'd4-sib':
                            if (!empty($nim)) {
                                $adminController->kelolaMahasiswa($nim);
                            } else {
                                $adminController->kelolaD4Sib('Sistem Informasi Bisnis');
                            }
                            break;

                        default:
                            require_once 'views/404Page.php';
                            break;
                    }
                } else {
                    $adminController->kelola();
                    break;
                }
                break;
            case 'edit-form':
                $adminController->editForm();
                break;

            default:
                require_once 'views/404Page.php';
                break;
        }
        break;

    case 'mahasiswa':
        $mahasiswaAction = $uriSegments[1] ?? 'dashboard';

        switch ($mahasiswaAction) {
            case 'dashboard':
                $mahasiswaController->dashboard();
                break;

            case 'login':
                $mahasiswaController->login();
                break;

            case 'logout':
                $mahasiswaController->logout();
                break;

            case 'edit-profile':
                $mahasiswaController->editProfile();
                break;

            case 'status':
                $mahasiswaController->bebasTanggungan();
                break;
                
            case 'unggah-ta':
                $mahasiswaController->unggahTanggungan();
                break;

            case 'unduh-form':
                $mahasiswaController->unduhForm();
            default:
                require_once 'views/404Page.php';
                break;
        }
        break;

    default:
        require_once 'views/404Page.php';
        break;
}
