<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "wishlist");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql = "SELECT * FROM user";
$a = $conn->query($sql);
if ( $a == TRUE) {
    echo "New successfully";
} else {	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

while ($row = mysqli_fetch_array($a))   
{  
echo "".$row['userid']."".$row['username']."".$row['password']."";
}



?>


<?php

if(isset($_POST['email'])){
	$em=$_POST['email'];
}

if(isset($_POST['name'])){
	$nam=$_POST['name'];
}

if(isset($_POST['pass'])){
	$pas=$_POST['pass'];
}

$sql = "INSERT INTO user(username,password,email) VALUES('$nam','$pas','$em')";
$a = $conn->query($sql);
if ( $a == TRUE) {
} else {	 
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>