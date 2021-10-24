<?php
echo '<table border="1" align="center">';
echo '<tr>';

echo '<th>Id</th>';
echo '<th>Firstname</th>';
echo '<th>Lastname</th>';
echo '<th>Gender</th>';
echo '<th>City</th>';
echo '<th>Username</th>';
echo '<th>Password</th>';

echo '</tr>';

$host="localhost";
$user="root";
$pass="";
$db="logindb";

$con=mysqli_connect($host,$user,$pass) or die("Error");
mysqli_select_db($con,$db);

$query="Select * FROM tbl_register";
$result= mysqli_query($con,$query);




// echo $result1;

function decrypt($DecryptText,$Key)
{
	$result='';
	$string = base64_decode($DecryptText);
	for($i=0;$i<strlen($string);$i++)
	{
		$char = substr($string,$i,1);
		$keychar = substr($Key,($i%strlen($Key))-1,1);
		$char = chr(ord($char)-ord($keychar));
		$result .=$char;
	}
	return $result;
}

while($row=mysqli_fetch_array($result))
{
    $DecryptText=$row['password'];
    $Key ='value';
    $result1 = decrypt($DecryptText,$Key);
    echo '<tr>';
    echo '<td>'.$row['RegisterID'].'</td>';
    echo '<td>'.$row['firstname'].'</td>';
    echo '<td>'.$row['lastname'].'</td>';
    echo '<td>'.$row['gender'].'</td>';
    echo '<td>'.$row['city'].'</td>';
    echo '<td>'.$row['username'].'</td>';
    echo '<td>'.$result1.'</td>';
    echo '<td> <a href="update.php">Update</a>| <a href="delete.php">Delete</a>| <a href="insert.php">Insert</a></td>';


    echo '</tr>';
}

echo '</table>';
mysqli_close($con);


?>