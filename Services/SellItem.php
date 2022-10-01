<?php

// international gaming olymoic sthat 
    

// if($_SERVER['REQUEST_METHOD'] == "GET"){

// }

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $itemName = $_GET['itemName'];

    switch($itemName) {
        case "fridge":
            include '../TemplateHTML/boilerplate.html';
            include '../TemplateHTML/Navbar/home.html';
            ?>
            <div class="container1" style=" background-color: teal;">

              <div class="mainContainer" style="background-color: grey; display:flex; justify-content:center;">
                <div class="headerContainer"> </div>

                <div class="bodyContainer" style="background-color: aliceblue; height:800px; width:1300px">

                  <div class="container ">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: #d4d4d4; height:800px;">
                            <h2 style="text-align:center"> Fridge </h2>
                            <center>
                              <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="../Images/fridgeApp.jpeg" alt="" srcset="" >
                              <div class="promiseText" style="width:450px; height: 100px; margin-top: 20px; background-color: white; border-radius: 20px; display:flex; flex-direction: row;">
                                <img class="promiseImg" style="height:100px; width:120px;" src="../Images/promise.jpg" alt="">
                                <p>
                                  Accurately describe your device and we promise the quoted value and a smooth, streamlined transaction. No bull. That's a promise.
                                </p>                             
                              </div>
                            </center>
                        </div>

                        <div class="col-7" id="big" style="background-color: #ebebeb;  height:800px;">
                            <form action="" enctype="multipart/form-data">
                                <h1 style="text-align:center">Enter the details</h1>



                                <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label" id="condition">Select the condition of the bridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                        <option value="">New</option>
                                        <option value="">Good</option>
                                        <option value="">Fair</option>
                                        <option value="">Broken</option>
                                      </select>
                                </div>


                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="">
                                        <option selected>Select brand</option>
                                        <option value="1">Whirpool</option>
                                        <option value="2">LG</option>
                                        <option value="3">Samsung</option>
                                        <option value="3">Haier</option>
                                        <option value="3">Godrej</option>
                                        <option value="3">Videocon</option>
                                        <option value="3">Kenstar</option>
                                        <option value="3">Sansui</option>
                                        <option value="3">Voltas</option>
                                        <option value="3">Lloyd</option>
                                        <option value="3">Sharp</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Is your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="door" id="door">
                                        <option value="">Double Door</option>
                                        <option value="">Single Door</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Select the storage of your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="door" id="door">
                                        <option value="">100 ltrs</option>
                                        <option value="">200 - 300ltrs</option>
                                        <option value="">300 - ltrs</option>
                                        <option value="">400 - 500ltrs</option>
                                        <option value="">Above 500ltrs</option>
                                      </select>
                                </div>




                                <div>
                                  <center>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </center>
                                </div>
                            </form>
                        </div>
                  </div>
                </div>
              </div>
              <a href="./SellDonate.php">Back</a>
            </div>
              <?php include '../TemplateHTML/Footer/footer.html'; ?>
            </body>
            </html>
            <?php
            break;

        case "aircon":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;

        case "geyser":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "laptop":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "television":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "mobile":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "desktop":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "printer":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "xbox":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "radio":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "headphone":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "charger":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "cddvd":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "hardisk":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;
        case "other":
            include '../TemplateHTML/include.html';
            ?>
             <div class="container1" style="
            background-color: teal;
            display:flex;
            justify-content:center;">

            <div class="mainContainer" style="background-color: aliceblue; height:800px; width:1300px">
                <div class="headerContainer">
                    
                </div>

                <div class="bodyContainer">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                          1 of 2
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                          2 of 2
                        </div>
                      </div>
                </div>
            </div>
            <a href="SellDonate.html">Back</a>
            </div>
            </body>
            </html>
            <?php
            break;

            default:
                echo "<h1 style='text-center'>None of the cases matched ! :(</h1>";
            
             

        //echo "<h1> Works but what next ? </h1>";
        
        
        // }else if($itemName == "aircon"){
            //     include '../TemplateHTML/include.html';         
        
    }        

}else{
    echo "<h1> Yea there are some problems</h1>";
}

?>