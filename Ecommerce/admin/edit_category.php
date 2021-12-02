<?php
ob_start();
include "header.php";
include "conn.php";
{
    $cat_id=$_GET['cat_id'];
    
    $sql1="select * from category where cat_id='$cat_id'";
    $query2=mysqli_query($con,$sql1);
    $row2=mysqli_fetch_array($query2);

    
    $cat_name=$row2['cat_name'];
    $cat_image=$row2['cat_img'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 

<!-- Register form starts -->

<form method="POST">
    <h2 align=center>Update Category</h2>
    <div class="container mt-5" style="width:40%;border: black solid 2px;">
       
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category Name</label>
        <input type="text" name='cat_name' class="form-control" value="<?php echo $cat_name; ?>" id="exampleInputtext" required>
        <div id="emailHelp" class="form-text"></div>
      </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image</label>
        <td class='center'>
    
        <td class='center'><img src="<?php echo $cat_image; ?>" style='border : black dotted 2px;' height=100 width=100>
    </td>	
								
							
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category Image</label>
        <input type="file" name="cat_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text"></div>
      </div>     
      
    
      
      <input type="submit" class="btn btn-success" name="update" value="Update">
      
    </form>
    </div>



<?php
    if(isset($_POST['update']))
    {
        include "conn.php";
        $cat_name1=$_POST['cat_name'];

        $img_name=$_FILES["cat_image"]["name"];
   $img_tmpname=$_FILES["cat_image"]["tmp_name"];
   
   $image = "upload/".$img_name;
    
        

        $sql2="update category set cat_name='$cat_name1',cat_img='$image' where cat_id='$cat_id' ";
        echo $sql2;
        move_uploaded_file($img_tmpname, $image); 
        $query=mysqli_query($con,$sql2);

        if($query)
        {
            header("Location:manage_category.php");
        }
        else
        {
            ?>
             <script>
                alert("Updation Error");
            </script>
            <?php
        }
        mysqli_close($con);
    }
?>

 <!-- JS here -->

 <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>


</body>
</html>
