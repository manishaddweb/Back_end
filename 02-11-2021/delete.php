<?php

include "con.php";

    $id=$_GET['sid'];
    $sql="delete from admin where id='$id'";
    $query1=mysqli_query($con,$sql);
    if($query1)
    {
        header("Location:index.php");
    }
?>