<?php 
    require_once('inc/connection.php');
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
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

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
                    <form id="sharchForm" action="searchResult.php"></form>
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

        <div class="bannerArea">
            <div class="bannerContent">
                <div class="banImags">
                                    </div>
                <h2>The #1 CapCut Template Collection</h2>
            </div>
        </div>

        <!-- ============== GOOGLE ADDVATESMENT BAR ===============-->
        <!-- ============== GOOGLE ADDVATESMENT BAR ===============-->
        <div class="addlayer">
            <div class="add"><p>Responsive ads by Google</p></div>
        </div>
        <!-- ============== GOOGLE ADDVATESMENT BAR END ===============-->
        <!-- ============== GOOGLE ADDVATESMENT BAR END===============-->


        <!-- =============================== TOP 10 Set Start ==================================== -->
        <!-- =============================== TOP 10 Set Start ==================================== -->

        <div class="body">
            <div class="body-contaner">
                <div class="statusBar">
                    <div class="bollCover">
                        <a href="searchResult.php?category=Travel"  target="_blank">
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/traveling.png" class="ball1" alt="">
                        </div>
                        <p>Travel</p>
                        </div>
                        </a>

                        
                        <a href="searchResult.php?category=Better Life"  target="_blank">
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/beterLife.png" class="betterLife" alt="">
                        </div>
                        <p>Better Life</p>
                        </div>
                        </a>

                        <a href="searchResult.php?category=Wedding"  target="_blank">        
                         <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/vedding.png" class="ultraRelax" alt="">
                        </div>
                        <p>Wedding</p>
                        </div> 
                         </a>


                        <a href="searchResult.php?category=Photo Collage"  target="_blank">
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/photoClg.png" class="photocollage" alt="">
                        </div>
                        <p>Photo Collage</p>
                        </div>
                        </a>

                        <a href="searchResult.php?category=Add Text"  target="_blank">
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/yourText.png" class="ultraRelax" alt="">
                        </div>
                        <p>Add Text</p>
                        </div>
                        </a>


                        <a href="searchResult.php?category=Toon me"  target="_blank">            
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/toon.png" class="ultraRelax" alt="">
                        </div>
                        <p>Toon me</p>
                        </div>
                        </a>

                        <a href="searchResult.php?category=Love you"  target="_blank">        
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/lovelove.png" class="ultraRelax" alt="">
                        </div>
                        <p>Love you</p>
                        </div>   
                        </a>

                        <a href="searchResult.php?category=Beauty"   target="_blank">
                         <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/buty1.png" class="ultraRelax" alt="">
                        </div>
                        <p>Beauty</p>
                        </div> 
                         </a>

                         <a href="searchResult.php?category=Posh"  target="_blank">
                       <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/poshgirl.png" class="ultraRelax" alt="">
                        </div>
                        <p>Posh</p>
                        </div> 
                         </a>

                         <a href="searchResult.php?category=Black and white" class="MobCatLoard" target="_blank">
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/blackAndWhite.png" class="ultraRelax" alt="">
                        </div>
                        <p>Black and white</p>
                        </div>    
                         </a>  

                         <a href="searchResult.php?category=Blur" class="MobCatLoard" target="_blank">
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/nocloth.png" class="ultraRelax" alt="">
                        </div>
                        <p>Blur</p>
                        </div>
                        </a>

                        <a href="searchResult.php?category=Ultra Relax"  class="MobCatLoard" target="_blank">        
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/ultraRelaxx.png" class="ultraRelax" alt="">
                        </div>
                        <p>Ultra Relax</p>
                        </div>
                        </a>

                         <a href="searchResult.php?category=Vehicle lovers"  class="MobCatLoard" target="_blank">
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/vehicle.png" class="ultraRelax" alt="">
                        </div>
                        <p>Vehicle lovers</p>
                        </div> 
                         </a>

                         <a href="searchResult.php?category=Super dancer"  class="MobCatLoard" target="_blank">
                          <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/supperDancer.png" class="ultraRelax" alt="">
                        </div>
                        <p>Super dancer</p>
                        </div> 
                         </a>



                         <a href="searchResult.php?category=Movie"  class="MobCatLoard" target="_blank">
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/MoveGirl.png" class="ultraRelax" alt="">
                        </div>
                        <p>Movie</p>
                        </div> 
                         </a>
                         


                         <a href="searchResult.php?category=Chill"  class="MobCatLoard" target="_blank">
                        <div class="ststusBox">
                        <div class="ball">
                            <img src="img/main/chill1.jpg" class="chill" alt="">
                        </div>
                        <p>Chill</p>
                        </div>
                        </a>

                    </div>
                </div>
                <div class="loardMorCat"><button id="lsMorCat">Lord more</button>
                     <button id="lsMorCat_anime" class="hide"><img src="img/main/loading.gif" width="15px" alt=""></button>
                     <button id="lsMorCat_hide" class="lsMorCat_hide hide">Hide</button>
                </div>
                
            </div>
        </div>

        <div class="body">
            
            <div class="body-contaner">
                <div class="boldItem"><p>Top</p></div> 
                               
            <div class="line"></div>
            <div class="videoCenter">

                <div class="border" id="border_top">
                <?php
                    $sql = "SELECT * FROM main WHERE type = 'fixed' ORDER BY updated_date DESC LIMIT 11";
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

                <!-- Vlog -->

