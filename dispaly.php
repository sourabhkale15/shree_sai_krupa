<?php

include_once("connect.php");

$sql =" SELECT email FROM form WHERE emaii ='$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
   $row=mysqli_fetch_assoc($result);
   echo $row;
    
}



?>