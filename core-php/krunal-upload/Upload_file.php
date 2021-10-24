<?php
if((!empty($_FILES["f1"])) && ($_FILES['f1']['error']==0))
{
	//chk if the file is jpg image and its size is less than 350 kb.
	$fname=basename($_FILES['f1']['name']);
	$ext=substr($fname,strrpos($fname,'.')+1);
	
	
		$newname=dirname(__FILE__).'/upload/'.$fname;
		
		if(file_exists("upload/".$_FILES["f1"]["name"]))
		{
			echo $_FILES["f1"]["name"],"already exists";
		}
		else
		{
			move_uploaded_file($_FILES['f1']["tmp_name"],"upload/".$_FILES["f1"]["name"]);
			echo "stored in :"."upload/".$_FILES["f1"]["name"];
		}
		
		$name="Harish";
		$address="Punjab";
		$city="Ludhiana";
		$gender="Male";


$host='localhost';
$user='root';
$pass='';
$db='practicedb';

$con = mysqli_connect($host,$user,$pass) or die ("Error");
mysqli_select_db($con,$db);

$query = "INSERT INTO tbl_registration(Name,Address,Gender,City,Profile_Photo) values ('$name','$address','$gender','$city','$fname')";  
//echo $query;
$result= mysqli_query($con,$query);
  
 

if($result)
{
	echo "record saved";
}
else
{
	echo "Something went wrong!";
}
mysqli_close($con);
	
}
else
{
	echo "Error No File uploded";
}

?>