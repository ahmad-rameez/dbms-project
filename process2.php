<?php
$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password,'mydb1');

if($conn->connect_error) {
  die("Connection error:".$conn->connect_error);
}
echo "Connected successfully";

$title = $_POST['title'];
$year = $_POST['year'];
$price = $_POST['price'];
$artist_name = $_POST['artistname'];

$sql = "INSERT INTO artwork_details(title, year, price, artist_name)VALUES ('$title','$year','$price','$artist_name')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:insertDetails.html");
$conn->close();
?>
