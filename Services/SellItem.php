<?php


    


if(isset($_GET['itemName'])){
    $itemName = $_GET['itemName'];



    if($itemName == "fridge"){
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
        //echo "<h1> Works but what next ? </h1>";
    
    
    }else if($itemName == "aircon"){
        include '../TemplateHTML/include.html';
        ?>

        <h1>This is air conditioning page</h1>

        

        <?php    
    }

}else{
    echo "<h1> Yea there are some problems</h1>";
}



?>