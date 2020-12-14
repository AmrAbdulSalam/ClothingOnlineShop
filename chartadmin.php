<?php
    session_start();
    if($_SESSION['admin'] != 1){
        header("location: info.php");
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/graph.css">
    <script src = 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js'></script>
    <title>Admin information </title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="login.php?logout=true">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container">
       <div class="bar">
            <canvas id="charts" width="700px">

            </canvas>
       </div>

       <div class="pie">
           <canvas id="piechart" width="700px">

           </canvas>
       </div>
    </div>
    <div class="container" >
       <div class="doughnut">
           <canvas id="doughnut" width="700px"  height="500px">

           </canvas>
       </div>

       <div class="line">
        <canvas id="line" class = 'linepre'  width="500px">
            
        </canvas>
    </div>
    </div>
</body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src = "./javascript/chart.js"></script>

</script>
</html>