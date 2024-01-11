<?php 
    include_once('initSession.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Your Page Title</title>
</head>
<body>

<div class="container mt-4">
    <h1>Project Management</h1>

    <ul class="list-group">
        <li class="list-group-item"><a href="enterProject.php" class="text-decoration-none">Enter a Project</a></li>
        <li class="list-group-item"><a href="enterStudent.php" class="text-decoration-none">Enter a Student</a></li>
        <li class="list-group-item"><a href="assignProjectToStudent.php" class="text-decoration-none">Assign project to Student</a></li>
        <li class="list-group-item"><a href="displayProjectWithStudent.php" class="text-decoration-none">Display project with student</a></li>
        <li class="list-group-item"><a href="changeAssignement.php" class="text-decoration-none">Change assignment for student</a></li>
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
