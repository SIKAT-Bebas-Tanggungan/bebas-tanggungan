<?php
session_start();
require 'db.php'; // Include the PDO connection logic

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['nim'])) {
        die("Mahasiswa not logged in.");
    }

    $id_mahasiswa = $_SESSION['nim'];

    try {
        $pdo = getPDOConnection(); // Get the database connection

        // Check if the record already exists for the id_mahasiswa
        $stmt = $pdo->prepare("SELECT * FROM unggah_berkas WHERE id_mahasiswa = :id_mahasiswa");
        $stmt->bindParam(':id_mahasiswa', $id_mahasiswa, PDO::PARAM_INT);
        $stmt->execute();
        $existingData = $stmt->fetch();

        // Initialize the SQL query dynamically
        $fields = ['laporan', 'file_tugas', 'surat_publikasi', 'tanda_terima_LA', 'tanda_terima_PKL', 'scan_toeic'];
        $params = [':id_mahasiswa' => $id_mahasiswa];
        $allFieldsProvided = true;

        if ($existingData) {
            // Update logic if data exists
            $updateQuery = "UPDATE unggah_berkas SET ";
            $updateFields = [];

            foreach ($fields as $field) {
                if (isset($_FILES[$field]) && $_FILES[$field]['error'] == UPLOAD_ERR_OK) {
                    $fileContent = file_get_contents($_FILES[$field]['tmp_name']);
                    $updateFields[] = "$field = :$field";
                    $params[":$field"] = $fileContent;
                } else {
                    // Use existing data for the field if not uploaded
                    $updateFields[] = "$field = :$field";
                    $params[":$field"] = $existingData[$field];
                }
            }

            $updateQuery .= implode(", ", $updateFields) . " WHERE id_mahasiswa = :id_mahasiswa";
            $stmt = $pdo->prepare($updateQuery);
            $stmt->execute($params);

            echo "Files successfully updated!";
        } else {
            // Insert logic if no existing data
            $insertQuery = "INSERT INTO unggah_berkas 
                            (laporan, file_tugas, surat_publikasi, tanda_terima_LA, tanda_terima_PKL, scan_toeic, id_mahasiswa) 
                            VALUES (:laporan, :file_tugas, :surat_publikasi, :tanda_terima_LA, :tanda_terima_PKL, :scan_toeic, :id_mahasiswa)";

            foreach ($fields as $field) {
                if (isset($_FILES[$field]) && $_FILES[$field]['error'] == UPLOAD_ERR_OK) {
                    $params[":$field"] = file_get_contents($_FILES[$field]['tmp_name']);
                } else {
                    // If any required field is missing, return an error
                    $allFieldsProvided = false;
                    break;
                }
            }

            if (!$allFieldsProvided) {
                die("Error: All fields are required when inserting a new record.");
            }

            $stmt = $pdo->prepare($insertQuery);
            $stmt->execute($params);

            echo "Files successfully uploaded!";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
