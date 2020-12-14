
<?php 

$db = new mysqli('localhost' , 'root' , '' , 'webproject');
if(mysqli_connect_errno()){
    echo 'Error connecting to the database'.$db->error;
}
$strquer = "select size from orderstable ";
$result = $db -> query($strquer);

$xxl = 0;
$xl = 0;
$large = 0;
$small = 0;
$medium = 0 ;

while($row = $result ->fetch_array()){
    if($row[0] == 'xxl'){
        $xxl += 1;
    }
    else if($row[0] == 'xl'){
        $xl +=1;
    }
    else if($row[0] == 'large'){
        $large += 1;
    }
    else if($row[0] == 'small'){
        $small +=1;
    }
    else if($row[0] == 'medium'){
        $medium += 1;
    }
}

$data = array();
$data[0] = $xxl;
$data[1] = $xl;
$data[2] = $large ;
$data[3] = $medium ;
$data[4] = $small;
print json_encode($data);
?>