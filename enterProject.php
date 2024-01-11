<?php 
    include_once('initSession.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter a Project</title>
    <link rel="stylesheet" href="css/enter-project-style.css">
</head>
<body>
    <div class="container">
        <h2>Enter a project</h2>
        <form method="post" action="enterProjectController.php">
            <label>Project Name:</label>
            <input type="text" name="project_name" required>
            <br>
            <label>Project Description:</label>
            <textarea name="project_description" required></textarea>
            <br>
            <label>Project Duration:</label>
            <input type="text" name="project_duration" required>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <form action="index.php">
            <input type="submit" value="Back to Home Page" name="back" class="back-btn">
        </form>
    </div>
</body>
</html>
