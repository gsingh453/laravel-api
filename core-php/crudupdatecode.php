<?php
$id=$_GET['id33'];

$name=$_POST['name'];
$sex=$_POST['sex'];
$city=$_POST['city'];
$address=$_POST['address'];

$host="localhost";
$user="root";
$pass="";
$db="cruddb";

$con=mysqli_connect($host,$user,$pass) or die("Errors");
mysqli_select_db($con,$db);

$query="UPDATE crud set name='$name', sex='$sex', city='$city', address='$address' where id='$id'";
$result=mysqli_query($con,$query);

if($result){
    echo header('Location:main.php');

}
else{
    echo "Not update";

}
mysqli_close($con);



?>