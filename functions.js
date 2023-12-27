function navBar(){
    const bars = document.getElementById('bars');
    const mobileNav = document.getElementById('mobileNav');

    let num = true;
    bars.addEventListener("click",function(){
        if(num === true){
            mobileNav.style.right = '0';
            num = false;
        }else{
            mobileNav.style.right = '200%';
            num = true;
        }
    });


}
navBar();

function coppyrightY(){
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear();
    document.getElementById('cpyright').innerHTML = "&copy; "+currentYear+" All rights reserved";
}
coppyrightY();

//thambail uploard button show



function selectThm() {
    const thUploadBtn = document.getElementById("upThm");

    thUploadBtn.classList.remove("hide");
    thUploadBtn.classList.add("show");
    //thLoadBtn.classList.add("show");
}

// loard more button trending button start-----
// loard more button trending button start-----

const ldMorBtn_trnd = document.getElementById('ldMorBtn_trnd');
const loading_trnd = document.getElementById('ldLddBtn');
let lodMorTrendCont = 7;
let currentDisTrnd = 4  ;
ldMorBtn_trnd.addEventListener("click", function () {
    ldMorBtn_trnd.classList.add("hide");
    loading_trnd.classList.remove("hide");
    $(document).ready(function(){
        currentDisTrnd += 7;
       // alert(currentDisTrnd);
        var postData = {
            buttonType:'Trending',
            lodMorTrendCont: lodMorTrendCont,
            currentDisTrnd: currentDisTrnd
        };
        // Using jQuery Ajax to send data to the PHP file
        $.ajax({
            type: "POST",
            url: "loardMore.php", // Change this to the actual path of your PHP file
            data: postData,
            success: function(response) {
                // console.log(response);
                if(response == 'noMorData'){
                    ldMorBtn_trnd.classList.add("hide");
                    loading_trnd.classList.add("hide");
                    document.getElementById('ldAll').classList.remove('hide');
                }
                var resObj = JSON.parse(response);
               // console.log(resObj[0]['boxId']);
               // alert(resObj);

                var sevBox = "";
                var boxCover = document.getElementById("border");
                resObj.forEach(element => {
                    console.log(element);
                    var newBox = document.createElement("div");
                    newBox.className = "box";
                    newBox.innerHTML = '<a href="searchResult.php?id=' + element['boxId'] + '"><div class="img"><img src="' + element['thumbnail_link'] + '" alt=""></div>' + '<div class="tmpName">' + element['template_name'] + '</div></a><button class="videoPrevew" onclick="popUpWind(\'' + element['video_link'] + '\')">view video</button></div>';
                    boxCover.appendChild(newBox);
                });

             //  alert(resObj[0]);
                // Handle the response from the server
                ldMorBtn_trnd.classList.remove("hide");
                ldMorBtn_trnd.classList.add("show");
                loading_trnd.classList.add("hide");
                loading_trnd.classList.remove("show");
            },
            error: function(error) {
                console.log(error);
                ldMorBtn_trnd.classList.remove("hide");
                ldMorBtn_trnd.classList.add("show");
                loading_trnd.classList.add("hide");
                loading_trnd.classList.remove("show");
                alert(error);
                // Handle errors
            }
        });
})

});



// loard more button trending button End-----
// loard more button trending button End-----

//============================================================


