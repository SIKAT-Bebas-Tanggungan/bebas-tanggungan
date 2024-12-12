<?php
session_start();
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $pdo = getPDOConnection();

        // Fetch password for the given username
        $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch();

        if ($result) {
            // Hash the input password
            $hashedPassword = hash('sha256', $password);

            // Validate the hashed password
            if ($result['password'] === $password) {
                $_SESSION['id_admin'] = $result['id_admin'];
                $_SESSION['role'] = $result['role'];
                header("Location: dashboardAdm.php");
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "Admin user not found.";
        }
    } catch (PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
}
?>