<?php 
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || Elegant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="style/logincss.css">
</head>
<body>
    <div class="intro">
        <nav>
            <ul>
                <span><b id = 'bigname'>ELEGANT</b></span>
                <li><a href="index.html"><i class=" home icon"></i>Home</a></li>
                <li><a href="Men.html"><i class="male icon"></i>Men</a></li>
                <li><a href="Women.html"><i class="female icon"></i>Women</a></li>
                <li><a href="kids.html"> <i class="child icon"></i>Kids</a></li>
                <li><a href="#"><i class="upload icon"></i>Upload Design</a></li>
                <li class = 'movetoRight1'><a id = 'logincolor'href="login.html">Log in</a></li>
                <li class = 'movetoRight2'><a href="signup.html">Sign up</a></li>
            </ul>

        </nav>
    </div>
    <div class="container"> 
        <h1 id="first">
            Log in
        </h1>
        <p> 
            Do you love online shopping? Please login <br>
            as fast as possible 
         </p>
         <br>
         <form action="testttt.php" method="post">
            Email:
            <br>
            <input type="text" name="text" class="boxx" placeholder="   Enter email address" id ='username'>
            <br>
             <br>
            Password:
            <br>
            <input type="password" name="pw" class="boxx" placeholder="   Enter your password" id = 'password'>
            <br>
            <br>
            <br>
            <input type = "submit" value = "amr">
            <br>
            <br> 
            <p>
                don't have an account?
                <span><a href="signup.html" id="sign"> Sign up</a></span>
            </p>
         </form>
    </div>
  
</body>

<script>
    document.getElementById('username').value = <?php echo $_SESSION["username"] ;?> ;
    document.getElementById('password').value = <?php echo $_SESSION["password"] ;?> ;
</script>
</html>