<?php
session_start();

echo '<table for="table cellpading="1"  cellspacing="2" align="center">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>NAME</th>';
echo '<th>SEX</th>';
echo '<th>CITY</th>';
echo '<th>ADDRESS</th>';
echo '<th>ACTION</th>';
echo '</tr>';

$host="localhost";
$user="root";
$pass="";
$db="cruddb";

$con=mysqli_connect($host,$user,$pass) or die("Errors");
mysqli_select_db($con,$db);

$query="SELECT * FROM crud";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{

$id=$row['id'];

    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>' .$row['name'].'</td>';
    echo '<td>' .$row['sex']. '</td>';
    echo '<td>'. $row['city'].'</td>';
    echo '<td>'. $row['address'].'</td>';
    echo '<td> <a href="crudshow.php">SHOW</a> || <a href="crudupdate.php?id22='.$id.'">UPDATE</a> || <a href="cruddelete.php">DELETE</a></td>';
}
echo '</tr>';
mysqli_close($con);
?>