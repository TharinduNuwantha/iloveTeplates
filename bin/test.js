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
                document.getElementById('upThmLd').classList.add('hide');
                if(xhr.responseText.trim() === "File has been uploaded successfully"){
                    console.log(xhr.responseText);
                    console.log('thambanail buploarding sussfully ok');
                    document.getElementById('sussfulMsa').classList.remove('hide');
                    //display priew imafe
                    document.getElementById("priewImg").innerHTML = '<img src="<?php echo $_SESSION[\'thumbnail_link\']?>" width="300px" alt="">';

                }else{
                    console.error('Error uploading file');
                    document.getElementById('reloadPage').classList.remove('hide');
                    document.getElementById('errMsa').classList.remove('hide');
                    console.log(xhr.responseText);
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