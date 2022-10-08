

 <!-- <input type="hidden" name="varname" value="var_value"> -->

<?php

function noProblem($nameValue){
    if(!isset($nameValue)) return null;
    else return $nameValue;
}
        

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $itemName = $_REQUEST['itemName'];
    $brandName = $_REQUEST['brand'];

    switch($itemName){
        case "fridge":
            echo "<h1>$itemName</h1>"; 
            echo "<h1>$brandName</h1>";
            break;
        
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

