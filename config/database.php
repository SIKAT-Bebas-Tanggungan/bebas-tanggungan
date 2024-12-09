<?php
function getPDOConnection() {
    $serverName = "localhost";
    $database = "bebas_tanggungan";
    $username = "fawwazAlifio";
    $password = "12345678";

    try {
        $dsn = "sqlsrv:Server=$serverName;Database=$database";
        $pdo = new PDO($dsn, $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>