<!--         
                    <div class="box">
                        <div class="img"><img src="img/uploads/thm1.jpg" alt=""></div>
                        <div class="tmpName">capcut template new  download</div>
                       
                    </div> -->
                    <a href="#">
                    <div class="box">
                        <div class="img"><img src="img/uploads/more.png" alt=""></div>
                        <div class="tmpName">capcut template new trend tiktok download</div>
                       
                    </div>
                    </a>
        
                </div>
        </div>
        </div>
        </div>
        <div class="button_box">
            <button class="ldMorBtn" id="ldMorBtn_top">Load more</button> 
            <button class="ldLddBtn hide" id="loading_top"><img src="img/main/loading.gif" width="15px" alt=""></button>
            <a href="searchResult.php?shh=top" target="_blank"><button class="ldAll hide" id="ldAll_top">Load All</button></a>
        </div>

        <!-- =============================== TOP 10 Set END ==================================== -->
        <!-- =============================== TOP 10 Set END ==================================== -->




        <div class="body">
            
            <div class="body-contaner">
                <div class="boldItem"><p>Trending</p></div> 
                               
            <div class="line"></div>
            <div class="videoCenter">

                <div class="border" id="border">
                <?php
                    $sql = "SELECT * FROM main WHERE type = 'Trending' ORDER BY updated_date DESC LIMIT 11";
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

                <!-- Vlog -->

<!--         
                    <div class="box">
                        <div class="img"><img src="img/uploads/thm1.jpg" alt=""></div>
                        <div class="tmpName">capcut template new  download</div>
                       
                    </div> -->
                    <a href="#">
                    <div class="box">
                        <div class="img"><img src="img/uploads/more.png" alt=""></div>
                        <div class="tmpName">capcut template new trend tiktok download</div>
                       
                    </div>
                    </a>
        
                </div>
        </div>
        </div>
        </div>
        <div class="button_box">
            <button class="ldMorBtn" id="ldMorBtn_trnd">Load more</button> 
            <button class="ldLddBtn hide" id="ldLddBtn"><img src="img/main/loading.gif" width="15px" alt=""></button>
            <a href="searchResult.php?shh=trending"  target="_blank"><button class="ldAll hide" id="ldAll">Load All</button></a>
        </div>

                <!-- ============== GOOGLE ADDVATESMENT BAR ===============-->
        <!-- ============== GOOGLE ADDVATESMENT BAR ===============-->
        <div class="addlayer">
            <div class="add"><p>Responsive ads by Google</p></div>
        </div>
        <!-- ============== GOOGLE ADDVATESMENT BAR END ===============-->
        <!-- ============== GOOGLE ADDVATESMENT BAR END===============-->
        

        <!-- ===================== VIDEO SECOND ================ -->
        <!-- ===================== VIDEO SECOND ================ -->






        <div class="body">
            
            <div class="body-contaner">
                <div class="boldItem"><p>Vlog</p></div> 
                               
            <div class="line"></div>
            <div class="videoCenter">

                <div class="border" id="border_vlg">
                <?php
                    $sql = "SELECT * FROM main WHERE type = 'Vlog' ORDER BY updated_date DESC LIMIT 11";
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

                <!-- Vlog -->

