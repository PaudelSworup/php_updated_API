<?php 

if(isset($_GET)){

    $con = mysqli_connect("localhost","root","","project");
    $select_query = "select * from userrequest";
    $response = array();
    
    if($con){
    
    $raw = mysqli_query($con,$select_query);
    while($res = mysqli_fetch_array($raw)){
        $data [] = $res;
        $response = json_encode(['results' => $data]);   
    }  
    if($response){
        header('Content-Type: application/json');   
        print($response);  
    }
    }else echo "failed to connected";
   
 }
   




?>