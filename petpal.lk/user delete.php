<?php

include 'connect.php';
session_start();
if(isset($_GET['deleteid'])){
   $ID=$_GET['deleteid']; 

   $sql="DELETE FROM `user` WHERE ID=$ID";

   $result=mysqli_query($conn,$sql);
   if ($result){
    //echo "Deleted Successfull";
    session_destroy();
    header('location:login.php');

   }else  {
    die(mysqli_error($conn));
   }
}
