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

  }

  else
  {
      echo"File is not submitted";
  }



        $name=$_POST['name'];
        $role=$_POST['role'];


        $host="localhost";
        $user="root";
        $pass="";
        $db="cleanx";


        $con=mysqli_connect($host,$user,$pass) or die('Error');
         mysqli_select_db($con,$db);

         $query="INSERT INTO admin(name,Role,profile_img) values ('$name','$role','$fname')";
         $result= mysqli_query($con,$query);

         if($result)
                {

                  echo '<h2>Your record is completed</h2>';

                }

                 else

                {
                   echo '<h2>Something Wrong</h2>';
                }

  mysqli_close($con);


?>