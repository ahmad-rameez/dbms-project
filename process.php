

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

$artist_name = $_POST['artist_name'];
$artist_age = $_POST['artist_age'];
$artist_gender = $_POST['artist_gender'];
$artist_phone = $_POST['artist_phone'];
$artist_email =  $_POST['artist_email'];

$sql = "INSERT INTO artist_details (artist_name, artist_age, artist_gender, artist_phone, artist_email)
VALUES ('$artist_name','$artist_age','$artist_gender','$artist_phone','$artist_email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:insertDetails.html");
$conn->close();
?>
