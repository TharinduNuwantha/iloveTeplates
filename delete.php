<?php 
require_once('inc/connection.php');
    if(isset($_GET['itemID'])){
        $itemId = $_GET['itemID'];
        $sql = "SELECT thumbnail_id FROM main WHERE id = '{$itemId}' LIMIT 1";
        $result_set = mysqli_query($conn,$sql);
        if($result_set){
            $thumbnail = mysqli_fetch_assoc($result_set);
            $thumbnail_id = $thumbnail['thumbnail_id'];
            //echo "Thambanail : ". $thumbnail_id;
            $sql = "DELETE FROM main WHERE id = '{$itemId}'";
            $result_set = mysqli_query($conn,$sql);
            if($result_set){
                $sql = "DELETE FROM thumbnail WHERE id = '{$thumbnail_id}'";
                $result_set = mysqli_query($conn,$sql);
                if($result_set){
                    echo "<div class='success-msg'><i class='fa fa-check'></i>";
                    echo "Query successfully.....";
                    echo "</div>";
                   header('Location:search.php?del=suss');
                }else{
                    echo "<div class='error-msg'><i class='fa fa-times-circle'></i>";
                    echo "Query failed";
                    echo "</div>";
                    header('Location:search.php?del=fall');
                }
            }
        }
        

    }
?>