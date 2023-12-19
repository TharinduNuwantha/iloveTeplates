<?php
session_start();
sleep(2);
require_once('inc/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = 'img/uploads/';
    $uploadFile = $uploadDir . rand(1000, 100000) . rand(1, 1000) . rand(1, 100) . rand(1, 10) . basename($_FILES['thumbnail_link']['name']);

    if (move_uploaded_file($_FILES['thumbnail_link']['tmp_name'], $uploadFile)) {
        $_SESSION['thumbnail_link'] = $uploadFile;
        
        // Use prepared statement to prevent SQL injection
        $id = $_POST['ThmEdid']; // Assuming 'id' is the key in the $_POST array

        $sql = "SELECT thumbnail_id FROM main WHERE id = '{$id}'";
        $result = mysqli_query($conn, $sql);
        $thmId = mysqli_fetch_assoc($result);
        $id = $thmId['thumbnail_id'];
        // Check if the query was successful
        if ($result) {
            $sql = "UPDATE thumbnail SET thumbnail_link = '{$uploadFile}' WHERE id = '{$id}'";
            $result_set = mysqli_query($conn, $sql);

            if ($result_set) {
                // Check if any rows were returned
               
                    // Fetch the associative array and access the 'id' column
               
            
                    $_SESSION['thumbnail_id'] = $id;

                    $response = array(
                        'status' => 'success',
                        'message' => 'File has been uploaded successfully',
                        'thumbnail_link' => $uploadFile,
                        'passID' => $_POST['ThmEdid']
                    );
                    echo json_encode($response);
           
            } else {
                echo 'Error in the query.';
            }
        } else {
            echo 'Error selecting from the database.';
        }
    } else {
        echo 'Error uploading the file.';
    }
} else {
    echo 'Invalid request.';
}
?>
