<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
        include("header.php");
    ?>
    
    <form method="post" enctype="multipart/form-data">
    <div class="container mt-5 pt-2 pb-3" style="width:40%;border: black solid 2px;">
	<h2 class="p-2 mb-3" style="border-bottom:5px solid blue; width: 25%;">Product</h2>
    
    <div class="mb-3">
        <label class="form-label">Select Category</label>
        <select class="form-select" name="category">
            <option class="" disabled selected>SELECT</option>
            <?php
									include("conn.php");
									$q="select distinct cat_name from category";
									$p=mysqli_query($con,$q);
									while($res=mysqli_fetch_assoc($p))
									{
									 echo "<option value='". $res['cat_name'] ."'>" .$res['cat_name'] ."</option>"; 
								
                }
						?>
        </select>
      </div>

    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="pro_name" class="form-control" id="exampleInputtext" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Code</label>
        <input type="text" name="pro_code" class="form-control" id="exampleInputtext" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Price</label>
        <input type="text" name="pro_price" class="form-control" id="exampleInputtext" required>
      </div>


  <div class="mb-3">
    <label for= class="form-label">Product Image 1</label>
    <input type="file" name="pro_image1" class="form-control input-file uniform_on" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for= class="form-label">Product Image 2</label>
    <input type="file" name="pro_image2" class="form-control input-file uniform_on" id="exampleInputPassword1">
  </div>
 
  <div class="mb-3">
        <label class="form-label">Product Color</label>
        <input type="text" name="pro_color" class="form-control" id="exampleInputtext" required>
      </div>

      

      <div class="mb-3">
        <label class="form-label">Product Size</label>
        <select class="form-select" name="pro_size">
            <option class="" disabled selected>SELECT SIZE</option>
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
            <option value="Two Thirds">Two Thirds</option>
            <option value="Third Thirds">Thirds Thirds</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="XXXL">XXXL</option>
              </select>
              </div>          

      <div class="mb-3">
        <label class="form-label">Product Weight</label>
        <input type="text" name="pro_weight" class="form-control" id="exampleInputtext" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Description</label>
        <textarea name="pro_desc" rows="5" class="form-control" id="exampleInputtext" required></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Material</label>
        <textarea name="pro_material" rows="5" class="form-control" id="exampleInputtext" required></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Shipping Description</label>
        <textarea name="pro_ship_material" rows="5" class="form-control" id="exampleInputtext" required></textarea>
      </div>

      

      <input type="submit" class="btn btn-success mt-5 p-4" style="margin-left:36%;background-color:green;" name="product" value="Submit">
    
      <?php
        if(isset($_POST['product']))
        {
          include("conn.php");
          
          $cat_name=$_POST["category"];
          $p_name=$_POST['pro_name'];
          $p_code=$_POST['pro_code'];
          $p_price=$_POST['pro_price'];

          $img_name1=$_FILES["pro_image1"]["name"];
          $img_tmpname1=$_FILES["pro_image1"]["tmp_name"];
          $image1 = "../upload/" . $img_name1;

          $img_name2=$_FILES["pro_image2"]["name"];
          $img_tmpname2=$_FILES["pro_image2"]["tmp_name"];
          $image2 = "../upload/" . $img_name2;
          
          $p_color=$_POST['pro_color'];
          $p_size=$_POST['pro_size'];
          $p_weight=$_POST['pro_weight'];
          $p_desc=$_POST['pro_desc'];
          $p_material=$_POST['pro_material'];
          $p_ship_material=$_POST['pro_ship_material'];
          
         $sql="insert into $cat_name(cat_name,p_name,p_code,p_price,p_img1,p_img2,p_color,p_size,p_weight,p_desc,p_material,p_ship_desc) values('$cat_name','$p_name','$p_code','$p_price','$image1','$image2','$p_color','$p_size','$p_weight','$p_desc','$p_material','$p_ship_material')";
       // echo $sql;
         move_uploaded_file($img_tmpname1, $image1); 
         move_uploaded_file($img_tmpname2, $image2); 
         
//        echo $sql;
         
         $query=mysqli_query($con,$sql);
          if(!$query)
          {
            ?>
            <script>
              alert("Not Inserted");
            </script>
            <?php
          }
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