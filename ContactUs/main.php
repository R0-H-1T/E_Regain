




<?php 
    include '../TemplateHTML/boilerplate.html';
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&family=Roboto:wght@300&display=swap" rel="stylesheet"> -->
    
    <link rel="stylesheet" href="style3.css">
    <title>Contact Us</title>


    <?php

        include '../TemplateHTML/Navbar/home.html';
    ?>

    <div class="containerHead">
      <div class="containerHead2">
        <center>
          <h1><b>CONTACT US</b></h1>
        </center>
      </div>
    </div>
    <div id="container">
        <div id="flex-container">
            <section class="heading">
                
                
            </section>
            <section class="main">
                <div class="contactForm">
                    <form class="row g-3">
                        <div class="col-12">
                            <label for="inputName" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Your name">
                          </div>
                        <div class="col-12">
                          <label for="inputEmail4" class="form-label">Email:</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Your email">
                        </div>
                        
                        <div class="col-12">
                          <label for="inputPhno" class="form-label">Phone No.:</label>
                          <input type="text" class="form-control" id="inputPhno" placeholder="Your phone number">
                        </div>
                        <div class="col-12">
                          <label for="inputMsg" class="form-label">Message</label>
                          <textarea class="form-control" id="inputMsg" rows="3" placeholder="Your message"></textarea>
                        </div>
                        
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                </div>
                
                <div class="containerAddress">
                    <div class="contactInfo">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4667.078932923166!2d73.83315035753382!3d18.52195847743744!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7b83f347c9b2f7a!2sBrihan%20Maharashtra%20College%20of%20Commerce!5e0!3m2!1sen!2sin!4v1660810088413!5m2!1sen!2sin" 
                        width="400" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> 
                    
                </div>
                
                
            </section>

        </div>

    </div>

    <div class="container-2">
        <div class="info">

            <div class="info1">
                <div><center>
                    <span class="wrap-icon icon-room mr-3"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg></center>
                </div>
                <div><center>
                    <div class="add">845, Shivaji Nagar, Pune, Maharashtra 411004</div></center>
                </div>
            </div>

            <div class="info1">
                <div><center>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                    </center>
                </div><center>
                <div class="no">+91 20 6757 6200</div>
                <div class="no">+91 83 3425 8923</div>
            </center>
            </div>

            <div class="info1">
                <div><center>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                      </svg>

                      <div class="mail"><a href="https://www.bmcc.ac.in/web/?page_id=466">office.bmcc@despune.org</a></div>
                    </center>
            </div>


            <!-- <ul class="list-unstyled">
                <li class="d-flex">
                    <div>
                        <span class="wrap-icon icon-room mr-3"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                    </div>
                  <span class="text"><b>845, Shivaji Nagar, Pune, Maharashtra 411004</b></span></span>
                </li>
                <li class="d-flex">
                  <span class="wrap-icon icon-phone mr-3"></span>
                  <span class="text">+1 (291) 939 9321</span>
                </li>
                <li class="d-flex">
                  <span class="wrap-icon icon-envelope mr-3"></span>
                  <span class="text">info@mywebsite.com</span>
                </li>
              </ul>-->
        </div> 
    </div>
                        </div>  

    <a href="../AboutUs/about.html">About Us</a>


    <?php
    
          include '../TemplateHTML/Footer/footer.html';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>