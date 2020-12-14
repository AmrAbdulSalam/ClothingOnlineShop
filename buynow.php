<?php 
    
    session_start();
    if(isset($_SESSION["login"])){
        if($_SESSION["login"] !=1){
            header("Location:login.php");
        }
    }
    else{
        header("Location:login.php");
    }

    if(isset( $_SESSION["login"])){
        if( $_SESSION["login"] == 1){
            echo '<div class="intro">
            <nav>
                <ul>
                    <span><b id = "bigname">ELEGANT</b></span>
                    <li><a href="index.php"><i class=" home icon"></i>Home</a></li>
                    <li><a href="#"><i class="male icon"></i>Men</a></li>
                    <li><a href="Women.php"><i class="female icon"></i>Women</a></li>
                    <li><a href="kids.php"> <i class="child icon"></i>Kids</a></li>
                    <li><a href="#"><i class="upload icon"></i>Upload Design</a></li>
                    <li class = "movetoRight1"><a id = "logincolor"href="login.php?logout=true" >Log out</a></li>
                    <li class = "movetoRight2"><a href="#">'.$_SESSION['username'].'</a></li>
                </ul>
    
            </nav>
        </div>' ;
        }
    }

    if(isset($_POST["submit"])){
       //inserting to database;

       $db = new mysqli('localhost' , 'root' , '' , 'webproject');
       if(mysqli_connect_errno()){
           echo 'no connection to database';
       }
       $username = $_SESSION["username"];
       $address = $_POST["address"];
       $email = $_POST["email"];
       $code = $_POST["firstnum"];
       $phone = $_POST["phonenumber"];
       $quantity = $_SESSION["quantity"];
       $color =  $_SESSION["color"];
       $size = $_SESSION["size"];
       $price = $_SESSION["price"]; //here
       $prodid = $_SESSION["productid"];
       $categ = $_SESSION["type"];

       $str = "insert into orderstable values('$username' ,'$address' , '$email' , '$code' , '$phone' , '$quantity' ,'$code' , '$size' , '$price' , '$prodid',current_timestamp())";
       if($db -> query($str)){
        header("Location:index.php");
       }

    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/buynow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Order || Fashion</title>
</head>
<body>
<?php 
        if(!isset($_SESSION["login"]) || $_SESSION["login"] == 0){
            echo '<div class="intro">
            <nav>
                <ul>
                    <span><b id = "bigname">ELEGANT</b></span>
                    <li><a href="index.php"><i class=" home icon"></i>Home</a></li>
                    <li><a href="menpage.php"><i class="male icon"></i>Men</a></li>
                    <li><a href="Women.php"><i class="female icon"></i>Women</a></li>
                    <li><a href="kids.php"> <i class="child icon"></i>Kids</a></li>
                    <li class = "movetoRight1"><a id = "logincolor"href="login.php">Log in</a></li>
                    <li class = "movetoRight2"><a href="signup.php">Sign up</a></li>
                </ul>
    
            </nav>
        </div>' ;
        }    
        ?>
    <div class="informationform">
        <form action="buynow.php" method ="post">
                    <div class="info">
                        <label for="Address" class = 'opac'>UserName :</label> <br>
                        <label for="" ><?php echo $_SESSION["username"]?></label> <br>
                        
                   </div>
                <div class="info">
                        <label for="Address" class = 'opac'>Address :</label> <br>
                        <input type="text" id='Address' required class = 'inputuser' placeholder="  Address" name = "address"> <br>
                        
                   </div>
                   
                   <div class="info">
                        <label for="Email" class = 'opac' >Email :</label> <br>
                        <input type="email" id='Email' required class = 'inputuser' placeholder="  Email" name="email"> <br>
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
                        <label for="" class = 'deepinfo'>Price : <?php echo $_SESSION['price']; ?></label> <br>     
                </div>
                <div class="info">
                        <label for="" class = 'deepinfo'>Quantity : <?php echo $_GET["quantity"]; $_SESSION["quantity"] = $_GET["quantity"];?></label> <br>     
                </div>
                <div class="info">
                        <label for="" class = 'deepinfo'>Color :<?php echo $_GET["color"]; $_SESSION["color"] = $_GET["color"];?> </label> <br>     
                </div>
                <div class="info">
                        <label for="" class = 'deepinfo'>Size :<?php echo $_GET["size"]; $_SESSION["size"] = $_GET["size"];?> </label> <br>     
                </div>
                <div class="info">
                        <label for="" class = 'deepinfo' id ='totalprice'> </label> <br>     
                </div>
                <div class="info">
                    <input type="submit" value="Order" class = 'savebutton' name = "submit"> <br>
                </div>
                </form>
    </div>

</body>

<script>
    let price = '<?php echo $_SESSION['price']; ?>';
    let pricearr = price.split(' ');
    pricearr[1] = pricearr[1].substring(1);
    pricearr[1] = Number(pricearr[1]) * Number(<?php echo $_GET["quantity"]; ?>);
    
    document.getElementById('totalprice').innerText = 'TotalPrice : US $'+pricearr[1].toFixed(2)


</script>
</html>