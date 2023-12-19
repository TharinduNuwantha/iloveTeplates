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
        $sql = "INSERT INTO thumbnail(thumbnail_link) VALUES(?)";
        $stmt = mysqli_prepare($conn, $sql);

        // Bind the parameter and execute the statement
        mysqli_stmt_bind_param($stmt, "s", $uploadFile);
        $result = mysqli_stmt_execute($stmt);

        // Check if the query was successful
        if ($result) {
            
            $sql = "SELECT id FROM thumbnail ORDER BY id DESC LIMIT 1";
            $result_set = mysqli_query($conn, $sql);
            
            if ($result_set) {
                // Check if any rows were returned
                if (mysqli_num_rows($result_set) > 0) {
                    // echo 'File has been uploaded successfully';
                    $response = array(
                        'status' => 'success',
                        'message' => 'File has been uploaded successfully',
                        'thumbnail_link' => $uploadFile
                    );
                    echo json_encode($response);
                    
                    // Fetch the associative array and access the 'id' column
                    $row = mysqli_fetch_assoc($result_set);
                    $id = $row['id'];
            
                    $_SESSION['thumbnail_id'] = $id;
                } else {
                    echo 'No records found.';
                }
            } else {
                echo 'Error in the query.';
            }
            
            
        } else {
            echo 'Error inserting into the database.';
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo 'Error uploading the file.';
    }
} else {
    echo 'Invalid request.';
}
?>
