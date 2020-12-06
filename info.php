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

<div class="intro">
        <nav>
            <ul>
                <span><b id = 'bigname'>ELEGANT</b></span>
                <li><a href="index.html"><i class=" home icon"></i>Home</a></li>
                <li><a href="Men.html"><i class="male icon"></i>Men</a></li>
                <li><a href="Women.html"><i class="female icon"></i>Women</a></li>
                <li><a href="kids.html"> <i class="child icon"></i>Kids</a></li>
                <li><a href="#"><i class="upload icon"></i>Upload Design</a></li>
                <li class = 'movetoRight1'><a id = 'logincolor'href="#">Log in</a></li>
                <li class = 'movetoRight2'><a href="signup.html">Sign up</a></li>
            </ul>


    </nav>
</div>

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
                <span class="result">
                    <?php echo $row['size']?>
                </span>
            
            </div>

            <div class="counti">
            <hr>
            <span class = 'type'>Quantity :</span><br> <br>
                <!-- <?php echo $row['quantity']?> -->

                <span class="result">
                    <i class="disabled red minus circle icon" id = 'minus' onclick='lessItems()'></i>
                
                    <label for="" id = 'labelnum'>1</label>
                
                    <i class="green plus circle icon" onclick='moreItems()'></i>
                </span>
                
                
            </div>
            
            <div class="total">
            <hr>
            <span class = 'type'>Total :</span><br>
                <span class="result" id = 'totalprice'>
                    <?php echo $row['price']?>
                </span>
            
            </div>

            <div class="shipping">
            <hr>
            <span class = 'type'>Shipping :</span> <br>
                <br>
                <?php echo $row['shipping']?>
                
            </div>

            <div class="submit">
                <button>
                    Buy Now
                </button>
            </div>
        </div>
    </div>
</body>
<script src="./javascript/info.js"></script>

</html>