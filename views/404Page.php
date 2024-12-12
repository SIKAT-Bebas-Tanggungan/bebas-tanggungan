<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error - Page Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="d-flex flex-column vh-100" style="font-family: 'Poppins', sans-serif;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center ms-2" href="#">
                <img src="assets/images/logoSikatBata.svg" alt="Logo" class="d-inline-block align-text-top">    
                <span class="ms-3 text-center fw-bold lh-1" style="font-size: 1.5rem;">
                    <span>SIKAT-</span>
                    <span style="color: #FA9D1C;">BATA</span>
                </span>
            </a>
        </div>
    </nav>

    <!-- Main content -->
    <div class="d-flex justify-content-center align-items-center flex-grow-1">
        <div class="text-center">
            <img src="assets/images/404Error.png" alt="404 Error Image" class="img-fluid mb-5" style="max-width: 300px;">
            <h1 class="display-6 fw-bold mb-3">Halaman Tidak Tersedia</h1>
            <a onclick="goBack()" class="btn btn-outline-secondary btn-lg w-50">< Kembali</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/button.js"></script>
</body>
</html>
