<?php


//--------------------------------------------------------upload image begin------------------------------

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
 echo"Error No File uploded";
 }
 




//---------------------------------upload image end------------------------------------------------------
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $gender=$_POST['gender'];
                $city=$_POST['city'];
                $username=$_POST['username'];
                $password=$_POST['password'];


                  $host="localhost";
                  $user="root";
                  $pass="";
                  $db="profiledb";

           $con=mysqli_connect($host,$user,$pass) or die("Error");
           mysqli_select_db($con,$db);

             $query="INSERT INTO profile(firstname,lastname,gender,city,username,password,profile_img) values('$firstname','$lastname','$gender','$city','$username','$password','$fname')";
              $result=mysqli_query($con,$query);

              if($result)
                {
                  header('Location:showprofile.php');

                  }
                 else
                 {
                   echo '<h2>Something Wrong</h2>';
                     }

  mysqli_close($con);
  ?>