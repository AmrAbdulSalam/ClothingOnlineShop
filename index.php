<?php 
    // session_start();
    // if(isset($_SESSION['admin'])){
    //     if($_SESSION['admin'] == 1){
    //         $_SESSION['admin'] = 0;
    //     }
    // }

    session_start();
    if(isset( $_SESSION["login"])){
        if( $_SESSION["login"] == 1){
    echo '<div class="intro" style="background-image: url(backtest.jpg);">
    <nav>
        <ul>
            <span><b id = "bigname">ELEGANT</b></span>
            <li><a href="index.php"><i class=" home icon"></i>Home</a></li>
            <li><a href="menpage.php"><i class="male icon"></i>Men</a></li>
            <li><a href="Women.php"><i class="female icon"></i>Women</a></li>
            <li><a href="kids.php"> <i class="child icon"></i>Kids</a></li>
            <li><a href="items.php"><i class="shopping cart icon"></i>Items</i></a></li>
            <li class = "movetoRight1"><a id = "logincolor"href="login.php?logout=true" >Log out</a></li>
            <li class = "movetoRight2"><a href="#">'.$_SESSION['username'].'</a></li>
        </ul>
    </nav>
    <div class="firstinfo">
       
        <div class="talking">
            <h1>
                People will stare.
                <br> Make it worth their while.
            </h1>
            <p> 
                Humor is a big part of my style. You have to be willing to fall on your face a bit, <br>
                 to be that fashion roadkill. <br>
                I know so many people who are die-hard  <br> fashion people who are way more educated than I am .
                
            </p>
            <button id ="firstbut">
                Explore Us
            </button>
            <button id = "secondbut" onclick="jumpOffer()">
                Offers
            </button>
        </div>
        
    </div>
   
    
</div>';
        }}
  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/firstpagestyle.css">
    <!-- link to semantic UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"> 
    <!-- other link for more styles -->

    
    <title>Elegant Fashion</title>
