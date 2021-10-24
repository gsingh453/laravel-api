<?php

echo '<table border="1" align="center" cellspacing="2" cellpadding="2">';

echo '<tr>';
echo '<th>ID</th>';
echo '<th>FirstName</th>';
echo '<th>LastName</th>';
echo '<th>Gender</th>';
echo '<th>City</th>';
echo '<th>Username</th>';
echo '<th>Password</th>';
echo '<th>Profile Img</th>';
echo '</tr>';

$host="localhost";
$user="root";
$pass="";
$db="profiledb";

$con=mysqli_connect($host,$user,$pass) or die("Error");
mysqli_select_db($con,$db);

$query="SELECT * FROM profile";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{
    $filename= $row['profile_img'];
    $path="upload/".$filename;

    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['firstname'].'</td>';
    echo '<td>'.$row['lastname'].'</td>';
    echo '<td>'.$row['gender'].'</td>';
    echo '<td>'.$row['City'].'</td>';
    echo '<td>'.$row['username'].'</td>';
    echo '<td>'.$row['password'].'</td>';
    // echo '<td><a href='.$path.' target="_blank"><img src='.$path.' width=100px></a></td>';
    echo '<td><a href="'.$path.' target="_blank"><img src='.$path.' width=100px></a></td>';


    echo '</tr>';

}





echo '</table>';


?>