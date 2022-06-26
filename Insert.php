<?php

if(isset($_POST)){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['imageURL'];
    $dest = $_POST['dest'];
    $dates = $_POST['date'];
    $days = $_POST['rentalDays'];
    $fid = $_POST['fid'];
    $amount = $_POST['amt'];

    $con = mysqli_connect("localhost","root","","project");

    if($con){
        echo "connected";
        $insert = "insert into userrequest(name,destination,image,rental_days,dates,fid,amount) values ('$name','$dest','$image','$days','$dates','$fid','$amount')";   
        mysqli_query($con,$insert);
        $delete_query = "delete from vehiclerequest where id = '$id'";
        mysqli_query($con,$delete_query);
    }else echo " Failed to connect";
}

?>