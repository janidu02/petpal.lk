<?php
include 'connect.php';


if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM adoption WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
       header('location:Adoption Request.html');
    }else{
        die(mysqli_error($conn));
    }
}

?>
