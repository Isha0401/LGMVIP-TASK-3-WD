<?php
$conn=mysqli_connect("localhost","root","","result") or die(mysqli_error($conn));
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name= mysqli_real_escape_string($conn,$_POST['name']);
$rollno=$_POST['rollno'];
$cgpa=$_POST['cgpa'];
$sql = "INSERT INTO `result`(`name`,`rollno`,`cgpa`) VALUES ('$name','$rollno','$cgpa')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
