<?php
    require_once('inc/connection.php');
    sleep(2);
    if($_POST['buttonType'] == 'Trending'){
                $lodMorTrendCont = $_POST['lodMorTrendCont'];
                $currentDisTrnd = $_POST['currentDisTrnd'];
                $type = $_POST['buttonType'];
                $masterBoxes = array();
                $sql = "SELECT * FROM main WHERE type = 'Trending' ORDER BY updated_date DESC LIMIT {$currentDisTrnd}, {$lodMorTrendCont}";
                $result_set_main = mysqli_query($conn, $sql);  // Rename to $result_set_main
                if($result_set_main){
                    if(mysqli_num_rows($result_set_main) > 0){
                        $noMorData = false;
                        while($box = mysqli_fetch_assoc($result_set_main)){
                            $thmId = $box['thumbnail_id'];
                            $sql_thumbnail = "SELECT thumbnail_link FROM thumbnail WHERE id = '{$thmId}'";
                            $result_set_thumbnail = mysqli_query($conn, $sql_thumbnail);  // Rename to $result_set_thumbnail
                            if($result_set_thumbnail){
                                if(mysqli_num_rows($result_set_thumbnail) > 0){
                                    $thm = mysqli_fetch_assoc($result_set_thumbnail);
                                    $thumbnail_link = $thm['thumbnail_link'];
                                    $boxKit = array();
                                    $boxKit['boxId'] = $box['id'];
                                    $boxKit['template_name'] = $box['template_name'];
                                    $boxKit['thumbnail_link'] = $thm['thumbnail_link'];
                                    $masterBoxes[] = $boxKit;
                                }
                            }
                        }
                    }else{
                        $noMorData = true;
                    }
                }
                if($noMorData == false){
                    $jsonString = json_encode($masterBoxes);
                    echo $jsonString;
                }elseif($noMorData == true){
                    echo "noMorData";
                }
    
    }


    if($_POST['buttonType'] == 'Vlog'){
        $lodMorVlgCont = $_POST['lodMorVlgCont'];
        $currentDisVlg = $_POST['currentDisVlg'];
        $type = $_POST['buttonType'];
        $masterBoxes = array();
        $sql = "SELECT * FROM main WHERE type = 'Vlog' ORDER BY updated_date DESC LIMIT {$currentDisVlg}, {$lodMorVlgCont}";
        $result_set_main = mysqli_query($conn, $sql);  // Rename to $result_set_main
        if($result_set_main){
            if(mysqli_num_rows($result_set_main) > 0){
                $noMorData = false;
                while($box = mysqli_fetch_assoc($result_set_main)){
                    $thmId = $box['thumbnail_id'];
                    $sql_thumbnail = "SELECT thumbnail_link FROM thumbnail WHERE id = '{$thmId}'";
                    $result_set_thumbnail = mysqli_query($conn, $sql_thumbnail);  // Rename to $result_set_thumbnail
                    if($result_set_thumbnail){
                        if(mysqli_num_rows($result_set_thumbnail) > 0){
                            $thm = mysqli_fetch_assoc($result_set_thumbnail);
                            $thumbnail_link = $thm['thumbnail_link'];
                            $boxKit = array();
                            $boxKit['boxId'] = $box['id'];
                            $boxKit['template_name'] = $box['template_name'];
                            $boxKit['thumbnail_link'] = $thm['thumbnail_link'];
                            $masterBoxes[] = $boxKit;
                        }
                    }
                }
            }else{
                $noMorData = true;
            }
        }
        if($noMorData == false){
            $jsonString = json_encode($masterBoxes);
            echo $jsonString;
        }elseif($noMorData == true){
            echo "noMorData";
        }

}




if($_POST['buttonType'] == 'Phot_Collaps'){
    $lodMorPcCont = $_POST['lodMorPcCont'];
    $currentDisPc= $_POST['currentDisPc'];
    $type = $_POST['buttonType'];
    $masterBoxes = array();
    $sql = "SELECT * FROM main WHERE type = 'Photo Collaps' ORDER BY updated_date DESC LIMIT {$currentDisPc}, {$lodMorPcCont}";
    $result_set_main = mysqli_query($conn, $sql);  // Rename to $result_set_main
    if($result_set_main){
        if(mysqli_num_rows($result_set_main) > 0){
            $noMorData = false;
            while($box = mysqli_fetch_assoc($result_set_main)){
                $thmId = $box['thumbnail_id'];
                $sql_thumbnail = "SELECT thumbnail_link FROM thumbnail WHERE id = '{$thmId}'";
                $result_set_thumbnail = mysqli_query($conn, $sql_thumbnail);  // Rename to $result_set_thumbnail
                if($result_set_thumbnail){
                    if(mysqli_num_rows($result_set_thumbnail) > 0){
                        $thm = mysqli_fetch_assoc($result_set_thumbnail);
                        $thumbnail_link = $thm['thumbnail_link'];
                        $boxKit = array();
                        $boxKit['boxId'] = $box['id'];
                        $boxKit['template_name'] = $box['template_name'];
                        $boxKit['thumbnail_link'] = $thm['thumbnail_link'];
                        $masterBoxes[] = $boxKit;
                    }
                }
            }
        }else{
            $noMorData = true;
        }
    }
    if($noMorData == false){
        $jsonString = json_encode($masterBoxes);
        echo $jsonString;
    }elseif($noMorData == true){
        echo "noMorData";
    }

}




if($_POST['buttonType'] == 'top'){
    $lodMorTopCont = $_POST['lodMorTopCont'];
    $currentDisTop= $_POST['currentDisTop'];
    $type = $_POST['buttonType'];
    $masterBoxes = array();
    $sql = "SELECT * FROM main WHERE type = 'fixed' ORDER BY updated_date DESC LIMIT {$currentDisTop}, {$lodMorTopCont}";
    $result_set_main = mysqli_query($conn, $sql);  // Rename to $result_set_main
    if($result_set_main){
        if(mysqli_num_rows($result_set_main) > 0){
            $noMorData = false;
            while($box = mysqli_fetch_assoc($result_set_main)){
                $thmId = $box['thumbnail_id'];
                $sql_thumbnail = "SELECT thumbnail_link FROM thumbnail WHERE id = '{$thmId}'";
                $result_set_thumbnail = mysqli_query($conn, $sql_thumbnail);  // Rename to $result_set_thumbnail
                if($result_set_thumbnail){
                    if(mysqli_num_rows($result_set_thumbnail) > 0){
                        $thm = mysqli_fetch_assoc($result_set_thumbnail);
                        $thumbnail_link = $thm['thumbnail_link'];
                        $boxKit = array();
                        $boxKit['boxId'] = $box['id'];
                        $boxKit['template_name'] = $box['template_name'];
                        $boxKit['thumbnail_link'] = $thm['thumbnail_link'];
                        $masterBoxes[] = $boxKit;
                    }
                }
            }
        }else{
            $noMorData = true;
        }
    }
    if($noMorData == false){
        $jsonString = json_encode($masterBoxes);
        echo $jsonString;
    }elseif($noMorData == true){
        echo "noMorData";
    }

}
    // echo print_r($masterBoxes);
?>
