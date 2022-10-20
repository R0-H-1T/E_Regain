

 <!-- <input type="hidden" name="varname" value="var_value"> -->

<?php
   session_start();

include '../DBConn/dbconn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $itemName = $_REQUEST['itemName'];
    $brandName = $_REQUEST['brand'];

    switch($itemName){
        case "fridge":

            $condition = $_REQUEST['condition'];
            $storage = $_REQUEST['storage'];
            $door = $_REQUEST['door'];

            include './QuesTemplate/functions.php';


            //upload file 
            $total = count($_FILES['uploadfile']['name']);
            if($total > 3){
                die("<center><h1 style='background-color:red; color:white'>You can upload only 3 images</h1>/center>");
            }
            $imgPaths = "";
            foreach($_FILES['uploadfile']['name'] as $key=>$value){
                $imgPaths .= uploadimage('Fridge', $key);
                $filename = $_FILES['uploadfile']['name'][$key];
            }
            echo $imgPaths;
            $imgarr = removehash($imgPaths);
            $count = 0;
            // $filename = $_FILES["uploadfile"]["name"];
            // uploadImage('Fridge'); 
            
            ?>




            <?php include '../TemplateHTML/boilerplate.html'; ?>
            <title>Product Description</title>
        <?php
            include '../TemplateHTML/Navbar/home.php';   ?>


            <div class="main_container" style="display:flex;">
                <div class="container text-center" style="width:80%;">
                    <div class="row">
                        <div class="col-5" style="background-color:darkgrey;">
                        <!-- carousel -->
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top:20px; margin-bottom:20px;">
                            <div class="carousel-inner">
                                
                            <?php   
    
                                    foreach($imgarr as $path){
                                        if($count == 0){ ?>
                                            <div class="carousel-item active">
                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php }else { ?>
                                            <div class="carousel-item">
                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php }
                                            $count++;
                                    }

                                ?>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                        </div>
                        <div class="col-7" style=" display:flex; justify-content:center; background-color:#f0f0f0;">
                            
                            <!-- displaying details of what user has selected -->
                            <div class="prodDetails" style=" width: 400px; margin-top: 50px;">
                                
                                <h2 class="card-title" style="margin-bottom: 20px;">What you have selected:</h2>
                                        <h5 class="card-text"><?php echo "Brand of fridge: ".$brandName; ?></h5>
                                        <h5 class="card-text"><?php echo "Condition of fridge: ".$condition; ?></h5>
                                        <h5 class="card-text"><?php echo "Storage of fridge: ".$storage; ?></h5>
                                        <h5 class="card-text"><?php echo "No. of doors of fridge: ".$door; ?></h5>
                                        <a href="./SellItem.php?itemName=fridge" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                        <?php
                                            if(isset($_SESSION['logged'])){ 
                                                // $arr = [$brandName,"#" ,$condition, "#", $storage, $door, "./ProductImage/Fridge/$filename"];
                                                ?>
                                                
                                                <form action="newFile.php" method="POST">

                                                    <input type="hidden" name="arr" value='<?php echo "$brandName#$condition#$storage#$door#"?>'>
                                                   
                                                    <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>

                                                    <input type="hidden" name="productCategory" value="fridge" >


                                                    <!-- <button type="submit" class="btn btn-primary">Go ahead?</button> -->
                                                    <div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                      <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                      <label for="floatingTextarea">Pls enter your address:</label>
                                                    </div>
                                                    <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                    <button type="submit" name="donate" class="btn btn-primary">Donate</button>

                                                    <!-- <button type="submit" value="sell" class="btn btn-primary">Sell</button>
                                                    <button type="submit" value="donate" class="btn btn-primary">Donate</button> -->

                                                </form>
                                                <!-- <a href="newfile.php" class="btn btn-primary">Go ahead?</a> -->

                                        <?php } else {?>
                                                 <a href="../LoginRegister/login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>

                                        <?php } ?>  

                                </div>

                            
                        </div>
                    </div>
                </div>
            </div>



            <!-- <center> -->
                <?php 
                // echo "<h1>$itemName</h1>"; 
                //  echo "<h1>$brandName</h1>"; 
                //  echo "<h1>$condition</h1>"; 
                //  echo "<h1>$storage</h1>"; 
                //  echo "<h1>$door</h1>"; 
                 ?>

                <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php echo $filename; ?>" > -->

                <!-- <button class="btn btn-primary">
                  <a href="./SellItem.php?itemName=fridge" style="color: white; text-decoration:none;">
                    Go Back
                  </a>
                </button>

            </center> -->



            <?php 
                include '../TemplateHTML/Footer/footer.html'; 
                cdnPoppinsAndJS();
            ?>
            </body>
        </html>
            <?php break;
        
        case "aircon":
            echo "<h1>$itemName</h1>";
            break;

        default:
            echo "<h1 style='text-center'>None of the cases matched ! :(</h1>";
        }

    //         $condition = $_REQUEST['condition'];
    //         $brand = $_REQUEST['brand'];
    //         $storage = $_REQUEST['storage'];
    //         $door = $_REQUEST['door'];


    //         $filename = $_FILES["uploadfile"]["name"];
    //         $tempname = $_FILES["uploadfile"]["tmp_name"];
    //         $folder = "./ProductImage/Fridge/" . $filename;

    //         move_uploaded_file($tempname, $folder);

    //         echo "<h1>Dispaying the product details:</h1>";
    //         echo "$condition<br>$brand<br>$storage<br>$door<br>";

    //         $mcqArray = array($condition, $brand, $storage, $door);
    //         echo "<b>$mcqArray[1]</b>"
       
    // echo $_POST['condition'];
    // echo $filename;
       ?>
            <!-- <h2>Condition of fridge is: </h2><br>
            <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/"> -->

            <!-- <a href="./SellItem.php?itemName=fridge">Back</a> -->
        <?php
    //         break;
        
    //     case default: "nope no itemname matched with the case";
    
    // }
        ?>
<?php

}else {
    echo "<h1>Invalid request</h1>";
}



//link: http://localhost/rohit/Project/E_Solution/Home/home.html

?>

