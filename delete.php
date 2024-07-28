<?php include 'header.php'; 

$sid=$_POST['sid'];


$conn=mysqli_connect("localhost","root","","crud");

if($conn){
    echo "Connection successful!";
}else{
    echo "connection unsuccessfull";
}

$sql="DELETE FROM student WHERE sid = {'$sid'}";


$result=mysqli_query($con,$sql);

if($result){
    echo "query succesful";
}else{
    echo"query not working";
}


?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
