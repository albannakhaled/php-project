<?php
include_once('initSession.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Students</title>
    <link rel="stylesheet" href="css/change-assignement-style.css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <label>Select a project</label>
            <select name="projectSelected">
                <?php
                foreach ($projectsManager->listOfProjects as $project) {
                    echo "<option value='{$project->name}'>{$project->name}</option>";
                }
                ?>
            </select>
            <input type="submit" name="display-student-assigned" value="Display">
            <br><br>
            <label>Select students to be changed</label>
            <br><br>
            <?php
                
            ?>
            <input type="submit" name="assign-students" value="Assign Students">
        </form>
        <form action="index.php">
            <input type="submit" value="Back to Home Page" name="back" class="back-btn">
        </form>
    </div>
</body>

</html>