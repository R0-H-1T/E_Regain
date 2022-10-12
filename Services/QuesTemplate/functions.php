<?php


function uploadImage($productCat){

    
    
    $target_dir = "ProductImage/$productCat/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    
    $check = getimagesize($_FILES["uploadfile"]["tmp_name"]);
    if($check !== false) {
      //echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
    
    
    // Skipping : Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "Sorry, file already exists.";
    //   $uploadOk = 0; 
    // }
    
    // Check file size
    if ($_FILES["uploadfile"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file)) {
       // echo "The file ". htmlspecialchars( basename( $_FILES["uploadfile"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
}



function removeHash($str){
    $word="";
    $count = 0;
    for($i=0; $i < strlen($str); $i++){
        if($str[$i] == '#' ){
            $arr[$count] = $word;
            $word = "";
            $count++;
        }else{
            $word .= $str[$i];
        }
    }
    return $arr;
}



function adminTemplate(){
  echo '</head>
        </body>
          <div class="box" style="display:flex; justify-content:center;">
            <div class="mainBox" style="width:1400px; background-color: #e8e8e8">
              <div class="adminHeader">
                <center>
                  <h1>Admin Page</h1>
                </center>
              </div>
              <div class="navBox" style="margin-top: 50px;">
                <nav class="navbar navbar-dark bg-dark">
                  <div class="container-fluid">
                    <center>
                      <a class="navbar-brand" href="./allUsers.php">Users</a>
                      <a class="navbar-brand" href="./allProducts.php">Products</a>
                    </center>
                  </div> 
                </nav>
              </div>';
}

// function setStatus($adminResponse){
//   if($adminResponse == "pending"){
//     echo "<b><?php echo $row[]"
//   }
// }




// function concatWithHash($v1, $v2, $v3, $v4="", $v5="", $v6="", $v7="", $v8="", $v9=""){
//     $arr = $v1;
//     while()
// }


// can send product details to newfile but instead of taking value by name attribute 
//  thinking of making an array seperated by hash so that we can trim it in newfile.php 
// using the function at it will be easire to input data in database;


//What all things need to be done
// 1. Collect data and store it in the DB

?>