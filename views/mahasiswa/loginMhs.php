<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIKAT - BATA</title>
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="http://localhost/bebas-tanggungan/views/assets/css/loginPage.css" />
    <!-- Font Poppins -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet" />
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow" style="height: 101px;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center">
                <img src="http://localhost/bebas-tanggungan/views/assets/images/logoPoltek.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top" />
                <img src="http://localhost/bebas-tanggungan/views/assets/images/JTI_Polinema.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top" />
                <img src="http://localhost/bebas-tanggungan/views/assets/images/logoSikatBata.svg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top" />
                <span class="sikat-bata ms-2">
                    <span class="sikat">SIKAT-</span>
                    <span class="bata"> BATA</span>
                </span>
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <!-- Hero Section -->
    <div class="container hero-section">
        <div class="row justify-content-center">
            <div class="col-md-8"> <!-- Memperlebar lebar kartu -->
                <div class="card">
                    <div class="card-body shadow-sm">
                        <h1 class="text-center mb-4">Selamat Datang di SIKAT - BATA JTI!</h1> <!-- Tambahkan mb-4 -->
                        <p class="text-center mb-4">Untuk melanjutkan, silakan isi data diri Anda di form yang tersedia di bawah ini.</p> <!-- Tambahkan mb-4 -->
                        <form method="POST" style="margin-top: 50px;">
                            <div class="mb-3 row">
                                <label for="nim" class="form-label col-sm-4 text-start">NIM<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="form-label col-sm-4 text-start">Kata Sandi<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3 align-items-center" style="margin-top: 50px;">
                                <button type="submit" class="btn btn-primary w-100">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('views/components/mahasiswa/footer.php') ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>