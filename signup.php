<?php 
    if(isset($_POST["firstname"]) &&isset($_POST["lastname"]) && isset($_POST["password"]) && isset($_POST["phonenumber"]) && isset($_POST["gender"]) && isset($_POST["firstnum"]) && isset($_POST["username"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"] ;
        $password = $_POST["password"] ;
        $phone = $_POST["phonenumber"];
        $gender = $_POST["gender"];
        $code = $_POST["firstnum"];
        $username = $_POST["username"];
        session_start();
        $db = new mysqli('localhost' , 'root' , '' , 'webproject');
    
        if(mysqli_connect_errno()){
            echo 'no connection to database';
        }
        //$str = 'insert into userpage values('."$firstname,"."$lastname,"."$gender,"."$password,"."$phone,"."$code)";
        $checkusername = "select username from userpage where username ='$username'";
        $result = $db->query($checkusername);
        if($result->num_rows > 0){
            $_SESSIOM["error"] = 1;
        }else{
        $str = "insert into userpage values ('$firstname' , '$lastname' , '$gender' , '$password' , '$phone' , '$code' , '$username')" ;
        if ($db->query($str) === TRUE) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("Location:login.php");
          } else {
            $_SESSIOM["error"] = 1;
          }
        }
        

        
    } 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Sign up || Elegant</title>

    <link rel="stylesheet" href="./style/signup.css">
</head>
<body>
    <div class="intro">
        <nav>
            <ul>
                <span><b id = 'bigname'>ELEGANT</b></span>
                <li><a href="index.html"><i class=" home icon"></i>Home</a></li>
                <li><a href="menpage.php"><i class="male icon"></i>Men</a></li>
                <li><a href="Women.html"><i class="female icon"></i>Women</a></li>
                <li><a href="kids.html"> <i class="child icon"></i>Kids</a></li>
                <li><a href="#"><i class="upload icon"></i>Upload Design</a></li>
                <li class = 'movetoRight1'><a id = 'logincolor'href="login.html">Log in</a></li>
                <li class = 'movetoRight2'><a href="signup.html">Sign up</a></li>
            </ul>

        </nav>
    </div>
    
    <div class="cont">
        <div class="signuptest">
            <div class="intro">
                <h2>
                    Sign Up
                </h2>
                <p>
                    Create a Elegent fashion account so you can have the ability <br>
                    to start you fashion journy .
                </p>
            </div>
        
            <div class="informationform">
                <form action="signup.php" method ="post">
                <div class="info">
                        <label for="username" class = 'opac'>Username :</label> <br>
                        <input type="text" id='username' required class = 'inputuser' placeholder="  Username" name = "username"> <br>
                        
                   </div>
                   <div class="info">
                        <label for="firstname" class = 'opac'>Name :</label> <br>
                        <input type="text" id='firstname' required class = 'inputuser' placeholder="  Your Name" name = "firstname"> <br>
                        
                   </div>
                   <div class="info">
                        <label for="lastname" class = 'opac' >LastName :</label> <br>
                        <input type="text" id='lastname' required class = 'inputuser' placeholder="  Your Family Name" name="lastname"> <br>
                    </div>
                    <div class="info">
                        <label for="phonenumber" class = 'opac'>PhoneNumber :</label> <br>
                        +
                        <input list="browsers" id = 'firstnum'  class = 'test' list="firstnum" maxlength = '3' placeholder="Code" name ="firstnum"> -
    
                    <datalist id = 'browsers'>
                        <option value="970" >
                        <option value="972" >
                        <option value="974" >
                    </datalist>
                    <input type="number" id='phonenumber' required class = 'inputuser1' width = "200px"  placeholder=" Phone" name ="phonenumber"> <br>
                 </div>
    
                 <div class="info">
                    <label class = 'opac' >Gender :</label> <br>
                    <label for=""> Male </label>
                    <input type="radio" id='male' required checked name = 'gender'  value = "male"> 
                    <label for=""> Female </label>
                    <input type="radio" id='female' required name = 'gender' value ="female"> <br>
                </div>
    
                <div class="info">
                    <label for="password" class = 'opac' >Password :</label> <br>
                    <input type="password" id='password' required class = 'inputuser' placeholder="  Password" name ="password"> <br>
                </div>
    
                <div class="info">
                    <input type="submit" value="Sign up" class = 'savebutton'> <br>
                </div>
                <p>
                    Have an account ? <span ><a href="login.html" id="login">Login</a></span>
                </p>
                </form>
            </div>

            
        </div>
        <div class="pic">
            <img src="./photos/signup.png" alt="" class="" width="600px" height="700px">
        </div>
    </div>
</body>
<script>
    if(<?php echo $_SESSIOM["error"]?> == 1  ){
        alert("Falid to Signup Please try again ..")
    }
</script>
</html>