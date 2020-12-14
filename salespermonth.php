
<?php 

$db = new mysqli('localhost' , 'root' , '' , 'webproject');
if(mysqli_connect_errno()){
    echo 'Error connecting to the database'.$db->error;
}

$data = array();

for($i = 0 ; $i < 12 ; $i++){
    $strquer = "select username from orderstable where MONTH(date) = $i+1";
    $result = $db -> query($strquer);
    $data[$i] = $result->num_rows;
}
print json_encode($data);