<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    try {
        $pdo = getPDOConnection();

        // Fetch password for the given nim
        $stmt = $pdo->prepare("SELECT password FROM mahasiswa WHERE nim = :nim");
        $stmt->bindParam(':nim', $nim, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch();

        if ($result) {
            // Hash the input password
            $hashedPassword = hash('sha256', $password);

            // Validate the hashed password
            if ($result['password'] === $hashedPassword) {
                $_SESSION['nim'] = $nim;
                $_SESSION['role'] = 'mahasiswa'; // Set role as mahasiswa
                header("Location: dashboardMhs.php");
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "Mahasiswa user not found.";
        }
    } catch (PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
}
?>