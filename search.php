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



//if(isset($_POST['xy'])){

    $artist_names = $_POST['namesearch'];
    $qry1="SELECT * FROM `artist_details` WHERE artist_name= '$artist_names' ";

    $result =mysqli_query($conn,$qry1) or die("bad query");
    #echo{"$res=mysqli_fetch_array($result)"};
    echo"<table border='1'>";
    while($row=mysqli_fetch_assoc($result)){
          echo $row['artist_id'];
          echo $row['artist_email'];
     }

//}
/*else{
    header("Location: index.html");
    exit();
}*/








?>
