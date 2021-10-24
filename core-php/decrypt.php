<?php

$username=$_POST['username'];
$password=$_POST['password'];
$key="email";




$result1=encrypt($password,$key);
// echo $result1;


function encrypt($password,$key)
{
    $result='';
    for($i=0;$i<strlen($password);$i++)
    {
        $char=substr($password,$i,1);
        $keychar=substr($key,$i,1);

        $char= chr(ord($char)+ ord($keychar));
        $result .=$char;

    }
    return base64_encode($result);
   

}

///decrypt end


$host="localhost";
$user="root";
$pass="";
$db="logindb";

$con=mysqli_connect($host,$user,$pass) or die("Error");
mysqli_select_db($con,$db);

$query="SELECT * FROM tbl_register where username='$username' and password='$result1'";
$result=mysqli_query($con,$query);

if($row=mysqli_fetch_array($result))
{
    if($username==$row['username'] && ( $result1==$row['password']))
    {
        if(isset($username) && isset($result1))
        {
           echo"This is your main page";
        }
    }
}

else
{
    echo "Invalid username and password";
}

mysqli_close($con);


?>