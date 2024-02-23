
<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "mypetpal";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Request = $_POST['Request'];

    $sql = "INSERT INTO adoption (ID, Full_Name, Home_Address, Email, Phone, Request) VALUES ('', '$Name', '$Address', '$Email', '$Phone', '$Request')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> 
        alert('Registration Successful'); 
        window.location.href='Adoption displayMessage .php?email=$Email';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

