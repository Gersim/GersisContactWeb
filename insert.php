<?php

$servername='localhost';
$username='root';
$password='';
$db= 'smsforms';

$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}





if(isset($_POST['submit'])){

  $fullName = $_POST['fullName'];
  $tittle = $_POST['tittle'];
  $descr = $_POST['descr'];

  $sql = "INSERT INTO message (full_name,tittle,description)
	 VALUES ('$fullName','$tittle','$descr')";

  if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>