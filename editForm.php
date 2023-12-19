<?php
 
    session_start();
    require_once('inc/connection.php');
    $thumbnail_link='';
    $video_link='';
    $template_name='';
    $capcut_link='';
    $android='';
    $appstore='';
    $windows='';
    $type='';
   // echo "thumbnail_link is : " . $_SESSION['thumbnail_id'];
    if(isset($_GET['itemID'])){

        $sql = "SELECT * FROM main WHERE id = '{$_GET['itemID']}'";
        $result_set = mysqli_query($conn,$sql);
        if($result_set){
                
             $item = mysqli_fetch_assoc($result_set);
            // echo "thambanailID : ". $item['thumbnail_id']."<br>";
             $thumbnail_sql = "SELECT * FROM thumbnail WHERE id ='{$item['thumbnail_id']}' LIMIT 1 ";
             $result_set_thumbnail = mysqli_query($conn, $thumbnail_sql);
             if($result_set_thumbnail){
                $thumbnail_data = mysqli_fetch_assoc($result_set_thumbnail);
                $thumbnail_link = $thumbnail_data['thumbnail_link']; //this is no requer this is use only fix error
          
             }
             $video_link= $item['video_link'];
             $template_name= $item['template_name'];
             $capcut_link= $item['capcut_link'];
             $android= $item['android'];
             $appstore= $item['appstore'];
             $windows= $item['windows'];
             $type= $item['type'];
             $keywordsArray = explode(', ', $item["keywords"]);
             $travel = false;
             $BetterLife = false;
             $Wedding = false;
             $PhotoCollage = false;
             $AddText = false;
             $Toonme = false;
             $Loveyou = false;
             $Beauty = false;
             $Posh = false;
             $Blackandwhite = false;
             $Blur = false;
             $UltraRelax = false;
             $Vehiclelovers = false;
             $Superdancer = false;
             $Movie = false;
             $Chill = false;
             foreach ($keywordsArray as $keyword){

                switch($keyword){
                    case 'Travel':
                        $travel = true;
                        break;
                    case 'Better life':
                        $BetterLife = true;  
                        break;
                    case 'Wedding':
                        $Wedding = true;
                        break;
                    case 'Photo Collage':
                        $PhotoCollage = true;
                        break;
                    case 'Add Text':
                        $AddText = true;
                        break;              
                    case 'Toon me':
                        $Toonme = true;
                        break; 
                    case 'Love you':
                        $Loveyou = true;
                        break; 
                    case 'Beauty':
                        $Beauty = true;
                        break; 
                    case 'Posh':
                        $Posh = true;
                        break; 
                    case 'Black and white':
                        $Blackandwhite = true;
                        break; 
                    case 'Blur':
                        $Blur = true;
                        break; 
                    case 'Ultra Relax':
                        $UltraRelax = true;
                        break; 
                    case 'Vehicle lovers':
                        $Vehiclelovers = true;
                        break; 
                    case 'Super dancer':
                        $Superdancer = true;
                        break; 
                    case 'Movies':
                        $Movie = true;
                        break; 
                    case 'Chill':
                        $Chill = true;     
                        break;                         

                }
             } 

                
            
        }
        }


        if(isset($_POST['update'])){
            $err = array();

        
            $reqFeals = array('video_link','template_name','capcut_link','android','appstore','windows','type');
            
    
            foreach ($reqFeals as $fiels) {
                if(empty(trim($_POST[$fiels]))){
                    $err[] = $fiels.' is required.!';
                }
            }
            $video_link= $_POST['video_link'];
            $template_name= $_POST['template_name'];
            $capcut_link= $_POST['capcut_link'];
            $android= $_POST['android'];
            $appstore= $_POST['appstore'];
            $windows= $_POST['windows'];
            $type= $_POST['type'];
            
            if(empty($err)){
            //    echo "no error";
                $video_link = $_POST['video_link'];
                $template_name = $_POST['template_name'];
                $capcut_link = $_POST['capcut_link'];
                $android = $_POST['android'];
                $appstore = $_POST['appstore'];
                $windows = $_POST['windows'];
                $type = $_POST['type'];
                $selectedString = '';

                if (isset($_POST["selectedCheckboxes"])){
                    $selectedCheckboxes = $_POST["selectedCheckboxes"];
                    $selectedString = implode(", ", $selectedCheckboxes);
                   // echo "Selected Checkboxes: " . $selectedString;
                }
                
                $sql = "UPDATE main SET video_link = '{$video_link}', template_name = '{$template_name}', capcut_link = '{$capcut_link}', android = '{$android}', appstore = '{$appstore}', windows = '{$windows}',type = '{$type}',keywords = '{$selectedString}' ,updated_date = NOW() WHERE id = '{$_GET['itemID']}'";
                $result_set = mysqli_query($conn, $sql);
                
                if ($result_set) {
                    echo "<div class='success-msg'><i class='fa fa-check'></i>";
                    echo "Query successfully.....";
                    echo "</div>";
                    $_SESSION['thumbnail_link'] ='';
                } else {
                    echo "<div class='error-msg'><i class='fa fa-times-circle'></i>";
                    echo "Query failed";
                    echo "</div>";
                }
                
        }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="uploard.css">
    <link rel="stylesheet" href="search.css">
    <script src="functions.js"></script>
    <title>Document</title>
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
        <div class="container">
            <div class="form">
                <div class="padding">

                <form method="post" id="thmForm" enctype="multipart/form-data">
    <!-- Your form fields here... -->
    <h2>Edit Item</h2>
    <span>
        <label for="thumbnail_link">Thumbnail Link</label>
        <input type="file" name="thumbnail_link" id="thumbnail_link" onchange="selectThm()" value="<?php echo $thumbnail_link; ?>">
    </span>
    <span>
        <button class="upThm hide" id="upThm" onclick="uploadThml()" type="button">Upload Thumbnail</button>
        <button class="upThm upThmLd hide" id="upThmLd"><img width="20px" src="img/main/loading.gif" alt=""></button>
        <button class="upThm errorBtn hide" id="reloadPage">Reload Page</button>
        <div class="sussfulMsa hide" id="sussfulMsa">Uploard SuccessFully</div>
        <div class="errMsa hide" id="errMsa">Uploard Error</div>
    </span>
    <!-- Your other form fields here... -->
    <div class="priewImg" id="priewImg">
        <img src="<?php  echo $thumbnail_data['thumbnail_link']; ?>" alt="" width="150px">
    </div>
</form>

            
                <form  method="post" id="fileInput" enctype="multipart/form-data">
                    
                            <?php
                                // if(!empty($err)){
                                //     echo '<div class="errbox">';
                                //     echo '<ul>';
                                //     foreach ($err as $er) {
                                //         echo "<li>-> ".$er."</li>";
                                //     }
                                //     echo '</ul>';
                                //     echo '</div>';
                                // }
                            ?>



                    <span>
                        <label for="video_link">Video Link</label>
                        <input type="text" name="video_link" id="video_link" value="<?php echo $video_link; ?>">                        
                    </span>
                    <span>
                        <label for="template_name">Template Name</label>
                        <input type="text" name="template_name" id="template_name" value="<?php echo $template_name; ?>">
                    </span>
                    <span>
                        <label for="capcut_link">Capcut Link</label>
                        <input type="text" name="capcut_link" id="capcut_link" value="<?php echo $capcut_link; ?>">
                    </span>
                    <span>
                        <label for="android">Android Link</label>
                        <input type="text" name="android" id="android" value="<?php echo $android; ?>">
                    </span>
                    <span>
                        <label for="appstore">Appstore Link</label>
                        <input type="text" name="appstore" id="appstore" value="<?php echo $appstore; ?>">
                    </span>
                    <span>
                        <label for="windows">Windows Link</label>
                        <input type="text" name="windows" id="windows" value="<?php echo $windows; ?>">
                    </span>
                    <span>
                        <label for="windows">Type</label>
                        <select name="type" id="type">
                            <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                            <option value="Trending">Trending</option>
                            <option value="Vlog">Vlog</option>
                            <option value="Photo Collaps">Photo Collaps</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </span>


                    <span>
                       <label for="type"><h3></h3></label><br><br>
                      <p class="keyword">Travel</p>  <input type="checkbox" name="selectedCheckboxes[]" value="Travel" <?php echo ($travel == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Better Life</p>  <input type="checkbox" name="selectedCheckboxes[]" value="Better" <?php echo ($BetterLife == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Wedding</p> <input type="checkbox" name="selectedCheckboxes[]" value="Wedding" <?php echo ($Wedding == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Photo Collage</p> <input type="checkbox" name="selectedCheckboxes[]" value="Photo Collage" <?php echo ($PhotoCollage == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Add Text</p> <input type="checkbox" name="selectedCheckboxes[]" value="Add Text" <?php echo ($AddText == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Toon me</p> <input type="checkbox" name="selectedCheckboxes[]" value="Toon me" <?php echo ($Toonme == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Love you</p> <input type="checkbox" name="selectedCheckboxes[]" value="Love you" <?php echo ($Loveyou == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Beauty</p> <input type="checkbox" name="selectedCheckboxes[]" value="Beauty" <?php echo ($Beauty == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Posh</p> <input type="checkbox" name="selectedCheckboxes[]" value="Posh" <?php echo ($Posh == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Black and white</p> <input type="checkbox" name="selectedCheckboxes[]" value="Black and white" <?php echo ($Blackandwhite == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Blur</p> <input type="checkbox" name="selectedCheckboxes[]" value="Blur" <?php echo ($Blur == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Ultra Relax</p> <input type="checkbox" name="selectedCheckboxes[]" value="Ultra Relax" <?php echo ($UltraRelax == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Vehicle lovers</p> <input type="checkbox" name="selectedCheckboxes[]" value="Vehicle lovers" <?php echo ($Vehiclelovers == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Super dancer</p> <input type="checkbox" name="selectedCheckboxes[]" value="Super dancer" <?php echo ($Superdancer == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Movies</p> <input type="checkbox" name="selectedCheckboxes[]" value="Movies" <?php echo ($Movie == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      <p class="keyword">Chill</p> <input type="checkbox" name="selectedCheckboxes[]" value="Chill" <?php echo ($Chill == true) ? 'checked' : ''; ?> id="keywords" width="5px" height="5px">
                      
                    </span>


                    <span>
                        <input type="hidden" name="ThmEdid" value="12">
                        <button name="update" class="mainUp">Uploard</button>
                    </span>
                </form>
            </div>
        </div>
    </div></div>
</body>
<script>
   // alert(123);
   function uploadThml() {
    const thUploadBtn = document.getElementById("upThm");
    const thLoadBtn = document.getElementById("upThmLd");

    thUploadBtn.classList.remove("show");
    thUploadBtn.classList.add("hide");

    thLoadBtn.classList.remove("hide");
    thLoadBtn.classList.add("show");

    // file data send process

    var fileInput = document.getElementById('thumbnail_link');
    var file = fileInput.files[0];

    // Creating FormData object and appending file and additional data
    var formData = new FormData();
    formData.append('thumbnail_link', file);
    
    // Append the additional data
    formData.append('ThmEdid', <?php echo $_GET['itemID']; ?>);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'updateThumbnail.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var jsonResponse = JSON.parse(xhr.responseText);
                document.getElementById('upThmLd').classList.add('hide');
                if(jsonResponse.message.trim() === "File has been uploaded successfully") {
                    console.log(xhr.responseText);
                    console.log('thumbnail uploading successfully');
                    document.getElementById('sussfulMsa').classList.remove('hide');
                    // Display preview image
                    document.getElementById("priewImg").innerHTML = '<img src="'+jsonResponse.thumbnail_link+'" width="300px" alt="">';
                   // alert(jsonResponse.passID);
                } else {
                    console.error('Error uploading file');
                    document.getElementById('reloadPage').classList.remove('hide');
                    document.getElementById('errMsa').classList.remove('hide');
                    console.log(xhr.responseText);
                    alert(xhr.responseText);
                }
            } else {
                // Handle errors
            }
        }
    };

    xhr.send(formData);
}

</script>
</html>