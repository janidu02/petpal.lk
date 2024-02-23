<?php
include 'connect.php';


if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM book_appoinment WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
       header('location:displayAppoinment.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>