// loard more button Vlog button Start-----
// loard more button Vlog button Start-----
const ldMorBtn_vlg = document.getElementById('ldMorBtn_vlg');
const loading_vlg = document.getElementById('loading_vlg');
let lodMorVlgCont = 7;
let currentDisVlg = 4;

        
ldMorBtn_vlg.addEventListener("click",function(){
        ldMorBtn_vlg.classList.add("hide");
        loading_vlg.classList.remove("hide");
            $(document).ready(function(){
                currentDisVlg += 7;
            // alert(currentDisTrnd);
                var postData = {
                    buttonType:'Vlog',
                    lodMorVlgCont: lodMorVlgCont,
                    currentDisVlg: currentDisVlg
                };
                // Using jQuery Ajax to send data to the PHP file
                $.ajax({
                    type: "POST",
                    url: "loardMore.php", // Change this to the actual path of your PHP file
                    data: postData,
                    success: function(response) {
                        // console.log(response);
                        if(response == 'noMorData'){
                            ldMorBtn_vlg.classList.add("hide");
                            loading_vlg.classList.add("hide");
                            document.getElementById('ldAll_vlg').classList.remove('hide');
                        }
                        var resObj = JSON.parse(response);
                    // console.log(resObj[0]['boxId']);
                    // alert(resObj);

                        var boxCover = document.getElementById("border_vlg");
                        resObj.forEach(element => {
                            console.log(element);
                            var newBox = document.createElement("div");
                            newBox.className = "box";
                            newBox.innerHTML = '<a href="searchResult.php?id=' + element['boxId'] + '"><div class="img"><img src="' + element['thumbnail_link'] + '" alt=""></div>' + '<div class="tmpName">' + element['template_name'] + '</div></a><button class="videoPrevew" onclick="popUpWind(\'' + element['video_link'] + '\')">view video</button></div>';
                            boxCover.appendChild(newBox);
                        });

                    //  alert(resObj[0]);
                        // Handle the response from the server
                        ldMorBtn_vlg.classList.remove("hide");
                        ldMorBtn_vlg.classList.add("show");
                        loading_vlg.classList.add("hide");
                        loading_vlg.classList.remove("show");
                    },
                    error: function(error) {
                        console.log(error);
                        ldMorBtn_vlg.classList.remove("hide");
                        ldMorBtn_vlg.classList.add("show");
                        loading_vlg.classList.add("hide");
                        loading_vlg.classList.remove("show");
                        alert(error);
                        // Handle errors
                    }
                });
        })
});

// loard more button Vlog button End-----
// loard more button Vlog button End-----


//========================================================================================


// loard more button Vlog button Start-----
// loard more button Vlog button Start-----

const ldMorBtn_pc = document.getElementById('ldMorBtn_pc');
const loading_pc = document.getElementById('loading_pc');
let lodMorPcCont = 7;
let currentDisPc = 4;

        
ldMorBtn_pc.addEventListener("click",function(){
    ldMorBtn_pc.classList.add("hide");
    loading_pc.classList.remove("hide");
            $(document).ready(function(){
                currentDisPc += 7;
            // alert(currentDisTrnd);
                var postData = {
                    buttonType:'Phot_Collaps',
                    lodMorPcCont: lodMorPcCont,
                    currentDisPc: currentDisPc
                };
                // Using jQuery Ajax to send data to the PHP file
                $.ajax({
                    type: "POST",
                    url: "loardMore.php", // Change this to the actual path of your PHP file
                    data: postData,
                    success: function(response) {
                        // console.log(response);
                        if(response == 'noMorData'){
                            ldMorBtn_pc.classList.add("hide");
                            loading_pc.classList.add("hide");
                            document.getElementById('ldAll_pc').classList.remove('hide');
                        }
                        var resObj = JSON.parse(response);
                    // console.log(resObj[0]['boxId']);
                    // alert(resObj);

                        var boxCover = document.getElementById("border_pc");
                        resObj.forEach(element => {
                            console.log(element);
                            var newBox = document.createElement("div");
                            newBox.className = "box";
                            newBox.innerHTML = '<a href="searchResult.php?id=' + element['boxId'] + '"><div class="img"><img src="' + element['thumbnail_link'] + '" alt=""></div>' + '<div class="tmpName">' + element['template_name'] + '</div></a>';
                            boxCover.appendChild(newBox);
                        });

                    //  alert(resObj[0]);
                        // Handle the response from the server
                        ldMorBtn_pc.classList.remove("hide");
                        ldMorBtn_pc.classList.add("show");
                        loading_pc.classList.add("hide");
                        loading_pc.classList.remove("show");
                    },
                    error: function(error) {
                        console.log(error);
                        ldMorBtn_pc.classList.remove("hide");
                        ldMorBtn_pc.classList.add("show");
                        loading_pc.classList.add("hide");
                        loading_pc.classList.remove("show");
                        alert(error);
                        // Handle errors
                    }
                });
        })
});


// loard more button Vlog button End-------
// loard more button Vlog button End-------

// ==================================================================

// loard more button Vlog button Start-------
// loard more button Vlog button Start-------