</head>
<body>
    <div class="container">
    <?php 
        if(!isset($_SESSION["login"]) || $_SESSION["login"] == 0){
            echo '<div class="intro" style="background-image: url(backtest.jpg);">
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
            <div class="firstinfo">
               
                <div class="talking">
                    <h1>
                        People will stare.
                        <br> Make it worth their while.
                    </h1>
                    <p> 
                        Humor is a big part of my style. You have to be willing to fall on your face a bit, <br>
                         to be that fashion roadkill. <br>
                        I know so many people who are die-hard  <br> fashion people who are way more educated than I am .
                        
                    </p>
        
                    <button id ="firstbut" >
                        Explore Us
                    </button>
                    <button id = "secondbut" onclick="jumpOffer()">
                        Offers
                    </button>
                </div>
                
            </div>
           
            
        
            </div>';
        }    
        ?>
        

        <div class="offers">
            <div class="imgoffer">
              <a href="info.php?id=<?php echo 4001?>&category=offers">
                <img src="./photos/outfits-offers/4001.png" alt="firstimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
               
                <p>
                    <span style="color: red;" class="spanprice"> $ 90 </span> <span class="spanprice" style="text-decoration: line-through;">$300 </span>
                </p>
                
            </div>
            <div class="imgoffer">
               <a href="info.php?id=<?php echo 4002?>&category=offers">
                <img src="./photos/outfits-offers/4002.png" alt="thirdimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                
                <p>
                    <span style="color: red;" class="spanprice"> $ 590 </span> <span class="spanprice" style="text-decoration: line-through;">$750 </span>
                </p>
            </div>
            <div class="imgoffer">
            <a href="info.php?id=<?php echo 4003?>&category=offers">
                <img src="./photos/outfits-offers/4003.png" alt="secondimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
               
                <p>
                    <span style="color: red;" class="spanprice"> $ 810 </span> <span class="spanprice" style="text-decoration: line-through;">$1400 </span>
                </p>
            </div>
            <div class="imgoffer">
            <a href="info.php?id=<?php echo 4004?>&category=offers">
                <img src="./photos/outfits-offers/4004.png" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
               
                <p>
                    <span style="color: red;" class="spanprice"> $ 5040 </span> <span class="spanprice" style="text-decoration: line-through;">$6900 </span>
                </p>
            </div>
            <div class="imgoffer">
            <a href="info.php?id=<?php echo 4005?>&category=offers">
                <img src="./photos/outfits-offers/4005.png" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                
                <p>
                    <span style="color: red;" class="spanprice"> $ 210 </span> <span class="spanprice" style="text-decoration: line-through;">$510 </span>
                </p>
            </div>
            <div class="imgoffer">
            <a href="info.php?id=<?php echo 4006?>&category=offers">
                <img src="./photos/outfits-offers/4006.png" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
               
                <p>
                    <span style="color: red;" class="spanprice"> $ 320 </span> <span class="spanprice" style="text-decoration: line-through;">$610 </span>
                </p>
            </div>
            <div class="imgoffer">
            <a href="info.php?id=<?php echo 4007?>&category=offers">
                <img src="./photos/outfits-offers/4007.png" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
               
                <p>
                    <span style="color: red;" class="spanprice"> $ 875 </span> <span class="spanprice" style="text-decoration: line-through;">$1000 </span>
                </p>
            </div>
            <div class="imgoffer">
            <a href="info.php?id=<?php echo 4008?>&category=offers">
                <img src="./photos/outfits-offers/4008.png" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                
                <p>
                    <span style="color: red;" class="spanprice"> $ 25 </span> <span class="spanprice" style="text-decoration: line-through;">$100</span>
                </p>
            </div>
            <div class="imgoffer">
            <a href="info.php?id=<?php echo 4009?>&category=offers">
                <img src="./photos/outfits-offers/4009.png" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                
                <p>
                    <span style="color: red;" class="spanprice"> $ 750 </span> <span class="spanprice" style="text-decoration: line-through;">$1220 </span>
                </p>
            </div>
            <div class="imgoffer">
                <a href="info.php?id=<?php echo 4010?>&category=offers">
                <img src="./photos/outfits-offers/4010.png" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
              
                <p>
                    <span style="color: red;" class="spanprice"> $ 128 </span> <span class="spanprice" style="text-decoration: line-through;">$400 </span>
                </p>
            </div>
            <!--  -->
            <div class="imgoffer">
                <a href="info.php?id=<?php echo 4011?>&category=offers">
                <img src="./photos/outfits-offers/4011.png" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
              
                <p>
                    <span style="color: red;" class="spanprice"> $ 150 </span> <span class="spanprice" style="text-decoration: line-through;">$400 </span>
                </p>
            </div>
            <div class="imgoffer">
                <a href="info.php?id=<?php echo 4012?>&category=offers">
                <img src="./photos/outfits-offers/4012.png" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
              
                <p>
                    <span style="color: red;" class="spanprice"> $ 700 </span> <span class="spanprice" style="text-decoration: line-through;">$400 </span>
                </p>
            </div>
           
        </div>


        <div class="outfit">
            <div class="imgaccessor">
                <a href="info.php?id=<?php echo 3001?>&category=Accessories">
                <img src="./photos/Accessories/3001.png">
                <h4>
                    Dior
                </h4>
                <p class="accesstitle">
                    Glitter gloden Choker switch <br>
                       - Gold
                </p>
                
                <p>
                    <span style="color: red;" class="spanprice"> $ 200 </span> <span class="spanprice" style="text-decoration: line-through;">$450 </span>
                </p>
            </div>
            <div class="imgaccessor">
            <a href="info.php?id=<?php echo 3002?>&category=Accessories">
                <img src="./photos/Accessories/3002.png">
                <h4>
                    Versace
                </h4>
                <p class="accesstitle">
                    Glitter gloden Choker necklace <br>
                       - Gold
                </p>
               
                <p>
                    <span style="color: red;" class="spanprice"> $ 150 </span> <span class="spanprice" style="text-decoration: line-through;">$345 </span>
                </p>
            </div>
            <div class="imgaccessor">
                <a href="info.php?id=<?php echo 3003?>&category=Accessories">
                <img src="./photos/Accessories/3003.png">
                <h4>
                    Falabella
                </h4>
                <p class="accesstitle">
                    Glitter black Choker bag <br>
                       - Black
                </p>
               
                <p>
                    <span style="color: red;" class="spanprice"> $ 850 </span> <span class="spanprice" style="text-decoration: line-through;">$1000 </span>
                </p>
            </div>
            <div class="imgaccessor">
               <a href="info.php?id=<?php echo 3004?>&category=Accessories">
                <img src="./photos/Accessories/3004.png">
                <h4>
                    Channel
                </h4>
                <p class="accesstitle">
                    Glitter Silver Choker earring <br>
                       - Silver
                </p>
                
                <p>
                    <span style="color: red;" class="spanprice"> $ 150 </span> <span class="spanprice" style="text-decoration: line-through;">$200 </span>
                </p>
            </div>
            <div class="imgaccessor">
                <a href="info.php?id=<?php echo 3005?>&category=Accessories">
                <img src="./photos/Accessories/3005.png">
                <h4>
                    Native Union
                </h4>
                <p class="accesstitle">
                    Party Accessories for men <br>
                       - Brown and Black
                </p>
                
                <p>
                    <span style="color: red;" class="spanprice"> $ 50 </span> <span class="spanprice" style="text-decoration: line-through;">$110 </span>
                </p>
            </div>
            <!--  -->
            <div class="imgaccessor">
                <img src="./photos/Accessories/3006.png">
                <h4>
                    Gucci Glasses
                </h4>
                <p class="accesstitle">
                    Glasses for men <br>
                       - Brown and Black
                </p>
                
                <p>
                    <span style="color: red;" class="spanprice"> $ 100 </span> <span class="spanprice" style="text-decoration: line-through;">$200 </span>
                </p>
            </div>
        </div>

        <div class="imageslider">

            <img src="./photos/imgslid/1.jpg" alt="first" class = 'imggg'>
            <img src="./photos/imgslid/2.jpg" alt="second" class = 'imggg'>
            <img src="./photos/imgslid/3.jpg" alt="third"  class = 'imggg'>
            <img src="./photos/imgslid/4.jpg" alt="four"  class = 'imggg'>
            <img src="./photos/imgslid/5.jpg" alt="five"  class = 'imggg'>
            <img src="./photos/imgslid/6.jpg" alt="six"  class = 'imggg'>

        </div>
        
        <div class="brands">
            <h2>TRENDING PARTS</h2>
            <div class="firstlinebrand">
                <a href="https://www.carhartt.com/" target="_blank"><img class = 'hoverbrand' src="/photos/brands/carhartt-hp-logos-256x256.webp" alt="" onclick=""></a>
                <a href="https://www.drmartens.com/intl/en/" target="_blank"><img class = 'hoverbrand' src="./photos/brands/dr-martens-hp-logos-256x256.webp" alt=""></a>
            </div>
            <div class="secondlinebrand">
                <a href="https://www.ellesse.com/uk/en" target="_blank"><img class = 'hoverbrand' src="./photos/brands/ellesse-hp-logos-256x256.webp" alt=""></a>
                <a href="https://www.nike.com/il/?cp=57171225505_search_|nike|10581748924|108582395430|e|c|EN|pure|451964682366&gclsrc=aw.ds&&gclid=CjwKCAiAv4n9BRA9EiwA30WNDwezFYlgJ1hVGcsxZGqwyF2BIIRz4TUCfuBa6jmxg54RNy9v1Bl9dRoCUAMQAvD_BwE&gclsrc=aw.ds" target="_blank"><img class = 'hoverbrand' src="./photos/brands/nike-hp-logos-256x256.webp" alt=""></a>
                <a href="https://www.thenorthface.com/" target="_blank"><img class = 'hoverbrand' src="./photos/brands/north-face.webp" alt=""></a>
                <a href="https://usa.tommy.com/en/" target="_blank"><img class = 'hoverbrand' src="./photos/brands/tommy-hilfiger-hp-logos-256x256.webp" alt=""></a>
            </div>
        </div>
        
    </div>
    <script src="./javascript/firstpage.js"></script>
</body>


</html>