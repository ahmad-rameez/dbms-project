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

$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$a_email = $_POST['email'];
$a_message = $_POST['message'];
$a_website = $_POST['website'];

$sql = "INSERT INTO contact  (f_name, l_name, a_email, a_message, a_website)
VALUES ('$fname','$lname','$email','$a_message','$website')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:index.html");
$conn->close();
?>
