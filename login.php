<?php
       session_start();
       $valid=0;
       $_SESSION["error2"]=0;
       if(isset($_POST['text']) && isset($_POST['pw']) ){
           @$db= new mysqli('localhost', 'root','','webproject');
           if(mysqli_connect_errno()){
               echo "Error: couldn't connect to data base";
               die();
           }
           $strQry='select * from userpage';
           $res= $db -> query($strQry);
           for($i=0; $i< $res -> num_rows ; $i++){
               $row = $res -> fetch_array(); 
               if($_POST['text']== $row[0] && $_POST['pw'] == $row[3] ){
                  $valid=1;
                  $_SESSION["login"]=1;
                  header("location: index.html");
               }
           }
           if($valid==0){
               $_SESSION["error2"]=1;
               
           }
       }
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
                    <li><a href="menpage.php"><i class="male icon"></i>Men</a></li>
                    <li><a href="Women.php"><i class="female icon"></i>Women</a></li>
                    <li><a href="kids.php"> <i class="child icon"></i>Kids</a></li>
                    <li><a href="test.php"><i class="upload icon"></i>Upload Design</a></li>
                    <li class = 'movetoRight1'><a id = 'logincolor'href="login.php">Log in</a></li>
                    <li class = 'movetoRight2'><a href="signup.php">Sign up</a></li>
                </ul>

        </nav>
    </div>
    <form action="login.php" method="post">
    <div class="container"> 
        <h1 id="first">
            Log in
        </h1>
        <p> 
            Do you love online shopping? Please login <br>
            as fast as possible 
         </p>
         <br>
         <form action="login.php" method="post">
         Email:
         <br>
         <input type="text" name="text" class="boxx" placeholder="   Enter email address">
         <br>
         <br>
         Password:
         <br>
         <input type="password" name="pw" class="boxx" placeholder="   Enter your password">
         <br>
         <br>
         <br>
         <input type="submit" id="log" value="Get Started">
         <br>
         <br> 
         <p>
            don't have an account?
            <span><a href="signup.html" id="sign"> Sign up</a></span>
         </p>
         </form>
    </div>
  </form>
</body>
<script>if(<?php echo $_SESSION["error2"]?> ==1)alert("Your user name or/and password is not correct"); </script>
</html>