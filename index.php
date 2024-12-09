<?php
require_once 'controllers/AdminController.php';
require_once 'controllers/MahasiswaController.php';

// Instantiate controllers
$adminController = new AdminController();
$mahasiswaController = new MahasiswaController();

// Get the request URI and remove the base path
$requestUri = $_SERVER['REQUEST_URI'];
$basePath = '/bebas-tanggungan';
$uri = str_replace($basePath, '', $requestUri);

// Trim and remove query strings
$uri = strtok(trim($uri, '/'), '?');

// Split the URI into segments
$uriSegments = explode('/', $uri);

// Determine the base route
$baseRoute = $uriSegments[0] ?? '';

switch ($baseRoute) {
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

                // Check if an action exists
                if (!empty($subAction)) {
                    $adminId = $uriSegments[3] ?? null; // Get the adminId if it exists

                    switch ($subAction) {
                        case 'edit-user':
                            if (!empty($adminId)) {
                                $adminController->editAdmin($adminId);
                            } else {
                                echo "Invalid or missing user ID for edit-user.";
                            }
                            break;

                        case 'delete-user':
                            if (!empty($adminId)) {
                                $adminController->deleteAdmin($adminId);
                            } else {
                                echo "Invalid or missing user ID for delete-user.";
                            }
                            break;

                        default:
                            echo "Invalid sub-action for manajemen.";
                            break;
                    }
                } else {
                    $adminController->manajemen();
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
                            echo "Invalid sub-action for kelola.";
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

            default:
                header("Location: /PBL/mahasiswa");
                exit;
        }
        break;

        // default:
        //     echo "Page not found.";
        //     break;
}
