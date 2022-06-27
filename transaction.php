<?php

if(isset($_POST)){
    $id = $_POST['id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $fid = $_POST['fid'];

    $con = mysqli_connect("localhost","root","","project");
    if($con){
        $insert = "insert into transaction(date,amount,name,fid)values('$date','$amount','$name','$fid')";
        mysqli_query($con,$insert);
        $delete_query = "delete from userrequest where id = '$id'";
        $delete =  mysqli_query($con,$delete_query);
    }

}

?>