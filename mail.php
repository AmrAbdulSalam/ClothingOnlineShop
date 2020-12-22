<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once "vendor/autoload.php";

    if(isset($_POST['submit'])){
        $email = $_POST['mailuser'];
        $user = $_POST['username'];
        $db = new mysqli('localhost' , 'root' , '' , 'webproject');
        if(mysqli_connect_errno()){
            echo 'error connecting to the database';
        }
        $str = "select username from userpage where username = '$user'";
        $result = $db->query($str);
        if($result->num_rows == 1){
            //giving a new password
            $randnum  = rand(100000,1000000000);
            $strpass = "update userpage set password = '$randnum' where username = '$user'";
            $res = $db ->query($strpass);
            $mail = new  PHPMailer;
        try{
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPsECURE = '';
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587 ;
            $mail->IsHTML(true);
            $mail->Username = "elefashion1@gmail.com";
            $mail->Password = "anaamr123";
            $mail->setFrom("elefashion1@gmail.com" ,"Elegant");
            $mail->AddAddress("$email");
            $mail->IsHTML(true);

            $mail->Subject = "REST PASSWORD";
            $mail->Body = "Your password is changed to : '$randnum'";
            //$mail->AltBody = 'hellllooo';

            if(!$mail->send()){
                echo 'error working';
            }
            else {
                header("location: index.php");
            }

        }
        catch(Exception $exception) {
            echo 'error' ;
        }
        }
        else {
            echo 'no user found';
        }
        

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/men.css">
    <link rel="stylesheet" href="style/logincss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Rest password</title>
</head>
<body>
        <div class="intro">
            <nav>
                <ul>
                    <span><b id = "bigname">ELEGANT</b></span>
                    <li><a href="index.php"><i class=" home icon"></i>Home</a></li>
                    <li><a href="menpage.php"><i class="male icon"></i>Men</a></li>
                    <li><a href="Women.php"><i class="female icon"></i>Women</a></li>
                    <li><a href="kids.php"> <i class="child icon"></i>Kids</a></li>
                    <li><a href="items.php"><i class="shopping cart icon"></i>Items</i></a></li>
                    
                </ul>
            </nav>
        </div>
        <div class="form">
            <!-- <form action="mail.php" method = 'post'>
                <input type="text" name = 'username' id = 'username'>
                <input type="text" name = 'mailuser' id = 'mailuser'>
                <input type="submit" name = 'submit' id = 'submit'>
            </form> -->
            <div class="container"> 
                <h1 id="first">
                    Rest Password
                </h1>
                <p> 

                </p>
                <br>
                <form action="mail.php" method="post">
                Username :
                <br>
                <input type="text" name="username" class="boxx" placeholder="   Enter username" id ="username">
                <br>
                <br>
                Email:
                <br>
                <input type="mail" name="mailuser" class="boxx" placeholder="   Enter your email" id ="mailuser">
                <br>
                <br>
                <br>
                <input type="submit" id="log" value="Get Started" name = "submit">
                <br>
                <br> 
                <p>

                </p>
                </form>
            </div>

        </div>
</body>
</html>