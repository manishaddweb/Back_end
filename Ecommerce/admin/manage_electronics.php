<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
<meta charset="utf-8">
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
    
    <!-- CSS here -->
    
</head>
<body>
    
  <?php
  include("header.php");
  include("conn.php");

  $sql="select * from electronics";
$query=mysqli_query($con,$sql);
?>
<h2 align=center>ELECTRONICS</h2>

<table align=center style="width:90%;border: 3px solid coral;" cellpadding=10 cellspacing=5>
<tr>
<th>PRO ID</th>
<th>CAT NAME</th>
<th>PRO NAME</th>
<th>PRO CODE</th>
<th>PRO PRICE</th>
<th>PRO IMAGE1</th>
<th>PRO IMAGE2</th>
<th>PRO COLOR</th>
<th>PRO SIZE</th>
<th>CAT WEIGHT</th>
<th>CAT DESC</th>
<th>CAT MATERIAL</th>
<th>CAT SHIPPING DESC</th>
<th colspan=2 style="text-align:center;">Action</th>

</tr>

<?php

while($data=mysqli_fetch_array($query))
{
    ?>
        <tr>
            <td><?php echo $data['p_id']; ?></td>
            <td><?php echo $data['cat_name']; ?></td>
            <td><?php echo $data['p_name']; ?></td>
            <td><?php echo $data['p_code']; ?></td>
            <td><?php echo $data['p_price']; ?></td>
            
            <td><img src="<?php echo $data['p_img1']; ?>" width="70" height="90"></td>
            <td><img src="<?php echo $data['p_img2']; ?>" width="70" height="90"></td>

            <td><?php echo $data['p_color']; ?></td>
            <td><?php echo $data['p_size']; ?></td>
            <td><?php echo $data['p_weight']; ?></td>
            <td><?php echo $data['p_desc']; ?></td>
            <td><?php echo $data['p_material']; ?></td>
            <td><?php echo $data['p_ship_desc']; ?></td>

            <td class='center'>
            <a href="edit_product.php?p_id=<?php echo $data['p_id'];?>" style="font-size:12px;background-color:green;padding:10px 15px;"> Edit</a>

<a href="delete_electronics.php?p_id=<?php echo $data['p_id'];?>" style="font-size:12px;background-color:red;padding:10px 15px;"> Delete</a>

			</td>
        </tr>
     <?php
}
echo "</table>";

mysqli_close($con);

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