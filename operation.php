<?php

include 'conn.php';

// when we need to registar

// post aydoo la arkeyn
// get
if(isset($_POST['insert'])){
    $studentId=$_POST['student_id'];
    $studentName=$_POST['student_name'];
    $studentClass=$_POST['student_class'];
    // preparing Query
    $query="INSERT INTO student(id,name,class) VALUES('$studentId',
    '$studentName','$studentClass')";
    // -- excute query
    $result=$conn->query($query);
    if($result){
        echo "Registered succesfully";
        header("location: list.php");
    } else{
        echo $conn->error;
    }
} else if(isset($_POST['update'])){
    $studentId=$_POST['student_id'];
    $studentName=$_POST['student_name'];
    $studentClass=$_POST['student_class'];
    // preparing Query
    $query="UPDATE student set name='$studentName',class='$studentClass' WHERE id='$studentId' ";
    // -- excute query
    $result=$conn->query($query);
    if($result){
        echo "successfully registered";
        header("location: list.php");
    } else{
        echo $conn->error;
    }
 } 
 if(isset($_GET['id'])){
    $studentId=$_GET['id']; 
    $query="DELETE FROM  student  WHERE id='$studentId' ";   
    $result=$conn->query($query);
    if($result){
        echo "successfully registered";
        header("location: list.php");
    } else{
        echo $conn->error;
    }
 }

?>