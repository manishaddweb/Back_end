<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body style="background-color: pink;">
    <form method="post">
    <div class="container mt-5 pt-2 pb-3" style="width:40%;border: black solid 2px;">
	<h2 class="p-2 mb-3" style="border-bottom:5px solid green; width: 25%;">Log in</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><font style="color:red; border:none; font-size:20px;">If not Register ?</font><a href="register.php" style="text-decoration:none;">Click Here</a></label>
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  
  <input type="submit" class="btn btn-success" name="insert" value="Submit">

</form>
</div>

</body>
</html>

<?php
//session_start();

if(isset($_POST['insert']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
  include "con.php";

    $sql="select email,password from admin where email='$email' and password='$password'";
    $query=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($query)>0)
    {
        session_start();
        $_SESSION['email']=$email;
        header("Location:index.php");
        echo "welcome";
    }
    else
    {
      echo "Authentication Failed";
    }
mysqli_close($con);
  }

?>