const ldMorBtn_top = document.getElementById('ldMorBtn_top');
const loading_top = document.getElementById('loading_top');
let lodMorTopCont = 7;
let currentDisTop = 4;

        
ldMorBtn_top.addEventListener("click",function(){
    ldMorBtn_top.classList.add("hide");
    loading_top.classList.remove("hide");
            $(document).ready(function(){
                currentDisTop += 7;
            // alert(currentDisTrnd);
                var postData = {
                    buttonType:'top',
                    lodMorTopCont: lodMorTopCont,
                    currentDisTop: currentDisTop
                };
                // Using jQuery Ajax to send data to the PHP file
                $.ajax({
                    type: "POST",
                    url: "loardMore.php", // Change this to the actual path of your PHP file
                    data: postData,
                    success: function(response) {
                        // console.log(response);
                        if(response == 'noMorData'){
                            ldMorBtn_top.classList.add("hide");
                            loading_top.classList.add("hide");
                            document.getElementById('ldAll_top').classList.remove('hide');
                        }
                        var resObj = JSON.parse(response);
                    // console.log(resObj[0]['boxId']);
                    // alert(resObj);

                        var boxCover = document.getElementById("border_top");
                        resObj.forEach(element => {
                            console.log(element);
                            var newBox = document.createElement("div");
                            newBox.className = "box";
                            newBox.innerHTML = '<a href="searchResult.php?id=' + element['boxId'] + '"><div class="img"><img src="' + element['thumbnail_link'] + '" alt=""></div>' + '<div class="tmpName">' + element['template_name'] + '</div></a><button class="videoPrevew" onclick="popUpWind(\'' + element['video_link'] + '\')">view video</button></div>';
                            boxCover.appendChild(newBox);
                        });

                    //  alert(resObj[0]);
                        // Handle the response from the server
                        ldMorBtn_top.classList.remove("hide");
                        ldMorBtn_top.classList.add("show");
                        loading_top.classList.add("hide");
                        loading_top.classList.remove("show");
                    },
                    error: function(error) {
                        console.log(error);
                        ldMorBtn_top.classList.remove("hide");
                        ldMorBtn_top.classList.add("show");
                        loading_top.classList.add("hide");
                        loading_top.classList.remove("show");
                        alert(error);
                        // Handle errors
                    }
                });
        })
});


// loard more button Vlog button End-------
// loard more button Vlog button End-------

// ============================================================
// ============================================================
// ============================================================


// ==========================================================
// ==========================================================
// ==========================================================

// -------------------------- popup box video Start -------------------
// -------------------------- popup box video Start -------------------



function popUpWind(event){
    const popup = document.querySelector(".popup");
    popup.classList.remove("hide");    
    const section = document.querySelector("section"),
    overlay = document.querySelector(".overlay"),
    showBtn = document.querySelector(".show-modal"),
    closeBtn = document.querySelector(".close-btn");
    const modal_box = document.querySelector(".modal-box");
    const loadingBvid = document.querySelector(".loadingBvid");
    const videoBox = document.querySelector(".videoBox");
    var boxElement = document.querySelector('.modal-box');
    var distanceToTop = Math.round(boxElement.getBoundingClientRect().top + window.scrollY);
    if(distanceToTop > 1800){
            // alert('Distance from box to window top: ' + distanceToTop + ' pixels');
            // modal_box.style.position = "fixed";
            // modal_box.style.top = "40%";
    }
    // alert('Distance from box to window top: ' + distanceToTop + ' pixels');
    console.log('Distance from box to window top: ' + distanceToTop + ' pixels');
    section.classList.add("active");




    setTimeout(function(){

        loadingBvid.style.display = 'none';
        document.querySelector(".videoBox").classList.remove("hide");
        setTimeout(function(){  
            document.querySelector(".videoBox").style.animation = "none";
        },2000)
        videoBox.innerHTML = '<iframe src="'+event+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen width="100%" height="402px"></iframe>';
    },1000);

    overlay.addEventListener("click", () =>
    section.classList.remove("active")
    );


    closeBtn.addEventListener("click", function(){
      
        section.classList.remove("active");
        videoBox.innerHTML = '';
        loadingBvid.classList.remove = 'hide';
        document.querySelector(".videoBox").style.animation = "";
        // document.querySelector(".videoBox").classList.add("hide");
        // loadingBvid.innerHTML = '';  
        const popup = document.querySelector(".popup");
        popup.classList.add('hide');
    });

}



// showBtn.addEventListener("click", () => section.classList.add("active"));

// overlay.addEventListener("click", () =>
// section.classList.remove("active")
// );

// closeBtn.addEventListener("click", () =>
// section.classList.remove("active")
// );
// -------------------------- popup box video End-------------------
// -------------------------- popup box video End-------------------

// =======================================================================
// =======================================================================