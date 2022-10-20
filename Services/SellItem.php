<?php
    session_start();

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $itemName = $_GET['itemName'];

    switch($itemName) {
        case "fridge":
            include '../TemplateHTML/boilerplate.html';
            

            include '../TemplateHTML/Navbar/home.php';
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
                                <img class="promiseImg" style="height:100px; width:120px; border-radius:20px; margin-left:10px;" src="../Images/promise.jpg" alt="">
                                <p style="margin-top:10px;">                                  
                                    Accurately describe your device and we promise the quoted value and a smooth, streamlined transaction. No bull. That's a promise.
                                </p>                             
                              </div>
                            </center>
                        </div>

                        <div class="col-7" id="big" style="background-color: #ebebeb;  height:800px;">
                            <form action="inputDB.php" enctype="multipart/form-data" method="POST">

                                <h1 style="text-align:center">Enter the details</h1>

                                <input type="hidden" name="itemName" value="fridge">

                                <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label" id="condition">Select the condition of the bridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Broken">Broken</option>
                                      </select>
                                </div>


                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="brand">
                                        <!-- <option>Select brand</option> -->
                                        <option selected value="Whirpool">Whirpool</option>
                                        <option value="LG">LG</option>
                                        <option value="Samsung">Samsung</option>
                                        <option value="Haier">Haier</option>
                                        <option value="Godrej">Godrej</option>
                                        <option value=Videocon">Videocon</option>
                                        <option value="Kenstar">Kenstar</option>
                                        <option value="Sansui">Sansui</option>
                                        <option value="Voltas">Voltas</option>
                                        <option value="Lloyd">Lloyd</option>
                                        <option value="Sharp">Sharp</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="door" class="form-label">Is your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="door" id="door">
                                        <option value="Double Door">Double Door</option>
                                        <option value="Single Door">Single Door</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="storage" class="form-label">Select the storage of your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="storage" id="storage">
                                        <option value="100 ltrs">100 ltrs</option>
                                        <option value="200 - 300ltrs">200 - 300ltrs</option>
                                        <option value="300 - 400ltrs">300 - ltrs</option>
                                        <option value="400 - 500ltrs">400 - 500ltrs</option>
                                        <option value="Above 500ltrs">Above 500ltrs</option>
                                      </select>
                                </div>

                                <!-- upload file  -->
                                <div class="mb-3">
                                  <div class="form-group">
                                    <label for="fileInput">Upload a picture of your fridge: </label>
                                    <input class="form-control" id="fileInput" type="file" name="uploadfile[]" value="" multiple required  />
                                  </div>
                                </div>

                                <div>
                                  <center>
                                    <button type="submit" class="btn btn-primary">Next</button>
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
          
            include '../TemplateHTML/boilerplate.html';
            include '../TemplateHTML/Navbar/home.html';

            include './QuesTemplate/upperBody.html'; ?>
            <h2 style="text-align:center"> AC </h2>
                  <center>
                    <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="../Images/airCon.jpeg" alt="" srcset="" >

            <?php include './QuesTemplate/midBody.html'; ?>

                                <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label" id="condition">
                                        Select the condition of your AC:
                                      </label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Average</option>
                                        <option value="Below Average">Below Average</option>
                                      </select>
                                </div>


                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="brand">
                                        <option selected>Select brand</option>
                                
                                        
                                        <option value="Samsung">Samsung</option>
                                        <option value="Haier">Haier</option>
                                        <option value="Godrej">Godrej</option>
                                        <option value=Videocon">Videocon</option>
                                        <option value="Carrier Global">Carrier Global</option>
                                        <option value="Hitachi">Hitachi</option>
                                        <option value="Voltas">Voltas</option>
                                        <option value="Lloyd">Lloyd</option>
                                        <option value="Daikin">Daikin</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="model" class="form-label">Is your AC:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="model" id="model">
                                        <option value="Split AC">Split AC</option>
                                        <option value="Window AC">Window AC</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="capacity" class="form-label">Select the capacity of your AC:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="capacity" id="capacity">
                                        <option value="1 ton">100 ltrs</option>
                                        <option value="1.1 ton">1.1 ton</option>
                                        <option value="1.5 ton">1.5 ton</option>
                                        <option value="2 ton">2 ton</option>
                                        <option value="Other">Other</option>
                                      </select>
                                </div>

                                <input type="hidden" name="itemName" value="aircon">
                                <!-- upload file  -->
                                <div class="mb-3">
                                  <div class="form-group">
                                    <label for="fileInput">Upload a picture of your ac: </label>
                                    <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" required />
                                  </div>
                                </div>
            <?php

                include './QuesTemplate/lowerBody.php';
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
          include '../TemplateHTML/boilerplate.html';
          include '../TemplateHTML/Navbar/home.html';

          include './QuesTemplate/upperBody.html'; ?>
           <h2 style="text-align:center"> Mobile </h2>
                  <center>
                    <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="../Images/Page 6.jpeg" alt="" srcset="" >

          <?php include './QuesTemplate/midBody.html'; ?>

          <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label" id="damage">
                                        Does your phone have dents and scratches:
                                      </label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Average</option>
                                        <option value="Below Average">Below Average</option>
                                      </select>
                                </div>


                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your mobile:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="brand">
                                        <option selected>select brand</option>
                                
                                        
                                        <option value="Samsung">Samsung</option>
                                        <option value="Motorola">Motorola</option>
                                        <option value="MI">MI</option>
                                        <option value=LG">LG</option>
                                        <option value="One Plus">One Plus</option>
                                        <option value="Sony">Sony</option>
                                        <option value="Blackberry">Blackberry</option>
                                        <option value="Oppo">Oppo</option>
                                        <option value="Vivo">Vivo</option>
                                        <option value="Apple">Apple</option>
                                        <option value="Huawei">Huawei</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="func" class="form-label">Is your mobile fully  functional:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="mobFunc" id="func">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="capacity" class="form-label">Select the storage of your mobile:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="phnStorage" id="capacity">
                                        <option value="4GB RAM 32GB ROM">4GB RAM 32GB ROM</option>
                                        <option value="4GB RAM 64GB ROM">4GB RAM 64GB ROM</option>
                                        <option value="6GB RAM 128GB ROM">6GB RAM 128GB ROM</option>
                                        <option value="8GB RAM 128GB ROM">8GB RAM 128GB ROM</option>
                                        <option value="Other">Other</option>
                                      </select>
                                </div>

                                <!-- upload file  -->
                                <div class="mb-3">
                                  <div class="form-group">
                                    <label for="fileInput">Upload a picture of mobile : </label>
                                    <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                  </div>
                                </div>
            <?php

                include './QuesTemplate/lowerBody.php';
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
          include '../TemplateHTML/boilerplate.html';
          include '../TemplateHTML/Navbar/home.html';

          include './QuesTemplate/upperBody.html'; ?>
           <h2 style="text-align:center"> Printer </h2>
                  <center>
                    <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="../Images/Page 6.jpeg" alt="" srcset="" >

          <?php include './QuesTemplate/midBody.html'; ?>

          <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label" id="damage">
                                        Does your phone have dents and scratches:
                                      </label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Average</option>
                                        <option value="Below Average">Below Average</option>
                                      </select>
                                </div>


                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your mobile:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="brand">
                                        <option selected>select brand</option>
                                
                                        
                                        <option value="Samsung">Samsung</option>
                                        <option value="Motorola">Motorola</option>
                                        <option value="MI">MI</option>
                                        <option value=LG">LG</option>
                                        <option value="One Plus">One Plus</option>
                                        <option value="Sony">Sony</option>
                                        <option value="Blackberry">Blackberry</option>
                                        <option value="Oppo">Oppo</option>
                                        <option value="Vivo">Vivo</option>
                                        <option value="Apple">Apple</option>
                                        <option value="Huawei">Huawei</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="func" class="form-label">Is your mobile fully  functional:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="mobFunc" id="func">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="capacity" class="form-label">Select the storage of your mobile:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="phnStorage" id="capacity">
                                        <option value="4GB RAM 32GB ROM">4GB RAM 32GB ROM</option>
                                        <option value="4GB RAM 64GB ROM">4GB RAM 64GB ROM</option>
                                        <option value="6GB RAM 128GB ROM">6GB RAM 128GB ROM</option>
                                        <option value="8GB RAM 128GB ROM">8GB RAM 128GB ROM</option>
                                        <option value="Other">Other</option>
                                      </select>
                                </div>

                                <!-- upload file  -->
                                <div class="mb-3">
                                  <div class="form-group">
                                    <label for="fileInput">Upload a picture of mobile : </label>
                                    <input class="form-control" id="fileInput" type="file" name="uploadfile" value="" />
                                  </div>
                                </div>
            <?php

                include './QuesTemplate/lowerBody.php';
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