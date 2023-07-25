<?php
//include your connection file.
include 'conn.php';


if(isset($_POST['insert'])){
    $student_id =$_POST['student_id'];
    $student_name =$_POST['student_name'];
    $student_class =$_POST['student_class'];
    
    //create insert statement
    $query="INSERT INTO std VALUES('$student_id','$student_name',
    '$student_class')";
    
    //execute insert statement
    $result =$conn->query($query);
    
    //check your results
    if($result){
        echo "insert successfull";
        header("Location: list.php");
    }
    else{
        echo  $conn->error;
    }


}
else if(isset($_POST['update'])){
    $student_id =$_POST['student_id'];
    $student_name =$_POST['student_name'];
    $student_class =$_POST['student_class'];
    
    //create insert statement
    $query="UPDATE std set student_name ='$student_name' , student_class = '$student_class' WHERE student_id= '$student_id'";
    
    //execute insert statement
    $result =$conn->query($query);
    
    //check your results
    if($result){
        echo "updated successfull";
        header("location:list.php");
    }
    else{
        echo  $conn->error;
    }


}
if(isset($_GET['id'])){
    $student_id =$_GET['id'];
    
    //create insert statement
    $query="DELETE FROM std WHERE student_id= '$student_id'";
    
    //execute insert statement
    $result =$conn->query($query);
    
    //check your results
    if($result){
        echo "deleted successfull";
        header("location:list.php");
    }
    else{
        echo  $conn->error;
    }


}

