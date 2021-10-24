<?php
$id= $_GET['id22'];

$host="localhost";
$user="root";
$pass="";
$db="cruddb";

$con=mysqli_connect($host,$user,$pass) or die("Errors");
mysqli_select_db($con,$db);

$query="SELECT * from crud where id='$id'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
    $id= $row['id'];
    $name= $row['name'];
    $sex=$row['sex'];
    $city=$row['city'];
    $address=$row['address'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <title>Crudupdate</title>
</head>
<body>
    <div class="container col-lg-6">
        <div class="row">
            <form type="form" method="POST" text="center" action="crudupdatecode.php?id33=<?php echo $id;?>">
            <h1>Show FORM</h1>
            <div class="form-control">
                Name:<input type="text" name="name" value="<?php echo $name ?>" id="Name">
            </div>

            <div class="form-control">
                Sex: <input type="text" name="sex" value="<?php echo $sex ?>" id="sex">
                </div>

            <div class="form-control">
                <select name="city" id="city">

                <option value="Adelaide" <?php if($city=="Adelaide") {echo 'selected="selected"';} ?>>Adelaide</option>
                <option value="Brisbane" <?php if($city=="Brisbane"){echo 'selected="selected"';} ?>>Brisbane</option>
                <option value="Canberra" <?php if($city=="Canberra") { echo'selected="selected"';} ?>>Canberra</option>

                </select>
                </div>

                <div class="form-control">
                Address: <input type="text" name="address" value="<?php echo $address?>" id="address">
                </div>
                <button type="submit" value="submit">Button</button>
            </form>
        </div>
    </div>
    
</body>
</html>