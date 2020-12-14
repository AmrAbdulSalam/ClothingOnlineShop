<?php 
    $db = new mysqli('localhost' , 'root' , '' , 'webproject');

    if(mysqli_connect_errno()){
        echo 'error connecting to the database';
    }
    $category = 'womendatapage' ;
    $querystr = 'select * from '."$category";
    $result = $db -> query($querystr);
    $i = 0 ;

    session_start();

    if(isset( $_SESSION["login"])){
        if( $_SESSION["login"] == 1){
            echo '<div class="intro">
            <nav>
                <ul>
                    <span><b id = "bigname">ELEGANT</b></span>
                    <li><a href="index.php"><i class=" home icon"></i>Home</a></li>
                    <li><a href="menpage.php"><i class="male icon"></i>Men</a></li>
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
    <link rel="stylesheet" href="./style/women.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Women || Fashion</title>
</head>
<body>
<?php 
        if(!isset($_SESSION["login"]) || $_SESSION["login"] == 0){
            echo '<div class="intro">
            <nav>
                <ul>
                    <span><b id = "bigname">ELEGANT</b></span>
                    <li><a href="index.html"><i class=" home icon"></i>Home</a></li>
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

    <div class="picture firstpage" >
        <div class="ui four column grid first" style="padding-left: 20px;padding-right: 20px;padding-top: 20px;" id = 'test1'>
         
        </div>
    </div>

    <div class="picture secondpage" >
        <div class="ui four column grid first" style="padding-left: 20px;padding-right: 20px;padding-top: 20px;" id = 'test2'>
         
        </div>
    </div>



    <div class="arrowsbuttons">
      <i class="big arrow alternate circle left icon" id = 'prev' onclick="nextPage('prev')" ></i>
      <label for="" id = 'pagenum'>1</label>
      <i class="big arrow alternate circle right icon" id = 'next' onclick="nextPage('next')"></i>
    </div>

</body>

<script src="./javascript/women.js">
</script>

<?php 
    while($row = $result ->fetch_assoc()){
?>
<script>
    
    if(<?php echo $i ?> < 12 ){
        document.getElementById("test1").insertAdjacentHTML("afterbegin", '<div class="column"> <a href="info.php?id=<?php echo $row["imgid"]?>&category=womendatapage"> <div class="ui fluid card"> <div class="image"> <img src=<?php echo $row["imgsrc"] ?> id = "<?php echo $row["imgid"]?>" onmouseover="backToImage(<?php echo $row["imgid"]?>)" onmouseout="hoverPicture(<?php echo $row["imgid"]?>)" style="height: 365px; width: 356px;" > </div> <div class="content"> <a class="header"><?php echo $row["title"]?></a> </div> <p class = "content"> <?php echo $row["info"]?> <br> <br> <span class="price"> <?php echo $row ["price"]?> </span> <br> <span class="shipping"> <?php echo $row["shipping"]?> </span> </p> </div> </a> </div>');
    }
    else if (<?php echo $i ?> > 12  &&  <?php echo $i ?> < 24) {
        document.getElementById("test2").insertAdjacentHTML("afterbegin", '<div class="column"> <a href="info.php?id=<?php echo $row["imgid"]?>&category=womendatapage"> <div class="ui fluid card"> <div class="image"> <img src=<?php echo $row["imgsrc"] ?> id = "<?php echo $row["imgid"]?>" onmouseover="backToImage(<?php echo $row["imgid"]?>)" onmouseout="hoverPicture(<?php echo $row["imgid"]?>)" style="height: 365px; width: 356px;" > </div> <div class="content"> <a class="header"><?php echo $row["title"]?></a> </div> <p class = "content"> <?php echo $row["info"]?> <br> <br> <span class="price"> <?php echo $row ["price"]?> </span> <br> <span class="shipping"> <?php echo $row["shipping"]?> </span> </p> </div> </a> </div>');
    }
</script>
<?php 
    $i = $i + 1;
    }
   

?>
</html>