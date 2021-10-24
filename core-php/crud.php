<?php
Session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$host="localhost";
$user="root";
$pass="";
$db="logindb";

$con=mysqli_connect($host,$user,$pass) or die("Error");
mysqli_select_db($con,$db);

$query="SELECT * FROM tbl_register where username='$username' and password='$password'";
$result=mysqli_query($con,$query);

if($row=mysqli_fetch_array($result))
{
    if($username==$row['username'] && $password==$row['password'])
    {
        if(isset($username) && isset($password))
        {
           $_session['application']=true;
           header('Location:main.php');
        }
    }
}

else{
    echo '<h1>Invalid Username and password</h1>';
}

?>