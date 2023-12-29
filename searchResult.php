<?php
  require_once('inc/connection.php');

  if (isset($_GET['shh'])) {
    $type = '';
    switch ($_GET['shh']) {
        case 'top':
            $type = 'fixed';
            break;
        case 'trending':
            $type = 'Trending';
            break;
        case 'Vlog':
            $type = 'Vlog';
            break;
        case 'Photo_Collaps':
            $type = 'Photo Collaps';
            break;
    }
}

if (isset($_GET['category'])) {
    $type_cat = '';
    switch ($_GET['category']) {
        case 'Travel':
            $type_cat = 'Travel';
            break;
        case 'Better Life':
            $type_cat = 'Better Life';
            break;
        case 'Wedding':
            $type_cat = 'Wedding'; 
            break;  
        case 'Photo Collage':
            $type_cat = 'Photo Collage'; 
            break;   
        case 'Add Text':
            $type_cat = 'Add Text';
            break;
        case 'Toon me':
            $type_cat = 'Toon me';  
            break;
        case 'Love you':
            $type_cat = 'Love you';   
            break;  
        case 'Beauty':
            $type_cat = 'Beauty';
            break;
        case 'Posh':
            $type_cat = 'Posh';
            break;
        case 'Black and white':
            $type_cat = 'Black and white';
            break;
        case 'Blur':
            $type_cat = 'Blur';    
            break; 
        case 'Ultra Relax';
            $type_cat = 'Ultra Relax'; 
            break;   
        case 'Vehicle lovers':
            $type_cat = 'Vehicle lovers';
            break;
        case 'Super dancer':
            $type_cat = 'Super dancer';
            break;
        case 'Movie':
            $type_cat = 'Movie';
            break;
        case 'Chill':
            $type_cat = 'Chill';
            break;
    }
}

