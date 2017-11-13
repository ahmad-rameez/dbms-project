<?php
$servername = "localhost";
$username = "root";
$password = '';

// Create connection
$conn = new mysqli($servername, $username, $password, 'mydb1');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$p_email = $_POST['email'];
$p_sw = $_POST['psw'];
$psw_repeat = $_POST['psw-repeat'];

$sql = "INSERT INTO signup (email, psw, psw-repeat)
VALUES ('$p_email','$p_sw','$psw_repeat')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:insertDetails.html");
$conn->close();
?>
