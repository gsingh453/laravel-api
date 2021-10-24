<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function checkmail(){
            var s, i;
            s=document.getElementById('email').value;
            var newstring= new string(s);
            var ans, ans1;
            ans=0,ans1=0;
            l=newstring.length;
            for(i=0;i<l;i++)
            {
                if(newstring.charAT(i)=="@")
                ans=ans+1;
                else
                if(newstring.charAT(i)==".")
                ans1=ans1+1;
            }
            
            if(!((ans==1 && ans1>=1) && l>7))
	        {

	        	alert("Plz enter valid email ID ");
		        document.form.txtemail.value="";
		        document.form.txtemail.focus();

	        }

        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>
<body>
<section class="contactus" id="contactid">
        <div class="container headings text-center">
          <h1 class="text-center font-weight-bold"> Contact us </h1>
          <p class="pt-1"> We're Here to help and answer any question </p>
        </div>
        <hr>

        <?php

        $msg="";

        if(isset($_GET['error']))
        {
          $msg= "Invalid date. Pls Correct it!!!!!";
          echo '<div class="alert alert-danger text-center">' .$msg.'</div>';
        }

    


         ?>




        <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 col-1">
      
       <form action="contactus2.php" method="POST">
            <div class="form-group my-1">
              <input type="text" class="form-control" placeholder="Enter name" name="name" required autocomplete="off">
             </div>
      
      
              <div class="form-group my-1">
                  <input type="email" class="form-control" name="email" placeholder="Enter email" id="email" required autocomplete="off" onblur="checkmail(this.value)">
              </div>
      
        
            <div class="form-group my-1">
                     <input type="number" class="form-control" name="mobile" placeholder="Enter mobile-number" required autocomplete="off">
             </div>
           
             <div class="form-group my-1">
                     <input type="date" class="form-control" name="date-to">
             </div>

             <div class="form-group my-1">
                     <input type="date" class="form-control" name="date-from">
             </div>
             
                <textarea class="form-control my-1" rows="4" name="message"  placeholder="Your message" required autocomplete="off"> </textarea>
        
      
                   <div class="d-flex justify-content-center p-4">
                       <button type="submit" class="btn btn-primary" name="button">Submit</button>
                   </div>
        
        </form>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>