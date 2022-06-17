<?php 

if(isset($_GET)){

    $con = mysqli_connect("localhost","root","","project");
    $select_query = "select * from vehiclerequest";
    $response = array();
    
    if($con){
        echo "connected";   
    }else echo "failed to connected"; 
    $raw = mysqli_query($con,$select_query);
    while($res = mysqli_fetch_array($raw)){
        if($res){
            echo "not null"
            $data [] = $res;
            $response = json_encode(['results' => $data]);  
        }else{
            echo "not null"
            return
        }
         
    }  
    header('Content-Type: application/json');   
    print($response);
}


?>