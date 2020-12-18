<?php
       session_start();
       if(isset($_GET['logout'])){
           if($_GET['logout'] == 'true'){
               session_destroy();
           }
       }
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
               if($_POST['text']== $row[6] && $_POST['pw'] == $row[3] ){
                if($row[6] == "admin" && $row[3] == "admin"){
                    $_SESSION['admin'] = 1;
                    header("location:chartadmin.php");
                }else{
                  $valid=1;
                  $_SESSION["login"]=1;
                  $_SESSION["username"]=$row[6];

                  $_SESSION["firstname"] = $row[0];
                  header("location: index.php");
                }
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
    <title>Login || Fashion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="style/logincss.css">
</head>
<body>
    <div class="intro">
        <nav>
        <ul>
                    <span><b id = 'bigname'>ELEGANT</b></span>
                    <li><a href="index.php"><i class=" home icon"></i>Home</a></li>
                    <li><a href="menpage.php"><i class="male icon"></i>Men</a></li>
                    <li><a href="Women.php"><i class="female icon"></i>Women</a></li>
                    <li><a href="kids.php"> <i class="child icon"></i>Kids</a></li>

                    <li class = 'movetoRight1'><a id = 'logincolor'href="login.php">Log in</a></li>
                    <li class = 'movetoRight2'><a href="signup.php">Sign up</a></li>
                </ul>

        </nav>
    </div>
    <div class="cont">
       <div class="first">
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
                Username :
                <br>
                <input type="text" name="text" class="boxx" placeholder="   Enter username">
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
                    <span><a href="signup.php" id="sign"> Sign up</a></span>
                </p>
                </form>
            </div>
        </form>
       </div>
       <div class="second">
        <img src="./photos/login.jpg" alt="">
       </div>
    </div>
</body>
<script>if(<?php echo $_SESSION["error2"]?> ==1)alert("Your user name or/and password is not correct"); </script>
</html>