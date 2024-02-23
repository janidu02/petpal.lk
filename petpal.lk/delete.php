<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM contact WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
       header('location:contact.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>
