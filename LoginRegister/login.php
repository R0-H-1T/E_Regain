<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
    <title>Login</title>
</head>

<body>

    <?php  
        session_start();
        include '../TemplateHTML/Navbar/home.php'; 
    ?>

    <div class="loginForm">
        <section class="log">
            <h1 class="loginHeader">Login</h1>
            <hr>
            <div class="login">

                <form action="trial.php" method="POST">


                    <!-- Email input -->
                    <div class="form-outline mb-4"> 
                        <input type="email" name="uEmail" id="form2Example1" class="form-control" required"/>
                        <label class="form-label" for="form2Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="uPass" id="form2Example2" class="form-control"required"/>
                        <label  class="form-label" for="form2Example2">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- hiddenInputForLogin/RegisterIdentification -->
                    <input type="hidden" name="LoginRegister" value="login">

                    <!-- Submit button -->
                    <button type="submit" value="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                    
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Not a member? <a href="./register.php">Register</a></p>
                        <!-- <p>or sign up with:</p> -->
                        <!-- <button type="button" class="btn btn-link btn-floating mx-1">
                            <a href="https://github.com/R0-H-1T"><div class="fab fa-facebook-f"></div></a>
                            
                        </button> -->
                        <!-- 
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>
        
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>
        
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button> -->
                    </div>
                </form>

            </div>
        </section>

    </div>


    <a href="../AboutUs/about.php">About Us</a>
    <?php  include '../TemplateHTML/Footer/footer.html'; ?>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
</body>

</html>

<!-- "C:\Program Files\Microsoft Office\root\Office16\MSACCESS.EXE" -->
