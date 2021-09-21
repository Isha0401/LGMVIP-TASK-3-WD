<?php 

$conn=mysqli_connect("localhost","root","","result") or die(mysqli_error($conn));

if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}
session_start();
$rollno=$_POST["rollno"];
$name=$_POST["name"];
$sql = "SELECT * FROM `result`where name='$name';";
$result = $conn->query($sql);

if ($result-> num_rows >0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo 'name' . $row ['name'] . '<br>' . 'rollno:' . $row ['rollno'] . '<br>' . 'cgpa='. $row ['cgpa'] . '<br>'. '<br>';
       }
} 
$conn->close();
    ?>