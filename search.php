<?php 
    require_once('inc/connection.php');
//OR updated_date LIKE '%".$search."%'



    if(isset($_GET['dateBtn'])){
        if(isset($_GET['shDate'])){
            $search =  $_GET['shDate'];
            $sql = "SELECT * FROM main WHERE updated_date LIKE '%".$search."%'";
    
            $result_set_main = mysqli_query($conn, $sql);
            $list ='';
            if($result_set_main){
                if(mysqli_num_rows($result_set_main) >= 1 ){
                    
                    while($item = mysqli_fetch_assoc($result_set_main)){
                        $thumbnail_sql = "SELECT thumbnail_link FROM thumbnail WHERE id ='{$item['thumbnail_id']}' LIMIT 1 ";
                        $result_set_thumbnail = mysqli_query($conn, $thumbnail_sql);
                        
                        if($result_set_thumbnail){
                            $thumbnail = mysqli_fetch_assoc($result_set_thumbnail);
                            $itemID = $item['id'];
                            $list .= "<tr>";
                            $list .= "<td>".$item['id']."</td>";
                            $list .= "<td><img class='thmlForLst' src='" . $thumbnail['thumbnail_link'] . "'></td>";
                            $list .= "<td>".$item['template_name']."</td>";
                            $list .= "<td>".$item['updated_date']."</td>";
                            $list .= "<td>".$item['type']."</td>";
                            $list .= "<td>"."<a href='editForm.php?itemID=".$itemID."'><button id=\"editBtn\">Edit</button></a>"."</td>";
                            $list .= "<td>"."<a href='delete.php?itemID=".$itemID."'><button id=\"deleteBtn\">Delete</button></a>"."</td>";
                            $list .= "</tr>";
                        }
                    }
                }
            }
        }
    }


    if(isset($_GET['lstSearcg'])){
        $search =  $_GET['lstSearcg'];
        $sql = "SELECT * FROM main WHERE id LIKE '%".$search."%' OR template_name LIKE '%".$search."%'";

        $result_set_main = mysqli_query($conn, $sql);
        $list ='';
        if($result_set_main){
            if(mysqli_num_rows($result_set_main) >= 1 ){
                
                while($item = mysqli_fetch_assoc($result_set_main)){
                    $thumbnail_sql = "SELECT thumbnail_link FROM thumbnail WHERE id ='{$item['thumbnail_id']}' LIMIT 1 ";
                    $result_set_thumbnail = mysqli_query($conn, $thumbnail_sql);
                    
                    if($result_set_thumbnail){
                        $thumbnail = mysqli_fetch_assoc($result_set_thumbnail);
                        $itemID = $item['id'];
                        $list .= "<tr>";
                        $list .= "<td>".$item['id']."</td>";
                        $list .= "<td><img class='thmlForLst' src='" . $thumbnail['thumbnail_link'] . "'></td>";
                        $list .= "<td>".$item['template_name']."</td>";
                        $list .= "<td>".$item['updated_date']."</td>";
                        $list .= "<td>".$item['type']."</td>";
                        $list .= "<td>"."<a href='editForm.php?itemID=".$itemID."'><button id=\"editBtn\">Edit</button></a>"."</td>";
                        $list .= "<td>"."<a href='delete.php?itemID=".$itemID."'><button id=\"deleteBtn\">Delete</button></a>"."</td>";
                        $list .= "</tr>";
                    }
                }
            }
        }
                }else{
                    $sql = "SELECT * FROM main ORDER BY updated_date DESC";
                    $result_set_main = mysqli_query($conn, $sql);
                    
                    if($result_set_main){
                        if(mysqli_num_rows($result_set_main) > 1 ){
                            $list ='';
                            while($item = mysqli_fetch_assoc($result_set_main)){
                                $thumbnail_sql = "SELECT thumbnail_link FROM thumbnail WHERE id ='{$item['thumbnail_id']}' LIMIT 1 ";
                                $result_set_thumbnail = mysqli_query($conn, $thumbnail_sql);
                                
                                if($result_set_thumbnail){
                                    $thumbnail = mysqli_fetch_assoc($result_set_thumbnail);
                                    $itemID = $item['id'];
                                    $list .= "<tr>";
                                    $list .= "<td>".$item['id']."</td>";
                                    $list .= "<td><img class='thmlForLst' src='" . $thumbnail['thumbnail_link'] . "'></td>";
                                    $list .= "<td>".$item['template_name']."</td>";
                                    $list .= "<td>".$item['updated_date']."</td>";
                                    $list .= "<td>".$item['type']."</td>";
                                    $list .= "<td>"."<a href='editForm.php?itemID=".$itemID."''><button id=\"editBtn\">Edit</button></a>"."</td>";
                                    $list .= "<td>"."<a href='delete.php?itemID=".$itemID."''><button id=\"deleteBtn\">Delete</button></a>"."</td>";
                                    $list .= "</tr>";
                                }
                            }
                        }
                    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <title>Search/iloveTamplate</title>
</head>
<body>
    <nav><p>ilovetemplate.com</p>
    <div class="links">
        <ul>
            <li><a href="uploard.php">Uploard.php</a></li>
            <li><a href="search.php">Search.php</a></li>
        </ul>
    </div>
</nav>
    <div class="wapper">
        <?php 
            if(isset($_GET['del'])){
                if($_GET['del'] === 'suss'){
                    echo "<div class='success-msg'><i class='fa fa-check'></i>";
                    echo "Delete successfully.....";
                    echo "</div>";
                }else{
                    echo "<div class='error-msg'><i class='fa fa-times-circle'></i>";
                    echo "Delete failed";
                    echo "</div>";
                }
            }
            if(isset($_GET['upl'])){
                if($_GET['upl'] === 'sus'){
                    echo "<div class='success-msg'><i class='fa fa-check'></i>";
                    echo "Uploard successfully.....";
                    echo "</div>";
                }
            }
        ?>
        <div class="container">
            <div class="table">
                <form action="search.php" method="get">
                    <div class="searchbar">
                        <input type="text" placeholder="Search with is,name..." id="lstSearcg" class="lstSearcg" name="lstSearcg">
                        <button class="listSearch" id="listSearch">Search</button>
                    </div>
                    <div class="searchbar">
                        <input type="text" placeholder="Search with Date......" id="shDate" class="lstSearcg" name="shDate">
                        <button class="listSearch" id="listSearch" name="dateBtn">Search</button>
                    </div>
                </form>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>template</th>
                        <th>Template name</th>
                        <th>Uploard Date</th>
                        <th>Type</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                        <?php  echo $list; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>