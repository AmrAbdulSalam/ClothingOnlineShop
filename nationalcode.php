
<?php 

    $db = new mysqli('localhost' , 'root' , '' , 'webproject');
    if(mysqli_connect_errno()){
        echo 'Error connecting to the database'.$db->error;
    }
    $strquer = "select nationalcode from orderstable ";
    $result = $db -> query($strquer);
    
    $palestine = 0;
    $jordan = 0;
    $lebanon = 0;
    $china = 0 ;
    $usa = 0;
    $others = 0 ;
    while($row = $result ->fetch_array()){
        if($row[0] == '970'){
            $palestine += 1;
        }
        else if($row[0] == '962'){
            $jordan +=1;
        }
        else if($row[0] == '961'){
            $lebanon += 1;
        }
        else if($row[0] == '86'){
            $china +=1;
        }
        else if($row[0] == '1'){
            $usa += 1;
        }
        else{
            $others += 1;
        }
    }
   
    $data = array();
    $data[0] = $palestine;
    $data[1] = $jordan;
    $data[2] = $lebanon ;
    $data[3] = $china ;
    $data[4] = $usa;
    $data[5] = $others;
    print json_encode($data);
?>