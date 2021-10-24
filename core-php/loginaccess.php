<?php
$username=$_POST['username'];
$password= $_POST['password'];
$key='string';

//encrypted password start/////

$result1 = encrypt($password,$key);


function encrypt($password,$key){
    $result='';
    for($i=0;$i<strlen($password);$i++)
    {
        $char = substr($password,$i,1);
        $charkey= substr($key,$i,1);
        $char = chr(ord($char)+ ord($charkey));
        $result.=$char;
    }
    return base64_encode($result);
}

//encrypted password end/////

$$host="localhost";
$user="root";
$pass="";
$db="logindb";

$con=mysqli_connect($host,$user,$pass) or die('Errors');
mysqli_select_db($con,$db);

$query="SELECT * FROM tbl_register where username='$username' and password='$result1'";
$result=mysqli_query($con,$query);

if($row=mysqli_fetch_array($result))
{
        if($username==$row['username'] && $result1==$row['password'])
        {

            if(isset($username) && isset($result1))

            {

                echo header('Location:encryptmain3.php');

            }

            else

            {

                echo "Username and password invalid";

            }

        }
    
}mysqli_close($con);


?>