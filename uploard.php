<?php
    
    session_start();
    require_once('inc/connection.php');

    $thumbnail_link='aaaaaaa';
    $video_link='';
    $template_name='';
    $capcut_link='';
    $android='';
    $appstore='';
    $windows='';
    $type='';
   // echo "thumbnail_link is : " . $_SESSION['thumbnail_id'];
    if(isset($_POST['uploard'])){
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

            if (isset($_POST["selectedCheckboxes"])){
                $selectedCheckboxes = $_POST["selectedCheckboxes"];
                $selectedString = implode(", ", $selectedCheckboxes);
               // echo "Selected Checkboxes: " . $selectedString;
            }
            
            $sql = "INSERT INTO main (thumbnail_id, video_link, template_name, capcut_link, android, appstore, windows, type,keywords, updated_date) VALUES ('{$_SESSION['thumbnail_id']}', '{$video_link}', '{$template_name}', '{$capcut_link}', '{$android}', '{$appstore}', '{$windows}','{$type}','{$selectedString}', NOW())";
            $result_set = mysqli_query($conn, $sql);
            
            if ($result_set) {
                $sql = "INSERT INTO views(thumbnail_id,views) VALUES ('{$_SESSION['thumbnail_id']}',0)";
                $result_set = mysqli_query($conn,$sql);
                if($result_set){
                    echo "Query successfully";
                    header('Location:search.php?upl=sus');
                    $_SESSION['thumbnail_link'] ='';
                }
            } else {
                echo "Query failed";
            }


            
    }}
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
    <h2>Upload New Item</h2>
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
        
    </div>
</form>

            
                <form  method="post" id="fileInput" enctype="multipart/form-data">
                    
                            <?php
                                if(!empty($err)){
                                    echo '<div class="errbox">';
                                    echo '<ul>';
                                    foreach ($err as $er) {
                                        echo "<li>-> ".$er."</li>";
                                    }
                                    echo '</ul>';
                                    echo '</div>';
                                }
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
                        <label for="type">Type</label>
                        <select name="type" id="type">
                            <option value="Trending">Trending</option>
                            <option value="Vlog">Vlog</option>
                            <option value="Photo Collaps">Photo Collaps</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </span><br><br>
                    <span>
                       <label for="type"><h3></h3></label><br><br>
                      <p class="keyword">Travel</p>  <input type="checkbox" name="selectedCheckboxes[]" value="Travel" id="keywords" width="5px" height="5px">
                      <p class="keyword">Better Life</p>  <input type="checkbox" name="selectedCheckboxes[]" value="Better life" id="keywords" width="5px" height="5px">
                      <p class="keyword">Wedding</p> <input type="checkbox" name="selectedCheckboxes[]" value="Wedding" id="keywords" width="5px" height="5px">
                      <p class="keyword">Photo Collage</p> <input type="checkbox" name="selectedCheckboxes[]" value="Photo Collage" id="keywords" width="5px" height="5px">
                      <p class="keyword">Add Text</p> <input type="checkbox" name="selectedCheckboxes[]" value="Add Text" id="keywords" width="5px" height="5px">
                      <p class="keyword">Toon me</p> <input type="checkbox" name="selectedCheckboxes[]" value="Toon me" id="keywords" width="5px" height="5px">
                      <p class="keyword">Love you</p> <input type="checkbox" name="selectedCheckboxes[]" value="Love you" id="keywords" width="5px" height="5px">
                      <p class="keyword">Beauty</p> <input type="checkbox" name="selectedCheckboxes[]" value="Beauty" id="keywords" width="5px" height="5px">
                      <p class="keyword">Posh</p> <input type="checkbox" name="selectedCheckboxes[]" value="Posh" id="keywords" width="5px" height="5px">
                      <p class="keyword">Black and white</p> <input type="checkbox" name="selectedCheckboxes[]" value="Black and white" id="keywords" width="5px" height="5px">
                      <p class="keyword">Blur</p> <input type="checkbox" name="selectedCheckboxes[]" value="Blur" id="keywords" width="5px" height="5px">
                      <p class="keyword">Ultra Relax</p> <input type="checkbox" name="selectedCheckboxes[]" value="Ultra Relax" id="keywords" width="5px" height="5px">
                      <p class="keyword">Vehicle lovers</p> <input type="checkbox" name="selectedCheckboxes[]" value="Vehicle lovers" id="keywords" width="5px" height="5px">
                      <p class="keyword">Super dancer</p> <input type="checkbox" name="selectedCheckboxes[]" value="Super dancer" id="keywords" width="5px" height="5px">
                      <p class="keyword">Movies</p> <input type="checkbox" name="selectedCheckboxes[]" value="Movies" id="keywords" width="5px" height="5px">
                      <p class="keyword">Chill</p> <input type="checkbox" name="selectedCheckboxes[]" value="Chill" id="keywords" width="5px" height="5px">
                      
                    </span>
                    <span>
                        <button name="uploard" class="mainUp">Uploard</button>
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

    var formData = new FormData();
    formData.append('thumbnail_link', file);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'sendImage.php', true);

    xhr.onreadystatechange = function () {
       
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
             //   alert(xhr.responseText);
             var jsonResponse = JSON.parse(xhr.responseText);
             
                document.getElementById('upThmLd').classList.add('hide');
                if(jsonResponse.message.trim() === "File has been uploaded successfully"){
                    console.log(xhr.responseText);
                    console.log('thambanail buploarding sussfully ok');
                    document.getElementById('sussfulMsa').classList.remove('hide');
                    //display priew imafe
                  document.getElementById("priewImg").innerHTML = '<img src="'+jsonResponse.thumbnail_link+'" width="300px" alt="">';


                }else{
                    console.error('Error uploading file');
                    document.getElementById('reloadPage').classList.remove('hide');
                    document.getElementById('errMsa').classList.remove('hide');
                    console.log(xhr.responseText);
                 alert(xhr.responseText);
                }
                // Successful upload, handle the response if needed

                
            } else {
                // Handle errors

            }

            // You can update the UI or perform additional actions here

            // For example, show the reload button after the upload is complete
           
        }
    };

    xhr.send(formData);
}
</script>
</html>