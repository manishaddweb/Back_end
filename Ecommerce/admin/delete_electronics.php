
<?php
include("conn.php");
    $p_id=$_GET["p_id"];
    $sql1="delete from electronics where p_id='$p_id'";
    if(!mysqli_query($con,$sql1))
    {
        ?>
            <script>
                alert("Item Not Deleted");
            </script>
        <?php
    }
    else
    {
        header("Location:manage_electronics.php");
    }
?>
