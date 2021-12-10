<?php
    
    include("conn.php");

    $cat_id=$_GET["cat_id"];
    $sql="delete from category where cat_id='$cat_id'";
    if(!mysqli_query($con,$sql))
    {
        ?>
            <script>
                alert("Item Not Deleted");
            </script>
        <?php
    }
    else
    {
        header("Location:manage_category.php");
    }



?>