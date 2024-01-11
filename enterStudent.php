<?php 
    include_once('initSession.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter a Student</title>
    <link rel="stylesheet" href="css/enter-student-style.css">
</head>
<body>
    <div class="container">
        <h2>Enter a Student</h2>
        <form method="post" action="enterStudentController.php">
            <label>First Name:</label>
            <input type="text" name="fname" required>
            <br>
            <label>Last Name:</label>
            <input type="text" name="lname" required>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <form action="index.php">
            <input type="submit" value="Back to Home Page" name="back" class="back-btn">
        </form>
    </div>
</body>
</html>
