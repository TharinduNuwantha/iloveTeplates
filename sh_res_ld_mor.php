<?php
    require_once('inc/connection.php');
    sleep(2);
    if($_POST['buttonType']){
                $lodMorShCont = $_POST['lodMorShCont'];
                $currentDisSh = $_POST['currentDisSh'];
                $type = $_POST['buttonType'];
                $masterBoxes = array();
                $sql = "SELECT * FROM main WHERE type = '{$type}' ORDER BY updated_date DESC LIMIT {$currentDisSh}, {$lodMorShCont}";
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


    