<?php

    
    session_start();

    include '../TemplateHTML/boilerplate.html';
    include '../TemplateHTML/Navbar/home.php';

    if(isset($_SESSION['logged'])){
        include '../DBconn/dbconn.php';
        include '../Services/QuesTemplate/functions.php';

        echo "<center><h1> Welcome Back {$_SESSION['UName']} </h1></center><hr>"; ?>
        
        <center>
            <h2>Displaying your products</h2>
            
                <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        
        $sql = "SELECT productID, productCategory, userResponse ,productPrice,productDate, productAns, productType, adminResponse, productImgPath FROM products join users on Email = '{$_SESSION["UEmail"]}' and user_id = {$_SESSION["UserID"]}";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { 
                
                $arr = removeHash($row["productAns"]);
                
                
                ?>
                
                <!-- echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>"; -->
                <div class="col">
                <div class="card" style="width:400px; margin-bottom: 30px;">
                    <center>
                        <img style="width:300px; height:300px; "src="../Services/<?php echo $row["productImgPath"];  ?>" class="card-img-top" alt="...">
                    </center>
                  <div class="card-body">
                    <h4>Details of your product:  </h4>
                    <h5 class="card-title"><?php echo $row["productCategory"]; ?></h5>
                    <p class="card-text">
                    <?php foreach($arr as $word) { ?>
                    <span><?php echo $word; ?></span><br>
                    <?php } ?>
                    </p>
                    <p class="card-text"><b>Status: <?php echo $row["adminResponse"]; ?></b></p>

                    <?php if($row["productType"] == "sell") {
                        if($row["adminResponse"] != "Rejected"){ ?>
                            <?php if($row["userResponse"] == '') { ?>
                              <p class="card-text"><b>You are selling this product</b></p>
                            <?php } ?>
                        <?php } ?>
                      <?php if(empty($row["productPrice"])) { ?>
                          <?php if($row["adminResponse"] == "Rejected") { ?>
                            <p class="card-text" style="background-color:#f0f0f0; border-radius: 10px;">Unfortunately, this product does not hold any <b> monetery value.</b> However you can put this up for <b>donation</b></p>
                          <?php } else { ?>
                            <p class="card-text"><b>Someone will come for inspection of your product<b></p>
                          <?php } ?>
                      <?php }else if($row["adminResponse"] == "Approved"){?>
                        
                        
                                  <?php if($row["userResponse"] == ''){ ?>
                                        <p class="card-text"><b>Exchange it for: Rs <?php echo $row["productPrice"]; ?></b></p>
                                        <form action="userResponse.php" method="POST">
                                          <input type="hidden" name="prodID" value="<?php echo $row["productID"]; ?>">
                                          <button class="btn btn-success" name="userRes" value="1">Go ahead</button>
                                          <button class="btn btn-danger" name="userRes" value="0">Reject</button>
                                        </form>
                                    
                                  <?php }if ($row["userResponse"] == '1'){ ?>
                                        <p class="card-text" style="background-color:#f0f0f0; border-radius: 10px;">Your request has been placed successfully. Our executive will come to collect the product in <b><?php echo rand(1,6); ?> days</b> time.</p>
                                        <p class="card-text" style="background-color: green; border-radius: 10px; color:#f2f2f2"><b>Thank You for making earth a more greener place <h2>&#128515;</h2></b></p>
                                        <form action="generatePDF.php" method="POST">
                                          <input type="hidden" name="prodID" value="<?php echo $row["productID"]; ?>">
                                          <button class=" btn btn-primary" name="receipt" value="receipt">Download Reciept</button>
                                        </form>
                                  <?php }if ($row["userResponse"] == '0') { ?>
                                        <p class="card-text" style="background-color: red; border-radius: 10px; color:#f2f2f2"><b>You rejected to sell your product at this price.</b></p>
                                  <?php } ?>

                        <?php }else { } ?>
                    <?php }else { 
                      if($row["adminResponse"] == "Approved"){ ?>
                        <p class="card-text" style="background-color:#f0f0f0; border-radius: 10px;">Your request has been placed successfully. Our executive will come to collect the product in <b><?php echo rand(1,6); ?> days</b> time.</p>
                        <p class="card-text" style="background-color: green; border-radius: 10px; color:#f2f2f2"><b>Thank You for making earth a more greener place <h2>&#128515;</h2></b></p>
                        <form action="generatePDF.php" method="POST">
                            <input type="hidden" name="prodID" value="<?php echo $row["productID"]; ?>">
                            <button class=" btn btn-primary" name="receipt" value="receipt">Download Reciept</button>
                        </form>
                      <?php }else if($row["adminResponse"] == "Rejected"){?>
                        <p class="card-text" style="background-color:red; color:#f2f2f2; border-radius: 10px;"><b>Sorry, we cannot accept this product</b></p>
                        <?php }else {?>
                        <p class="card-text"><b>You want to donate this product</b></p>
                    <?php }
                      } ?>


                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Date: <b><?php echo $row["productDate"]; ?></b></small>
                  </div>
                </div>
              </div>
            
            
            <?php }
          } else {
            echo "<center><h3>You haven't sold or donated..</h3></center>";
          }


        ?>

        
                    <!-- to be looped -->
                   
    
                </div>
            



        </center>














    <?php    echo "<a href='../Home/home.php'>Home</a>";
    }else {
        echo "<center>Yo bro!, u r trespassing</center>";
    }


    include '../TemplateHTML/Footer/footer.html';

?>