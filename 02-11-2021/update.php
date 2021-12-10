<?php
session_start();
include "con.php";

if($_SESSION['email']=='')
{
    header('Location:login.php');
}
else
{
    $id=$_GET['sid'];
    $sql="select name from admin where email='$email'";
    $query1=mysqli_query($con,$sql);
    $row1=mysqli_fetch_array($query1);
    

    $sql1="select * from admin where id='$id'";
    $query2=mysqli_query($con,$sql1);
    $row2=mysqli_fetch_array($query2);

    $sname=$row2['name'];
    $email=$row2['email'];
    $password=$row2['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: pink;">
 

<!-- Register form starts -->

<form method="POST">
    <div class="container mt-5" style="width:40%;border: black solid 2px;">
       
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Full Name</label>
        <input type="text" name='fname' class="form-control" value="<?php echo $sname ?>" id="exampleInputtext" required>
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email ?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $password ?>" id="exampleInputPassword1" required>
      </div>
     
      
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><font style="color:red; border:none; font-size:20px;">If Register ?</font><a href="login.php" style="text-decoration:none;">Click Here</a></label>
        <div id="emailHelp" class="form-text"></div>
      </div>
      
      <input type="submit" class="btn btn-success" name="insert" value="Update">
      
    </form>
    </div>

<!-- Register form ends -->
</body>
</html>

<?php
    if(isset($_POST['insert']))
    {
        $nam=$_POST['fname'];
        $emai=$_POST['email'];
        $pass=$_POST['password'];
        include "con.php";

        $sql2="update admin set name='$nam',email='$emai',password='$pass' where id='$id' ";
        $query=mysqli_query($con,$sql2);

        if($query)
        {
            header("Location:index.php");
        }
        else
        {
            echo "Updation Error";
        }
        mysqli_close($con);
    }
?>