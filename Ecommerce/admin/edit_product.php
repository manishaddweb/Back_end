<?php
    
    include("conn.php");

    $p_id=$_GET["p_id"];
    $sql="select * from clothes where p_id='$p_id'";
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
        header("Location:manage_clothes.php");
    }

   
?>