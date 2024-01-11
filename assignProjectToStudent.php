<?php 
include_once('initSession.php');
if (!empty($projectsManager->listOfProjects)) {
    ?>
    <form action="assignController.php" method="post">
        <label>Select a project</label>
        <select name="projectSelected">
            <?php
            foreach ($projectsManager->listOfProjects as $project) {
                echo "<option value='{$project->name}'>{$project->name}</option>";
            }
            ?>
        </select>
        <br><br>
        <label>Select students for the project</label>
        <br><br>
        <?php
        foreach ($projectsManager->listOfStudents as $key => $value) {
            echo "<input type='checkbox' name='select-student[]' value='{$key}'>{$value->firstName} {$value->lastName}<br>";
        }
        ?>
        <input type="submit" name="assign-students" value="Assign Students">
    </form>
<?php } else {
    echo "No projects available";
}
?>

<br><br>

<form action="index.php">
    <input type="submit" value="Back to home page" name="back">
</form>