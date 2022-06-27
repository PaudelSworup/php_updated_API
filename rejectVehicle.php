<?php

if(isset($_POST)){

    $id = $_POST['id'];
  
     $con = mysqli_connect("localhost","root","","project");
     if($con){
        $delete_query = "delete from userrequest where id = '$id'";
        $delete =  mysqli_query($con,$delete_query);
    }
    
    }

?>