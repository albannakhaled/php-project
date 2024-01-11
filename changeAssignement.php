<?php
    include_once('initSession.php');
    // select project
    // select student to be changed
    // update student
    // assign a new student to the edited project
    
    // write the code
?>

<!-- select project -->
<html>
    <body>
    <form action="" method="post">
        <label>Select a project</label>
        <select name="projectSelected">
            <?php
            foreach ($projectsManager->listOfProjects as $project) {
                echo "<option value='{$project->name}'>{$project->name}</option>";
            }
            ?>
        </select>
        <input type="submit" name="display-student-assigned" value="display">
        <br><br>
        <label>Select students to be changed</label>
        <br><br>
        <?php
        if(isset($_POST['display-student-assigned'])){
            $projectSelected = $_POST['projectSelected'];
            foreach ($projectsManager->record[$projectSelected] as $student) {
                echo "<input type='checkbox' name='studentSelected[]' value='{$student[0]} {$student[1]}'>{$student[0]} {$student[1]}<br>";
            }
        }
        ?>
        <input type="submit" name="assign-students" value="Assign Students">
    </form>
    </body>
</html>



