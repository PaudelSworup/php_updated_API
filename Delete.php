<?php

if(isset($_POST)){

    $id = $_POST['fid'];

    $con = mysqli_connect("localhost","root","","project");
   
    if($con){
        $delete_query = "delete from vehiclerequest where id = '$id'";
        $delete =  mysqli_query($con,$delete_query);

       if($delete){
        echo "deleted";
       }else  echo "url failed";
    
    }
}




?>