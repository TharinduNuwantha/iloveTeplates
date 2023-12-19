<?php
require_once('inc/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT template_name FROM main WHERE template_name LIKE '%".$_POST['searcQuery']."%' LIMIT 10";
    $result_set = mysqli_query($conn,$sql);
    if($result_set){
        if(mysqli_num_rows($result_set) > 0){
            $qury = array();
            while($qr = mysqli_fetch_assoc($result_set)){
                $qury[] = $qr;
            }

            $response = array(
                'status' => 'success',
                'message' => 'File has been uploaded successfully',
                'qury' => $qury
            );
            echo json_encode($response);
        }
    }

}

?>