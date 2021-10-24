<?php

echo '<table border="1">';
echo '<tr>';

echo '<th>ID</th>';
echo '<th>FirstName</th>';
echo '<th>LastName</th>';
echo '<th>Gender</th>';
echo '<th>City</th>';
echo '<th>UserName</th>';
echo '<th>Password</th>';
echo '</tr>';


$host="localhost";
$user= "root";
$pass="";
$db="logindb";

$con=mysqli_connect($host,$user,$pass) or die('Errors');
mysqli_select_db($con,$db);

$query="SELECT * FROM tbl_register";
$result= mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{
    echo '<tr>';
    echo '<td>'.$row['RegisterID'].'</td>';
    echo '<td>'.$row['firstname'].'</td>';
    echo '<td>'.$row['lastname'].'</td>';
    echo '<td>'.$row['gender'].'</td>';
    echo '<td>'.$row['city'].'</td>';
    echo '<td>'.$row['username'].'</td>';
    echo '<td>'.$row['password'].'</td>';


    echo '</tr>';

}

echo '</tabel>';

?>