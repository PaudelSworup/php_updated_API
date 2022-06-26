<?php 

if(isset($_POST)){
    $name = $_POST['name'];
    $image = $_POST['imageUrl'];
    $rating = $_POST['rating'];
    $src = $_POST['source'];
    $dest = $_POST['destination'];
    $dates = $_POST['date'];
    $days = $_POST['days'];
    $userID = $_POST['uid'];

    $con = mysqli_connect("localhost","root","","project");

    if($con){
   $query = "select * from vehiclerequest where name ='".$name."' and firebase_id='".$userID."'";
    $res =  mysqli_query($con,$query);
    $num = mysqli_num_rows($res);
   if($num > 0){
       return;
   }else{
    $insert = "insert into vehiclerequest(name,image,rating,source,destination,pickup_date,rentalday,firebase_id) values ('$name','$image','$rating','$src','$dest','$dates','$days','$userID')";
    mysqli_query($con,$insert);

   }
}
}

 




?>