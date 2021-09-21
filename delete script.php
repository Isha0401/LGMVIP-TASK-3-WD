<?php
$conn=mysqli_connect("localhost","root","","result") or die(mysqli_error($conn));
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name= mysqli_real_escape_string($conn,$_POST['name']);
$rollno=$_POST["rollno"];
$cgpa=$_POST["cgpa"];

$sql = "DELETE FROM `result` WHERE rollno='$rollno' AND name='$name'";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted";
} else {
       
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

