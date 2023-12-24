<?php
    require_once('inc/connection.php');

    $tmpName = '';
    $views ='';
    $useThisTamplate='';
    $android ='';
    $apstore = '';
    $windows = '';
    $keyWords = '';
    
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM main WHERE id =" .$_GET['id'];
        $result_set = mysqli_query($conn,$sql);
        if($result_set){
           if(mysqli_num_rows($result_set)){
               $row = mysqli_fetch_assoc($result_set);
               $sql = "SELECT views FROM views WHERE thumbnail_id =".$row['thumbnail_id'];
               $result_set = mysqli_query($conn,$sql);
               if($result_set){
                   if(mysqli_num_rows($result_set)){
                       $row2 = mysqli_fetch_assoc($result_set);
                       $keyWords = $row['keywords'];
                       $viewsCount = $row2['views'];
                       $viewsCount = intval($viewsCount);
                       $viewsCount++;
                       $sql = "UPDATE views SET views = " . $viewsCount . " WHERE thumbnail_id = " . $row['thumbnail_id'];
                       $result_set = mysqli_query($conn,$sql);
                       $tmpName = $row['template_name'];
                       $views = $row2['views'];
                       $useThisTamplate= $row['capcut_link'];
                       $android = $row['android'];
                       $apstore = $row['appstore'];
                       $windows = $row['windows'];
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
    <title>ilovetemplate.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contaner">
        <nav>
           <div class="navBar"> 
            <div class="logo">
                I <img src="img/main/hart2.png" alt="hart" width="28px"> <a href="index.html" style="text-decoration: none;">Template.com</a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="index.php" class="navLink-active">Home</a></li>
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
<br><br><br><br>

    <?php 



    ?>
<div class="bannerAdd">
    <div class="theAdd"><p>Responsive ads by Google</p></div>
</div>
        <div class="viiew">
            
            <div class="pannel">
                <div class="mainVideo">
                    <div><iframe src="https://jumpshare.com/embed/VPqLyBu9VV19aFqybqDi" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen width="auto" height="402px"></iframe></div>
             
                </div>
                <div class="mainPannel">
                    <img src="" alt="">
                    <h2><?php echo $tmpName;?></h2>
                    <span class="flexCenter-left" style="font-size: 12px;padding: 5px 0;">
                        <img src="img/main/eye-48.png" alt="downloard iconre" width="20px" height="auto">
                        <?php echo $views;?>
                    </span>
                    <div class="buttonCover">
                    <a href="<?php echo $useThisTamplate;?>" target="_blank"><button id="mnPnlBtn">Use Template on Capcut</button></div></a>
                    <div class="line"></div>
                    <div class="mpbtn flexCenter">
                        <a href="<?php echo $android;?>" target="_blank"><button class="flexCenter mpbtn1"><img src="img/main/android-48.png" width="25px" alt=""> Open App</button></a>
                        <a href="<?php echo $apstore;?>" target="_blank"><button class="flexCenter mpbtn2"><img src="img/main/app-store-48.png" width="25px" alt=""> Open App</button></a>
                        <a href="<?php echo $windows;?>" target="_blank"><button class="flexCenter mpbtn3"><img src="img/main/windows-48.png" width="25px" alt=""> Open App</button></a>
                    </div>
                    <div class="line"></div>

                    <span class="mnLst">
                        <ul>
                            <li><a href="https://www.capcut.com/templates" target="_blank">Capcut use online</a></li>
                            <li><a href="https://apps.apple.com/us/app/capcut-video-editor/id1500855883" target="_blank">Download for Apple</a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=com.lemon.lvoverseas&hl=en&gl=US" target="_blank">Download for Android</a></li>
                            <li><a href="https://www.capcut.com/tools/desktop-video-editor" target="_blank">Downloa d for Windows</a></li>
                        </ul>
                    </span>

                </div>
            </div>
        </div>


        <div class="body">
            
            <div class="body-contaner">
                <div class="boldItem"><p>For You</p></div> 
                               
            <div class="line"></div>
            <div class="videoCenter">

                <div class="border" id="border_view">
                <?php
                    
                    $sql = "SELECT * FROM main WHERE keywords LIKE '%{$keyWords}%' ORDER BY updated_date DESC LIMIT 11";
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
                                        $box .= '</div>';
                                    }
                                }
                            }
                            echo $box;
                        }
                    }
                    ?>  


    
        
                </div>
        </div>
        </div>
        </div>
        <div class="button_box">
            <button class="ldMorBtn" id="ldMorBtn_View">Load more</button> 
            <button class="ldLddBtn hide" id="loading_View"><img src="img/main/loading.gif" width="15px" alt=""></button>
            <a href="searchResult.php?shh=View" target="_blank"><button class="ldAll hide" id="ldAll_View">Load All</button></a>
        </div>




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
    <script>
        
    </script>
    <script src="functions.js"></script>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Lazyload plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script>
            

                    
            // ====================== lazy loard function ===================

            $(function(){
                $('img.lazy').lazyload({
                    effect: "fadeIn"
                });
            });


// loard more button  View.php start-------
// loard more button  View.php start-------
const ldMorBtn_View = document.getElementById('ldMorBtn_View');
const loading_View = document.getElementById('loading_View');
let lodMorViewCont = 7;
let currentDisView = 4;

        
ldMorBtn_View.addEventListener("click",function(){
    ldMorBtn_View.classList.add("hide");
    loading_View.classList.remove("hide");
            $(document).ready(function(){
                currentDisView += 7;
            // alert(currentDisTrnd);
                var postData = {
                    buttonType:'viewPhp',
                    lodMorViewCont: lodMorViewCont,
                    currentDisView: currentDisView
                };
                // Using jQuery Ajax to send data to the PHP file
                $.ajax({
                    type: "POST",
                    url: "loardMore.php", // Change this to the actual path of your PHP file
                    data: postData,
                    success: function(response) {
                        // console.log(response);
                        if(response == 'noMorData'){
                            ldMorBtn_View.classList.add("hide");
                            loading_View.classList.add("hide");
                            document.getElementById('ldAll_View').classList.remove('hide');
                        }
                        var resObj = JSON.parse(response);
                    // console.log(resObj[0]['boxId']);
                    // alert(resObj);

                        var boxCover = document.getElementById("border_view");
                        resObj.forEach(element => {
                            console.log(element);
                            var newBox = document.createElement("div");
                            newBox.className = "box";
                            newBox.innerHTML = '<a href="searchResult.php?id=' + element['boxId'] + '"><div class="img"><img src="' + element['thumbnail_link'] + '" alt=""></div>' + '<div class="tmpName">' + element['template_name'] + '</div></a>';
                            boxCover.appendChild(newBox);
                        });

                    //  alert(resObj[0]);
                        // Handle the response from the server
                        ldMorBtn_View.classList.remove("hide");
                        ldMorBtn_View.classList.add("show");
                        loading_View.classList.add("hide");
                        loading_View.classList.remove("show");
                    },
                    error: function(error) {
                        console.log(error);
                        ldMorBtn_View.classList.remove("hide");
                        ldMorBtn_View.classList.add("show");
                        loading_View.classList.add("hide");
                        loading_View.classList.remove("show");
                        alert(error);
                        // Handle errors
                    }
                });
        })
});
// loard more button  View.php End-------
// loard more button  View.php End-------


</script>
</body>
</html>
