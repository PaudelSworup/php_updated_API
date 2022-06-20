<?php 

if(isset($_GET)){

    $con = mysqli_connect("localhost","root","","project");
    $select_query = "select * from vehiclerequest";
    $response = array();
    
    if($con){
        $raw = mysqli_query($con,$select_query);
        while($res = mysqli_fetch_array($raw)){
            if($res){
                echo "resultIsNotNull";
                $data [] = $res;
                $response = json_encode(['results' => $data]);  
                header('Content-Type: application/json');   
                print($response);
            }    
        }   
    }else echo "failed to connect"; 
   

    
   
}



?>