<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="jpm";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Name=$_POST['Name'];
$Father=$_POST['Father'];
$Mother=$_POST['Mother'];
$doj=$_POST['doj'];
$dob=$_POST['dob'];
$Blood=$_POST['Blood'];
$Height=$_POST['Height'];
$Weight=$_POST['Weight'];
$Grade=$_POST['Grade'];
//Execute the query
$sql="INSERT INTO student (Name,Father,Mother,doj,dob,Blood,Height,Weight,Grade) VALUES ('$Name','$Father','$Mother','$doj','$dob','$Blood','$Height','$Weight','$Grade')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="student.php">GO BACK</a>