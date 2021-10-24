<?php

echo '<table border="1">';
echo '<tr>';
echo '<th></th>';
echo '<th>Register ID</th>';
echo '<th>Name</th>';
echo '<th>Address</th>';
echo '<th>Gender</th>';
echo '<th>City</th>';
echo '<th>Profile Image</th>';
echo '</tr>';


$host='localhost';
$user='root';
$pass='';
$db='practicedb';

$con = mysqli_connect($host,$user,$pass) or die ("Error");
mysqli_select_db($con,$db);

$query = "select * from tbl_registration";  
//echo $query;
$result= mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
$registerid=$row["RegisterID"];
$imagename = $row["ProfilePhoto"];
$imgpath="upload/".$imagename;
	echo '<tr>';
	echo '<td><a href="DesignForm.php">Insert</a> |<a href="DeleteRecord.php?id22='.$registerid.'">Delete</a> | <a href="UpdateRecord.php?id='.$registerid.'">Update</a></td>';
	echo '<td>'.$row["RegisterID"].'</td>';
	echo '<td>'.$row["Name"].'</td>';
	echo '<td>'.$row["Address"].'</td>';
	echo '<td>'.$row["Gender"].'</td>';
	echo '<td>'.$row["City"].'</td>';
	echo '<td><a href='.$imgpath.' target="_blank"><img src='.$imgpath.' width=50px></a></td>';
	echo '</tr>';
}


echo '</table>';
mysqli_close($con);


?>