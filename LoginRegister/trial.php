<html>
<body>

<center>


    <h1>You have entered</h1>
    
    Your email address is: <?php echo $_GET["email"]; ?>
    Your password is: <?php echo $_GET["pass"]; ?><br>

    <a href="login.html"><h1>Login again</h1></a>

    <?php

        header( "refresh:5;url=login.html" );

    ?>

</center>

</body>
</html>