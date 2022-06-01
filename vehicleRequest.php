<?php 

if(isset($_POST)){
    $name = $_POST['name'];
    $image = $_POST['imageUrl'];
    $rating = $_POST['rating'];
    $src = $_POST['source'];
    $dest = $_POST['destination'];
    $days = $_POST['days'];
    $userID = $_POST['uid'];

    $con = mysqli_connect("localhost","root","","project");

    if($con){
        echo "connected";
    }

    $insert = "insert into vehiclerequest(name,image,rating,source,destination,rentalday,firebase_id) values ('$name','$image','$rating','$source','$dest','$days','$userID')";
    mysqli_query($con,$insert);


}


?>