<?php

// host
// username
// password
// database
$conn=new mysqli("localhost","root","","mydb");


if($conn ->connect_error){
    echo $conn->error;
 } else {
   //  echo "success";
 }

?>