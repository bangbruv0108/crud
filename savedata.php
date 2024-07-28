<?php

$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];

 $conn = mysqli_connect("localhost","root","","crud");

 if($conn){
    echo "success";
 }else{
    echo"false";
 }

 $sql="INSERT INTO student(sname,address,sclass,sphone)  VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

 $result=mysqli_query($conn,$sql);

 if($result){
    echo "query runned";
 }else{
    echo "query unsuccessful";
 }
 

 mysqli_close($conn);

?>