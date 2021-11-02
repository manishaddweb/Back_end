<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: pink;">
 

<!-- Register form starts -->

<form method="POST">
    <div class="container mt-5" style="width:40%;border: black solid 2px;">
        <h2 class="p-2 mb-3" style="border-bottom:4px solid green; width: 15%;">Registration</h2>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Full Name</label>
        <input type="text" name='fname' class="form-control" id="exampleInputtext" required>
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required>
      </div>
      
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><font style="color:red; border:none; font-size:20px;">If Register ?</font><a href="login.php" style="text-decoration:none;">Click Here</a></label>
        <div id="emailHelp" class="form-text"></div>
      </div>
      
      <input type="submit" class="btn btn-success" name="insert" value="Submit">
    
    </form>
    </div>

<!-- Register form ends -->
</body>
</html>

<?php
// session_start();
include "con.php";
if(isset($_POST['insert']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="insert into admin(name,email,password) values('$fname','$email','$password')";
    $query=mysqli_query($con,$sql);

    if(!$query)
    {
        echo "Insertion Failed...!!";
    }
}
