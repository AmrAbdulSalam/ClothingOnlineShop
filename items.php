<?php 
   
    session_start();
    $user =  $_SESSION['username'];
    $db = new mysqli('localhost' , 'root' , '' , 'webproject');
    if(isset($_GET['id']) && isset($_GET['date'])){
        $id = $_GET['id'];
        $da = $_GET['date'];
        $str = "delete from orderstable where (username = '$user' && productid = $id && date = '$da')";
        $res = $db ->query($str);
    }
    $str = "select productid , date from orderstable where username = '$user'";
    $result = $db->query($str);
   
    
    // echo $men;
    // echo '<br>';
    // echo $women;
    // echo '<br>';
    // echo $kids;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/women.css">
    <link rel="stylesheet" href="./style/items.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Document</title>
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
                    <li class = "movetoRight1"><a id = "logincolor"href="login.php?logout=true" >Log out</a></li>
                    <li class = "movetoRight2"><a href="#"><?php echo $_SESSION['username']?></a></li>
                </ul>
    
            </nav>
        </div>
        <div class="ui cards stuff" id = 'items'>
        <!-- <div class="card">
                <div class="content">
                <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
                <div class="header">
                    Elliot Fu
                </div>
                <div class="meta">
                    Friends of Veronika
                </div>
                <div class="description">
                    Elliot requested permission to view your contact details
                </div>
                </div>
                <div class="extra content">
                <div class="ui two buttons">
                    <form action="items.php">
                        <input type="submit" value ="Decline" class="ui basic red button" name = "submit">
                    </form>
                </div>
                </div>
            </div> -->
                
        </div>
</body>
</html>


<?php 
    while($row = $result ->fetch_assoc()){
        $cat =  $row['productid'];
        $pro = $row['productid'] ;
        $cat = $cat / 1000;
        $cat = floor($cat);
        if($cat == 5){ 
        $str = "select info , imgsrc , title from mendatapage where imgid = '$pro'";
        $menquer = $db->query($str);
        $menquer = $menquer -> fetch_assoc();
?>
<script>
    document.getElementById('items').insertAdjacentHTML('afterbegin', "<div class='card'> <div class='content'> <img class='right floated mini ui image' src=<?php echo $menquer['imgsrc']?>> <div class='header'> <?php echo $menquer['title']?></div> <div class='meta'> <?php echo $row['date']?></div> <div class='description'> <?php echo $menquer['info']?>></div> </div> <div class='extra content'> <div class='ui two buttons'><a href = 'items.php?id=<?php echo $pro?> &date=<?php echo $row['date']?> '> <button class='ui basic red button'> Decline </button></a> </div> </div> </div>");
</script>
<?php 
    }
    if($cat == 6){ 
        $str = "select info , imgsrc , title from womendatapage where imgid = '$pro'";
        $womendata = $db->query($str);
        $womendata = $womendata -> fetch_assoc();

?>
<script>
    document.getElementById('items').insertAdjacentHTML('afterbegin', "<div class='card'> <div class='content'> <img class='right floated mini ui image' src=<?php echo $womendata['imgsrc']?>> <div class='header'> <?php echo $womendata['title']?></div> <div class='meta'> <?php echo $row['date']?></div> <div class='description'> <?php echo $womendata['info']?>></div> </div> <div class='extra content'> <div class='ui two buttons'> <a href = 'items.php?id=<?php echo $pro?> &date=<?php echo $row['date']?> '> <button class='ui basic red button'> Decline </button></a> </div> </div> </div>");
</script>
<?php 
    }
    if($cat == 7){ 
        $str = "select info , imgsrc , title from kidsdatapage where imgid = '$pro'";
        $kidsda = $db->query($str);
        $kidsda = $kidsda -> fetch_assoc();

?>
<script>
    document.getElementById('items').insertAdjacentHTML('afterbegin', "<div class='card'> <div class='content'> <img class='right floated mini ui image' src=<?php echo $kidsda['imgsrc']?>> <div class='header'> <?php echo $kidsda['title']?></div> <div class='meta'> <?php echo $row['date']?></div> <div class='description'> <?php echo $kidsda['info']?>></div> </div> <div class='extra content'> <div class='ui two buttons'> <a href = 'items.php?id=<?php echo $pro?> &date=<?php echo $row['date']?> '> <button class='ui basic red button'> Decline </button></a> </div> </div> </div>");
</script>
<?php 
    }
    }//while
?>