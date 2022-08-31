<?php


    

// if($_SERVER['REQUEST_METHOD'] == "GET"){

// }

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $itemName = $_GET['itemName'];

    switch($itemName) {
        case "fridge":
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

                <div class="container ">
                    <div class="row">
                        <div class="col-5" id="small" style="background-color: antiquewhite; height:800px;">
                            <h2 style="text-align:center"> Fridge </h2>
                            <img  style="width:500px; height:500px; margin-top: 20px;" src="../Images/fridgeApp.jpeg" alt="" srcset="" >
                        </div>

                        <div class="col-7" id="big" style="background-color: aqua;  height:800px;">
                            <form action="">
                                <h1 style="text-align:center">Enter the details</h1>
                                <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput" class="form-label">What is the condition of the fridge ?</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="condition" id="">
                                        <option selected>Select condition</option>
                                        <option value="1">Excellent</option>
                                        <option value="2">Flawless</option>
                                        <option value="3">food</option>
                                        <option value="3">fair</option>
                                        <option value="3">broken</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Question #1</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <textarea class="form-control" placeholder="Write here" id="floatingTextarea" style="height: 50px;"></textarea>
                                      <p><strong>Solution with span:</strong> <span class="textarea" style="display: block; background-color: white; border: 1px solid #C5C5C5;border-radius: 5px; width: 100%; overflow: hidden; resize: both; min-height: 40px; line-height: 20px;" role="textbox" contenteditable></span></p>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Question #2</label>
                                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Question #3</label>
                                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                </div>
                            </form>
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