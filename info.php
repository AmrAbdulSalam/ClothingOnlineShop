<?php 
    if(isset($_GET['category']) && isset($_GET['id'])){
        $category = $_GET['category'];
        $id = $_GET['id']; //to get from data base
    }

    //selecting from database 
    $db = new mysqli('localhost' , 'root' , '' , 'webproject') ;
    
    if(mysqli_connect_errno()){
        echo 'no connection to database';
    }
    $querystr = 'select * from '."$category".' where imgid='."$id";
    $result = $db -> query($querystr);
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION["price"] = $row['price'];
    $_SESSION["productid"] = $row['imgid'];
    $_SESSION["type"] = $category;


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
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information || Fashion</title>
    <link rel="stylesheet" href="./style/info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"> 
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


    <div class="container">
        <div class="bigpic">
            <img src=<?php echo $row['imgsrc']?> alt="firstpic" width ='500px' height = '600px'>
        </div>
        
        <div class="info">
            <div class="para">
                <p class = 'disc'>
                    <?php echo $row['info']?>
                </p>
            <br>
            <hr>
            </div>
            <div class="price">
                <span class = 'type'>Price</span> : <br>
                <span class="result">
                <?php 
                    echo $row['price'];  //US $15.40              
                ?>
                </span>
            
            </div>

            <div class="color">
            <hr>
            <span class = 'type' >Colors</span> : <br>
                <span class="result" id ='allcolors'> 
                    <?php echo $row['colors']?>
                </span>
            
            </div>

            <div class="size">
            <hr>
            <span class = 'type'>Size :</span><br>
                <span class="result" id ='allsizes'>
                    <?php echo $row['size']?>
                </span>
            
            </div>

            <div class="counti">
            <hr>
            <span class = 'type'>Quantity :</span><br> <br>
                <!-- <?php echo $row['quantity']?> -->

                <span class="result">
                    <i class="disabled red minus circle icon" id = 'minus' onclick='lessItems()'></i>
                
                    <label for="" id = 'labelnum' name ="test">1</label>
                    <i class="green plus circle icon" onclick='moreItems()'></i>
                </span>
                
                
            </div>
            
            <div class="total">
            <hr>
            <span class = 'type'>Total :</span><br>
                <span class="result" id = 'totalprice'>
                   <label for="" name = "totalprice" id ="totalprice2"><?php echo $row['price']?></label>
                </span>
            </div>

            <div class="shipping">
            <hr>
            <span class = 'type'>Shipping :</span> <br>
                <br>
                <?php echo $row['shipping']?>
            </div>

            <div class="submit">
                <!-- <input type="submit" value = "Buy now" onclick="welcome()"> -->
                <a href="buynow.php" class="submit" onclick="location.href=this.href+'?color='+getColor()+'&quantity='+quantity()+'&size='+getSize();return false;">
               <button id = 'buybut'>
                    Buy Now 
                </button>
               </a>
            </div>
        </div>
    </div>
</body>
<script src="./javascript/info.js">
    
</script>
<script>

</script>
</html>

