<?php 
$con=mysqli_connect("localhost","root","","result") or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task-3</title>
        <style>
            .button{
                width: 70%;
                height: 30px;
                background-color: blue;
                color: white;
                margin-top: 50px;
                margin-left: 100px;
                margin-bottom: 20px;
            }
            .button:hover{
               
                background-color: white;
                color: darkgreen;
            }
            input{
                border: ridge;
            }
            label{
                margin-left: 100px;
            }
             body{
                background-image: url('5.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="panel" style="margin: 100px 300px 0px 300px; background-color: lightgray; opacity: 0.8;">
            <div class="panel-body">
                <h1 style="margin-left: 200px; color: black">Delete Student Result</h1>
                <form action="delete script.php" method="post">
                     <label>Enter Students's Name:</label><input type="text" name="name" required style="margin-left: 15px;"><br><br>
                    <label>Enter Student's RollNo: </label><input type="text" name="rollno" required><br><br>
                    <label>CGPA: </label><input type="number" name="cgpa" required><br><br>
                    <input type="submit" class="button" name="Delete">
                </form>
                
                    
                </div>
        </div>
    </body>
</html>

