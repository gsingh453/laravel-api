<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$username=$_POST['username'];
$password=$_POST['password'];
$key="email";





///username encrypt start///////////////////

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
///username encrypt end///////////////////



$host="localhost";
$user="root";
$pass="";
$db="logindb";

$con=mysqli_connect($host,$user,$pass) or die("Error");
mysqli_select_db($con,$db);

$query="INSERT INTO tbl_register (firstname,lastname,gender,city,username,password) values ('$firstname','$lastname','$gender','$city','$username','$result1')";
$result=mysqli_query($con,$query);

if($result)
{
    echo "Successfully data inserted";
}

 else
    {
        echo" Not saved";

    }
 mysqli_close($con);


?>