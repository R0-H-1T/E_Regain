<style>
  #nav {
    background: #182628;
    height: 100px;
    width: 100%;
  }

  label.logo {
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 5px;
    font-weight: bold;
  } 

  #nav ul {
    float: right;
    margin-right: 50px;
  }

  #nav ul li {
    display: inline-block;
    /* line-height: 80px;
	margin: 0 5px; */
    margin-top: 26px;
  }

  #nav ul li a {
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
    text-decoration: none;  
  }

  a.active,
  #nav ul a:hover {
    background: #378b50;
    transition: .5s;
  }

  #nav label {
    cursor: pointer;
  }



  /* this is for footer ----------------------------------------------------------*/
  .site-footer {
    background-color: #26272b;
    padding: 45px 0 20px;
    font-size: 15px;
    line-height: 24px;
    color: #737373;
    
  }

  .site-footer hr {
    border-top-color: #bbb;
    opacity: 0.5
  }

  .site-footer hr.small {
    margin: 20px 0
  }

  .site-footer h6 {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    margin-top: 5px;
    letter-spacing: 2px
  }

  .site-footer a {
    color: #737373;
  }

  .site-footer a:hover {
    color: #3366cc;
    text-decoration: none;
  }

  .footer-links {
    padding-left: 0;
    list-style: none
  }

  .footer-links li {
    display: block
  }

  .footer-links a {
    color: #737373
  }

  .footer-links a:active,
  .footer-links a:focus,
  .footer-links a:hover {
    color: #3366cc;
    text-decoration: none;
  }

  .footer-links.inline li {
    display: inline-block
  }

  .site-footer .social-icons {
    text-align: right
  }

  .site-footer .social-icons a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-left: 6px;
    margin-right: 0;
    border-radius: 100%;
    background-color: #33353d
  }

  .copyright-text {
    margin: 0
  }

  @media (max-width:991px) {
    .site-footer [class^=col-] {
      margin-bottom: 30px
    }
  }

  @media (max-width:767px) {
    .site-footer {
      padding-bottom: 0
    }

    .site-footer .copyright-text,
    .site-footer .social-icons {
      text-align: center
    }
  }

  .social-icons {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
  }

  .social-icons li {
    display: inline-block;
    margin-bottom: 4px
  }

  .social-icons li.title {
    margin-right: 15px;
    text-transform: uppercase;
    color: #96a2b2;
    font-weight: 700;
    font-size: 13px
  }

  .social-icons a {
    background-color: #eceeef;
    color: #818a91;
    font-size: 16px;
    display: inline-block;
    line-height: 44px;
    width: 44px;
    height: 44px;
    text-align: center;
    margin-right: 8px;
    border-radius: 100%;
    -webkit-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear
  }

  .social-icons a:active,
  .social-icons a:focus,
  .social-icons a:hover {
    color: #fff;
  }

  .social-icons.size-sm a {
    line-height: 34px;
    height: 34px;
    width: 34px;
    font-size: 14px
  }

  @media (max-width:767px) {
    .social-icons li.title {
      display: block;
      margin-right: 0;
      font-weight: 600
    }
  }
</style>
</head>

<body> 



  <div id="nav">
    
    <a href="../Home/home.php" style="text-decoration: none;">
      <img src="../Images/logo2.png" alt="" style="width:50px; height:50px; margin-left:40px; margin-bottom: 15px;">      
      <label class="logo">E-Sanchay</label>
    </a>
    <ul>
      <li><a href="../Home/home.php">Home</a></li>
      <li><a href="../AboutUs/about.php">About us</a></li>
      <li><a href="../Services/SellDonate.php">Services</a></li>

      <?php
        // session_start();
        
			    
          if(empty($_SESSION['logged'])){ ?>
             <li><a data-red="true" href="../LoginRegister/login.php">Login/Sign up</a></li>
            <?php
            
          } else {
              if(isset($_SESSION['logged'])){  ?>
                  <li><a data-red="true" href="../TemplateHTMl/logout.php">Logout</a></li>
                  <!-- <li style="color:white; text-transform:uppercase;"><?php echo 'Hello '.$_SESSION['UName'];?></li> -->
            
              <?php
              }else{
                  echo "isset condition not working";
                  // header("Location: ../Home/home.php");

            }
        } 

      ?>
      
      <!-- <li><a href="../LoginRegister/login.php">Login/SignUp</a></li> -->
    </ul>
  </div>  

  <!-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
  </svg> -->

  
  <!-- </body> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->