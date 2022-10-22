<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&family=Roboto:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style1.css" type="text/css"/>

    <title>Sell/Donate</title>

    <style>
        .site-footer {
            margin-top: 350px;
        }
    </style>
    <!-- include navbar -->
    <?php   
        session_start();
        include '../TemplateHTML/Navbar/home.php'; 
    ?>

    <div class="container0">
        <div class="headerName">
            <h1 class="donateSell" style="color: #F2F2F2; margin-top:5px;">DONATE / SELL</h1>
        </div>
    </div>

    <div class="container1"> 
        <div class="headerBoxes">

            <!-- <section class="header">
                <h1 class="donateSell">Donate/Sell</h1>
                <hr>
            </section>  -->

            <section class="boxes">
                <p>
                    Find the product you'd like to trade-in for cash
                </p>


                <center>
                    <div class="searchBox">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Find your device....">
                        </div>
                    </div>
                </center>



                <div class="container text-center" id="allRows">
                    <div class="row">


                        <div class="col">
                            <a href="SellItem.php?itemName=fridge">
                                <figure class="figure">
                                    <img src="../Images/fridgeApp.jpeg" class="figure-img img-fluid rounded" alt="...">
                                </figure>

                            </a>
                            <h4 class="itemName">Fridge</h4>

                        </div>



                        <div class="col" id="colmid">
                            <a href="SellItem.php?itemName=aircon">
                                <figure class="figure">
                                    <img src="../Images/ProdImages/ac.jpg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Air Conditioning</h4>
                        </div>
                        <div class="col">
                            <a href="SellItem.php?itemName=geyser">
                                <figure class="figure">
                                    <img src="../Images/ProdImages/geyser.jpeg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Geyser</h4>
                        </div>
                    </div>
                </div>


                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <a href="SellItem.php?itemName=laptop">
                                <figure class="figure">
                                    <img src="../Images/ProdImages/laptop.jpg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Laptop</h4>
                        </div>
                        <div class="col" id="colmid">
                            <a href="SellItem.php?itemName=television">
                                <figure class="figure">
                                    <img src="../Images/ProdImages/tv.jpg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Television</h4>
                        </div>
                        <div class="col">
                            <a href="SellItem.php?itemName=mobile">
                                <figure class="figure">
                                    <img src="../Images/ProdImages/smartphone.jpg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Mobile</h4>
                        </div>
                    </div>
                </div>

                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <a href="SellItem.php?itemName=desktop">
                                <figure class="figure">
                                    <img src="../Images/ProdImages/desktop.jpg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Desktop</h4>
                        </div>
                        <div class="col" id="colmid">
                            <a href="SellItem.php?itemName=printer">
                                <figure class="figure">
                                    <img src="../Images/Page 8.jpeg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Printer</h4>
                        </div>
                        <div class="col">
                            <a href="SellItem.php?itemName=xbox">
                                <figure class="figure">
                                    <img src="../Images/ProdImages/xbox.jpg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">XBox</h4>
                        </div>
                    </div>
                </div>

                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <a href="SellItem.php?itemName=radio">
                                <figure class="figure">
                                    <img src="../Images/ProdImages/radio.jpg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Radio</h4>
                        </div>
                        <div class="col" id="colmid">
                            <a href="SellItem.php?itemName=hardisk">
                                <figure class="figure">
                                    <img src="../Images/ProdImages/harddisk.jpeg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Hard Disk</h4>
                        </div>
                        <div class="col">
                            <a href="SellItem.php?itemName=other">
                                <figure class="figure">
                                    <img src="../Images/otherAppliance.jpeg" class="figure-img img-fluid rounded"
                                        alt="...">
                                </figure>
                            </a>

                            <h4 class="itemName">Other</h4>
                        </div>
                    </div>
                </div>
                <!-- <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <a href="SellItem.php?itemName=cddvd">
                                <figure class="figure">
                                    <img src="../Images/Page 13.jpeg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">CD/DVD</h4>
                        </div>
                        <div class="col" id="colmid">
                            <a href="SellItem.php?itemName=hardisk">
                                <figure class="figure">
                                    <img src="../Images/Page 14.jpeg" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </a>
                            <h4 class="itemName">Hard Disk</h4>
                        </div>
                        <div class="col">
                            <a href="SellItem.php?itemName=other">
                                <figure class="figure">
                                    <img src="../Images/otherAppliance.jpeg" class="figure-img img-fluid rounded"
                                        alt="...">
                                </figure>
                            </a>

                            <h4 class="itemName">Other</h4>
                        </div>
                    </div>
                </div> -->
            </section>
        </div>
    </div>
            <?php
                  include '../TemplateHTML/Footer/footer.html';
            ?>









    <!-- <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById("nav");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script> -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
</body>

</html>