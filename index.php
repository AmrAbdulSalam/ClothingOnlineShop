<?php 
    session_start();
    
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
        <div class="intro" style="background-image: url('backtest.jpg');">
            <nav>
                <ul>
                    <span><b id = 'bigname'>ELEGANT</b></span>
                    <li><a href="index.php"><i class=" home icon"></i>Home</a></li>
                    <li><a href="menpage.php"><i class="male icon"></i>Men</a></li>
                    <li><a href="Women.php"><i class="female icon"></i>Women</a></li>
                    <li><a href="kids.php"> <i class="child icon"></i>Kids</a></li>
                    <li><a href="test.php"><i class="upload icon"></i>Upload Design</a></li>
                    <li class = 'movetoRight1'><a id = 'logincolor'href="login.php">Log in</a></li>
                    <li class = 'movetoRight2'><a href="signup.php">Sign up</a></li>
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
    
                    <button id ='firstbut'>
                        Explore Us
                    </button>
                    <button id = 'secondbut' onclick="jumpOffer()">
                        Offers
                    </button>
                </div>
                
            </div>
           
            

        </div>
        

        <div class="offers">
            <div class="imgoffer">
                <img src="./photos/outfits-offers/1.jpg" alt="firstimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count1')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count1'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 90 </span> <span class="spanprice" style="text-decoration: line-through;">$300 </span>
                </p>
                
            </div>
            <div class="imgoffer">
                <img src="./photos/outfits-offers/3.jpg" alt="thirdimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count2')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count2'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 590 </span> <span class="spanprice" style="text-decoration: line-through;">$750 </span>
                </p>
            </div>
            <div class="imgoffer">
                <img src="./photos/outfits-offers/2.jpg" alt="secondimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count3')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count3'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 810 </span> <span class="spanprice" style="text-decoration: line-through;">$1400 </span>
                </p>
            </div>
            <div class="imgoffer">
                <img src="./photos/outfits-offers/4.jpg" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count4')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count4'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 5040 </span> <span class="spanprice" style="text-decoration: line-through;">$6900 </span>
                </p>
            </div>
            <div class="imgoffer">
                <img src="./photos/outfits-offers/7.jpeg" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count5')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count5'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 210 </span> <span class="spanprice" style="text-decoration: line-through;">$510 </span>
                </p>
            </div>
            <div class="imgoffer">
                <img src="./photos/outfits-offers/12.jpeg" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count6')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count6'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 320 </span> <span class="spanprice" style="text-decoration: line-through;">$610 </span>
                </p>
            </div>
            <div class="imgoffer">
                <img src="./photos/outfits-offers/5.jpg" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count7')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count7'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 875 </span> <span class="spanprice" style="text-decoration: line-through;">$1000 </span>
                </p>
            </div>
            <div class="imgoffer">
                <img src="./photos/outfits-offers/11.webp" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count8')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count8'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 25 </span> <span class="spanprice" style="text-decoration: line-through;">$100</span>
                </p>
            </div>
            <div class="imgoffer">
                <img src="./photos/outfits-offers/9.jpg" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count9')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count9'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 750 </span> <span class="spanprice" style="text-decoration: line-through;">$1220 </span>
                </p>
            </div>
            <div class="imgoffer">
                <img src="./photos/outfits-offers/8.jpeg" alt="fourthimg">
                <h4>
                    Gucci Outfit
                </h4>
                <p class="offertitle">
                    Outfit is made of leather <br>
                     also was designed by lacci afraio.
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count10')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count10'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 128 </span> <span class="spanprice" style="text-decoration: line-through;">$400 </span>
                </p>
            </div>
           
           
        </div>


        <div class="outfit">
            <div class="imgaccessor">
                <img src="./photos/Accessories/switch.jpg">
                <h4>
                    Dior
                </h4>
                <p class="accesstitle">
                    Glitter gloden Choker switch <br>
                       - Gold
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="liked('liked')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <!-- <a class="ui basic red left pointing label" id = 'count11'>
                          0
                        </a> --> 
                        <span class="liked">Liked</span>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 200 </span> <span class="spanprice" style="text-decoration: line-through;">$450 </span>
                </p>
            </div>
            <div class="imgaccessor">
                <img src="./photos/Accessories/necklace.jpg">
                <h4>
                    Versace
                </h4>
                <p class="accesstitle">
                    Glitter gloden Choker necklace <br>
                       - Gold
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count12')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count12'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 150 </span> <span class="spanprice" style="text-decoration: line-through;">$345 </span>
                </p>
            </div>
            <div class="imgaccessor">
                <img src="./photos/Accessories/bag.jpg">
                <h4>
                    Falabella
                </h4>
                <p class="accesstitle">
                    Glitter black Choker bag <br>
                       - Black
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count13')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count13'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 850 </span> <span class="spanprice" style="text-decoration: line-through;">$1000 </span>
                </p>
            </div>
            <div class="imgaccessor">
                <img src="./photos/Accessories/earring.jpg">
                <h4>
                    Channel
                </h4>
                <p class="accesstitle">
                    Glitter Silver Choker earring <br>
                       - Silver
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count14')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count14'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 150 </span> <span class="spanprice" style="text-decoration: line-through;">$200 </span>
                </p>
            </div>
            <div class="imgaccessor">
                <img src="./photos/Accessories/partAccess.jpg">
                <h4>
                    Native Union
                </h4>
                <p class="accesstitle">
                    Party Accessories for men <br>
                       - Brown and Black
                </p>
                <div class="lovecounter">
                    <div class="ui labeled button" tabindex="0" onclick="addOneLike('count15')">
                        <div class="ui red button">
                          <i class="heart icon"></i> Like
                        </div>
                        <a class="ui basic red left pointing label" id = 'count15'>
                          0
                        </a>
                      </div>
                </div>
                <p>
                    <span style="color: red;" class="spanprice"> $ 50 </span> <span class="spanprice" style="text-decoration: line-through;">$110 </span>
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