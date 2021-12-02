
<?php
include("conn.php");
    $p_id=$_GET["p_id"];
    $sql2="delete from furniture where p_id='$p_id'";
    if(!mysqli_query($con,$sql2))
    {
        ?>
            <script>
                alert("Item Not Deleted");
            </script>
        <?php
    }
    else
    {
        header("Location:manage_furniture.php");
    }
?>