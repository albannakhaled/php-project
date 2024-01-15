<?php 
    include_once('initSession.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Projects</title>
    <link rel="stylesheet" href="css/assign-project-to-student-style.css">
</head>
<body>
    <div class="container">
        <?php if (!empty($projectsManager->listOfProjects)) : ?>
            <form action="assignController.php" method="post">
                <label>Select a project</label>
                <select name="projectSelected">
                    <!-- display project not taken -->
                    <?php foreach ($projectsManager->displayAvailableProjects() as $project) : ?>
                        <option value="<?php echo $project->name; ?>"><?php echo $project->name; ?></option>
                    <?php endforeach; ?>
                </select>
                <br><br>
                <label>Select students for the project</label>
                <br><br>
                <!-- display student not taken -->
                <?php foreach ($projectsManager->displayAvailableStudents() as $student) : ?>
                    <input type="checkbox" name="select-student[]" value="<?php echo $student->firstName." ".$student->lastName; ?>"><?php echo $student->firstName . ' ' . $student->lastName; ?><br>
                <?php endforeach; ?>
                <input type="submit" name="assign-students" value="Assign Students">
                <!-- <input type="submit" name="check" value="check nb of student"> -->
            </form>
        <?php else : ?>
            <p>No projects available</p>
        <?php endif; ?>

        <br><br>

        <form action="index.php">
            <input type="submit" value="Back to home page" name="back" class="back-btn">
        </form>
    </div>
</body>
</html>
