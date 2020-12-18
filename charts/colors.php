<?php 
    $db = new mysqli('localhost' , 'root'  , '' , 'webproject');
    if(mysqli_connect_errno()){
        echo 'error connecting to the database'.$db->error;
    }

    $str = 'select color from orderstable';
    $result = $db -> query($str);

    $red = 0;
    $black = 0;
    $green = 0;
    $orange = 0;
    $gray = 0;
    $blue = 0;

    while($row = $result->fetch_array()){
        if($row[0] == 'red'){
            $red +=1;
        }
        else if($row[0] == 'black'){
            $black +=1;
        }
        else if($row[0] == 'green'){
            $green +=1;
        }
        else if($row[0] == 'orange'){
            $orange +=1;
        }
        else if($row[0] == 'gray'){
            $gray +=1;
        }
        else if($row[0] == 'blue'){
            $blue +=1;
        }
    }

    $data = array();
    $data[0] = $red ;
    $data[1] = $black ;
    $data[2] = $green ;
    $data[3] = $orange ;
    $data[4] = $gray ;
    $data[5] = $blue ;
    print json_encode($data);
?>