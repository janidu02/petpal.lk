<?php

include 'connect.php';
if(isset($_GET['deleteid'])){
   $Pet_ID=$_GET['deleteid']; 

   $sql="DELETE FROM `petdetails` WHERE Pet_ID=$Pet_ID";

   $result=mysqli_query($conn,$sql);
   if ($result){
    //echo "Deleted Successfull";
    header('location:Account.php');
   }else  {
    die(mysqli_error($conn));
   }
}
