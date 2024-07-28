<?php 
$conn=mysqli_connect("localhost","root","","crud");
if($conn){
    echo "Connection successful";
}else{
    echo "Connection unsuccessfull";
}
?>