if(isset($_GET['SearchResult'])){
    $SearchResult = $_GET['SearchResult'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ilovetemplate.com</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Gemunu+Libre:wght@500&family=Noto+Sans+Sinhala:wght@900&family=Roboto:wght@500&family=Rubik+Bubbles&display=swap" rel="stylesheet">

</head>
<body>
    <div class="contaner">
        <nav>
           <div class="navBar"> 
            <div class="logo">
                I <img src="img/main/hart2.png" alt="hart" width="28px"> <a href="index.php" style="text-decoration: none;">Template.com</a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="index.html" class="navLink-active">Home</a></li>
                    <li><a href="#">Trends</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#" >All Templates</a></li>
                </ul>
            </div>
            <div class="menubars hide">
                <img src="img/main/menu-bold.png" width="30px" id="bars" alt="bars">
            </div>
          </div> 
        </nav>

        <!-- ================= Mobile Nav Start =================== -->     
        <div class="mobileNav" id="mobileNav">
            <div class="mbNavItm">
                <ul>
                    <li><a href="index.html" >Home</a></li>
                    <li><a href="#">Trends</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#" >All Templates</a></li>
                    <li><a href="#" >New Templates</a></li>
                    <li><a href="#" >Popular Templates</a></li>
                    <li><a href="#" >Business Templates</a></li>
                </ul>

                <div class="mb-logo">
                    I <img src="img/main/hart2.png" alt="hart" width="28px"> Template.com
                </div>
            </div>
        </div>
        <!-- ================= Mobile Nav END ===================== -->



        <div class="searchArea">
            <div class="boxSerch" id="boxSerch">
                <div class="shBoxText">
                    <p class="title1" id="i">I Love Template.com</p>
                    <p class="title2">Explore CapCut's Vast Template Library, Thousands of Free Trending Templates Await You! Easily Create Stunning Videos and Images</p>
                </div>
                <div class="searchBox">
                    <form id="sharchForm"></form>
                    <input type="text" id="searchBox" class="searchBox" placeholder="Search templates...">
                    <button id="mainSearchBox">Search</button>
                </div>
                <div class="spase1"></div>
                <div class="sh_reslt_cover">
                <div class="search_reslult_box">
                    <ul id='shList'>
                        
                    </ul>
                </div>
                </div>
            </div>
            
        </div>
        

        <div class="body">
            
            <div class="body-contaner">
                
                <div class="shhRsFor"><p>Search results for : <?php 
                    if(isset($_GET['shh'])){
                        echo ($type == 'fixed') ?  'Top': $type;
                    }else if(isset($_GET['category'])){
                        echo $type_cat;
                    }else if(isset($_GET['SearchResult'])){
                        echo $SearchResult;
                    }
                ?></p></div> 
                               
            <div class="line"></div>
            <div class="videoCenter">

                <div class="border" id="border_sh">
                <?php

                  if(isset($_GET['shh'])){
                        $sql = "SELECT * FROM main WHERE type = '{$type}' ORDER BY updated_date DESC LIMIT 11";
                        $result_set_main = mysqli_query($conn, $sql);
    
                        if ($result_set_main) {
                            if (mysqli_num_rows($result_set_main) > 0) {
                                $box = "";
                                while ($itm = mysqli_fetch_assoc($result_set_main)) {
                                    $sql_thumbnail = "SELECT thumbnail_link FROM thumbnail WHERE id = '{$itm['thumbnail_id']}'";
                                    $result_set_thumbnail = mysqli_query($conn, $sql_thumbnail);
    
                                    if ($result_set_thumbnail) {
                                        if (mysqli_num_rows($result_set_thumbnail) > 0) {
                                            $thumbnail_link = mysqli_fetch_assoc($result_set_thumbnail);
                                            $box .= '<div class="box">';
                                            $box .= '<a href="view.php?SearchResult=' . $itm['template_name'] . '&id=' . $itm['id'] . '" target="">';
                                            $box .= '<div class="img"><img class="lazy" data-original="' . $thumbnail_link['thumbnail_link'] . '" alt=""></div>';
                                            $box .= '<div class="tmpName">' . $itm['template_name'] . '</div>';
                                            $box .= '</a>';
                                            $box .= '<button class="videoPrevew" onclick="popUpWind(\'' . $itm['video_link'] . '\')">view video</button>';
                                            $box .= '</div>';
                                        }
                                    }
                                }
                                echo $box;
                            }
                        }
                  }

                  if(isset($_GET['category'])){
                    $sql = "SELECT * FROM main WHERE keywords LIKE '%{$type_cat}%' ORDER BY updated_date DESC LIMIT 11";
                    $result_set_main = mysqli_query($conn, $sql);

                    if ($result_set_main) {
                        if (mysqli_num_rows($result_set_main) > 0) {
                            $box = "";
                            while ($itm = mysqli_fetch_assoc($result_set_main)) {
                                $sql_thumbnail = "SELECT thumbnail_link FROM thumbnail WHERE id = '{$itm['thumbnail_id']}'";
                                $result_set_thumbnail = mysqli_query($conn, $sql_thumbnail);

                                if ($result_set_thumbnail) {
                                    if (mysqli_num_rows($result_set_thumbnail) > 0) {
                                        $thumbnail_link = mysqli_fetch_assoc($result_set_thumbnail);
                                        $box .= '<div class="box">';
                                        $box .= '<a href="view.php?SearchResult=' . $itm['template_name'] . '&id=' . $itm['id'] . '" target="">';
                                        $box .= '<div class="img"><img class="lazy" data-original="' . $thumbnail_link['thumbnail_link'] . '" alt=""></div>';
                                        $box .= '<div class="tmpName">' . $itm['template_name'] . '</div>';
                                        $box .= '</a>';
                                        $box .= '<button class="videoPrevew" onclick="popUpWind(\'' . $itm['video_link'] . '\')">view video</button>';
                                        $box .= '</div>';
                                    }
                                }
                            }
                            echo $box;
                        }
                    }
                  }

                  if(isset($_GET['SearchResult'])){

                    $sql = "SELECT * FROM main WHERE template_name LIKE '%{$SearchResult}%' ORDER BY updated_date DESC LIMIT 25";
                    $result_set_main = mysqli_query($conn, $sql);

                    if ($result_set_main) {
                        if (mysqli_num_rows($result_set_main) > 0) {
                            $box = "";
                            while ($itm = mysqli_fetch_assoc($result_set_main)) {
                                $sql_thumbnail = "SELECT thumbnail_link FROM thumbnail WHERE id = '{$itm['thumbnail_id']}'";
                                $result_set_thumbnail = mysqli_query($conn, $sql_thumbnail);

                                if ($result_set_thumbnail) {
                                    if (mysqli_num_rows($result_set_thumbnail) > 0) {
                                        $thumbnail_link = mysqli_fetch_assoc($result_set_thumbnail);
                                        $box .= '<div class="box">';
                                        $box .= '<a href="view.php?SearchResult=' . $itm['template_name'] . '&id=' . $itm['id'] . '" target="">';
                                        $box .= '<div class="img"><img class="lazy" data-original="' . $thumbnail_link['thumbnail_link'] . '" alt=""></div>';
                                        $box .= '<div class="tmpName">' . $itm['template_name'] . '</div>';
                                        $box .= '</a>';
                                        $box .= '<button class="videoPrevew" onclick="popUpWind(\'' . $itm['video_link'] . '\')">view video</button>';
                                        $box .= '</div>';
                                    }
                                }
                            }
                            echo $box;
                        }
                    }
                  }
                    ?>

        
                </div>
        </div>
        </div>
        </div>
             <input type="hidden" name="getType" id="getType" value="<?php 
             $shType = '';
             if(isset($_GET['shh'])){
                echo $type;
                $shType = 'shh';
             }else if(isset($_GET['category'])){
                echo $type_cat;
                $shType = 'category';
             }else if(isset($_GET['SearchResult'])){
                echo $SearchResult;
                $shType = 'SearchResult';
             }
             ?>">   

            <input type="hidden" name="getType" id="getTypeSh" value="<?php 
             $shType = '';
             if(isset($_GET['shh'])){
                echo 'shh';
             }else if(isset($_GET['category'])){
                echo 'category';
             }else if(isset($_GET['SearchResult'])){
                echo 'SearchResult';
             }
             ?>">   
                    
        <div class="button_box">
            <button class="ldMorBtn" id="ldMorBtn_sh">Load more</button> 
            <button class="ldLddBtn hide" id="loading_sh"><img src="img/main/loading.gif" width="15px" alt=""></button>
            <a href="" target="_blank"><button class="ldAll hide" id="ldAll_sh">No more data</button></a>
        </div>


<br><br>
        <!-- ================================= poppup window ========================= -->
        <!-- ================================= poppup window ========================= -->
        
        <div class="popup hide" id="popup"> 
    <section class="sction">
      <!-- <button class="show-modal">Show Modal</button> -->
      <span class="overlay"></span>

      <div class="modal-box">
        <div class="loadingBvid hide">
              <div class="loadingio-spinner-rolling-uyvf2saziu"><div class="ldio-fyd9fkzjpy6">
              <div></div>
              </div></div>
        
        </div>
        <div class="videoBox hide"></div>
        <!-- <iframe src="https://jumpshare.com/embed/VPqLyBu9VV19aFqybqDi" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen width="auto" height="402px"></iframe> -->
        <div class="buttons">
            <a href="" target="_blank"><button id="mnPnlBtn">Use Template on Capcut</button></a>
            <button class="close-btn">Close</button>
        </div>
      
    </section>
</div>
<!-- ================================= poppup window ========================= -->
<!-- ================================= poppup window ========================= -->
        <footer>
            <div class="footerline1">
                <div class="fotterlogo">    
                    <div class="logo">
                        <p>I Love Template.com</p>
                    </div>
                </div>

                <div class="shoshel-links">
                    <p class="contUs"> Contact Us</p>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#"> Blogs</a></li>
                        <li><a href="#"> Facebook</a></li>
                        <li><a href="#"> Instragram</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="bottonmFooter">
            <p class="cpyright" id="cpyright">&copy;</p>
        </div>
    </div><!--contaner-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="functions.js"></script>
    <script>
       // alert(document.getElementById("getType").value);
       //alert(document.getElementById("getTypeSh").value);
            // ================== laze loard ==================
                $(function(){
                    $('img.lazy').lazyload({
                        effect: "fadeIn"
                    });
                });

                // ================== Search box to searchResult.php start ===================
                        document.getElementById("mainSearchBox").addEventListener("click",function(){
                        var searchBoxVal = document.getElementById("searchBox").value; 
                        window.location.href = "searchResult.php?SearchResult=" + searchBoxVal;
                    });
                    // ================== Search box to searchResult.php end ===================== 
                
            // ================== laze loard ==================

            const triger = document.getElementById("searchBox");

            // user autofocus  input box
            triger.addEventListener("blur",function(){
                const ul =document.getElementById("shList");
             //   ul.innerHTML = '';
            });

            triger.addEventListener("keyup",function(){
                var searchBox =document.getElementById('searchBox');
                const ul =document.getElementById("shList");
                    if(searchBox.value === ''){
                        ul.innerHTML = '';
                   }
                });
            triger.addEventListener("input",function(){
    

                var searchBox =document.getElementById('searchBox');
                const ul =document.getElementById("shList");
                ul.innerHTML = '';
                var formData = new FormData();      
               formData.append('searcQuery',searchBox.value);


                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'searchquery.php', true);

                xhr.onreadystatechange = function () {
                
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                        //   alert(xhr.responseText);
                        var jsonResponse = JSON.parse(xhr.responseText);
                        
                            if(jsonResponse.message.trim() === "File has been uploaded successfully"){
                                console.log(xhr.responseText);
                                console.log('thambanail buploarding sussfully ok');
                                var searchQuery = [];
                                var searchQuery = jsonResponse.qury.map(function(item) {
                                return item.template_name;
                            });

                            console.log(searchQuery);
                          //  alert(searchQuery);
                            var listItems = ``;
                            for(let i =0;i<searchQuery.length;i++){
                                listItems += `<a href="searchResult.php?SearchResult=`+searchQuery[i]+`"  id="searchRsPross"><li>`+searchQuery[i]+`</li></a>`;
                            }
                            ul.innerHTML = listItems;
                                

                            }else{
                                console.error('Error uploading file');
                                console.log(xhr.responseText);
                            alert(xhr.responseText);
                            }
                            // Successful upload, handle the response if needed

                            
                        } else {
                            // Handle errors

                        }
                    
                    }
                };

                xhr.send(formData);
            });

        //sharchForm
        // =========================== Search box loard more button code Start ==============
        const ldMorBtn_sh = document.getElementById('ldMorBtn_sh');
        const loading_sh = document.getElementById('loading_sh');
        let lodMorShCont = 7;
        let currentDisSh = 4;

        ldMorBtn_sh.addEventListener("click",function(){
            ldMorBtn_sh.classList.add("hide");
            loading_sh.classList.remove("hide");
            $(document).ready(function(){
                currentDisSh += 7;
            // alert(currentDisTrnd);
          //  alert(document.getElementById("getType").value);
                var postData = {
                    buttonType:document.getElementById("getType").value,
                    btnType:document.getElementById("getTypeSh").value,
                    lodMorShCont: lodMorShCont,
                    currentDisSh: currentDisSh
                };
                // Using jQuery Ajax to send data to the PHP file
                $.ajax({
                    type: "POST",
                    url: "sh_res_ld_mor.php", // Change this to the actual path of your PHP file
                    data: postData,
                    success: function(response) {
                        // console.log(response);
                        if(response == 'noMorData'){
                            ldMorBtn_sh.classList.add("hide");
                            loading_sh.classList.add("hide");
                            document.getElementById('ldAll_sh').classList.remove('hide');
                        }
                        var resObj = JSON.parse(response);
                    // console.log(resObj[0]['boxId']);
                    // alert(resObj);

                        var boxCover = document.getElementById("border_sh");
                        resObj.forEach(element => {
                            console.log(element);
                            var newBox = document.createElement("div");
                            newBox.className = "box";
                            newBox.innerHTML = '<a href="view.php?SearchResult=' + element['template_name'] + '&id=' + element['boxId'] + '"><div class="img"><img src="' + element['thumbnail_link'] + '" alt=""></div>' + '<div class="tmpName">' + element['template_name'] + '</div></a><button class="videoPrevew" onclick="popUpWind(\'' + element['video_link'] + '\')">view video</button></div>';
                            boxCover.appendChild(newBox);
                        });

                    //  alert(resObj[0]);
                        // Handle the response from the server
                        ldMorBtn_sh.classList.remove("hide");
                        ldMorBtn_sh.classList.add("show");
                        loading_sh.classList.add("hide");
                        loading_sh.classList.remove("show");
                    },
                    error: function(error) {
                        console.log(error);
                        ldMorBtn_sh.classList.remove("hide");
                        ldMorBtn_sh.classList.add("show");
                        loading_sh.classList.add("hide");
                        loading_sh.classList.remove("show");
                        alert(error);
                        // Handle errors
                    }
                });
        })
});


        // =========================== Search box loard more button code end ==============
    </script>
</body>
</html>