<!--         
                    <div class="box">
                        <div class="img"><img src="img/uploads/thm1.jpg" alt=""></div>
                        <div class="tmpName">capcut template new  download</div>
                       
                    </div> -->
                    <a href="#">
                    <div class="box">
                        <div class="img"><img src="img/uploads/more.png" alt=""></div>
                        <div class="tmpName">capcut template new trend tiktok download</div>
                       
                    </div>
                    </a>
        
                </div>
        </div>
        </div>
        </div>
        <div class="button_box">
            <button class="ldMorBtn" id="ldMorBtn_vlg">Load more</button> 
            <button class="ldLddBtn hide" id="loading_vlg"><img src="img/main/loading.gif" width="15px" alt=""></button>
            <a href="searchResult.php?shh=Vlog" target="_blank"><button class="ldAll hide" id="ldAll_vlg">Load All</button></a>
        </div>


        <!-- ===================== VIDEO SECOND ================ -->
        <!-- ===================== VIDEO SECOND ================ -->



        <!-- Photo Collaps -->



        <!-- =================== video Tree =================== -->
        <!-- =================== video Tree =================== -->

        <div class="body">
            
            <div class="body-contaner">
                <div class="boldItem"><p>Photo Collaps</p></div> 
                               
            <div class="line"></div>
            <div class="videoCenter">

                <div class="border" id="border_pc">
                <?php
                    $sql = "SELECT * FROM main WHERE type = 'Photo Collaps' ORDER BY updated_date DESC LIMIT 11";
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

                <!-- Vlog -->

<!--         
                    <div class="box">
                        <div class="img"><img src="img/uploads/thm1.jpg" alt=""></div>
                        <div class="tmpName">capcut template new  download</div>
                       
                    </div> -->
                    <a href="#">
                    <div class="box">
                        <div class="img"><img src="img/uploads/more.png" alt=""></div>
                        <div class="tmpName">capcut template new trend tiktok download</div>
                       
                    </div>
                    </a>
    
                </div>
        </div>
        </div>
        </div>
        <div class="button_box">
            <button class="ldMorBtn" id="ldMorBtn_pc">Load more</button> 
            <button class="ldLddBtn hide" id="loading_pc"><img src="img/main/loading.gif" width="15px" alt=""></button>
            <a href="searchResult.php?shh=Photo_Collaps" target="_blank"><button class="ldAll hide" id="ldAll_pc">Load All</button></a>
        </div>
                    
        <!-- =================== video Tree END =================== -->
        <!-- =================== video Tree END =================== -->
<br><br>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="functions.js"></script>
    <script>
            

                    
                    // ====================== lazy loard function ===================

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

                    const loardMorCat_mobile = document.getElementById('lsMorCat');
                    const lsMorCat_anime = document.getElementById('lsMorCat_anime');
                    const lsMorCat_hide =document.getElementById('lsMorCat_hide');
                    loardMorCat_mobile.addEventListener("click",function(){
                        loardMorCat_mobile.classList.add("hide");
                        lsMorCat_anime.classList.remove("hide");
                        setTimeout(function(){
                            lsMorCat_anime.classList.add("hide");   
                            lsMorCat_hide.classList.remove("hide");     

                            var elements = document.querySelectorAll('.MobCatLoard');

                            elements.forEach(function(element) {
                                element.style.display = 'block';
                            });
                        },2000);

                        
                    }); 
                
                    lsMorCat_hide.addEventListener("click",function(){
                        var elements = document.querySelectorAll('.MobCatLoard');
                        elements.forEach(function(element) {
                                element.style.display = 'none';
                                window.scrollTo({
                                    top: 0,
                                    behavior: 'smooth' // Use 'auto' for instant scrolling
                                });
                                lsMorCat_hide.classList.add("hide");   
                                loardMorCat_mobile.classList.remove("hide") 
                            });
                    });
                    // ====================== lazy loard function ===================

            const triger = document.getElementById("searchBox");

            // user autofocus  input box
            triger.addEventListener("blur",function(){
                const ul =document.getElementById("shList");
              //  ul.innerHTML = '';
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
                                
                            document.getElementById("searchRsPross").addEventListener("click",function(){
                                alert(888);
                               });
                            }else{
                                console.error('Error uploading file');
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
            });

        //sharchForm
    </script>
</body>
</html>
