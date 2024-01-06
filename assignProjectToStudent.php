<?php
include_once('initSession.php');
print_r($_SESSION['projectManager']);
if (!empty($projectsManager->listOfProjects)) {
    ?>

    <form method="post">
        <label>Select a Project</label>
        <select name="selected_project">
            <?php
            // Display available projects in the dropdown
            foreach ($projectsManager->listOfProjects as $project) {
                echo "<option value=\"{$project->name}\">{$project->name}</option>";
            }
            ?>
        </select>
        <br>
        <br>

        <label>
            <h3>Select Students</h3>
        </label><br>
        <?php
        // Display checkboxes for available students
        // Should the user select 2 students at max when pressing submit

        foreach ($projectsManager->listOfStudents as $student) {
            echo "<input type=\"checkbox\" name=\"selected_students[]\" value=\"{$student->firstName} {$student->lastName}\">{$student->firstName} {$student->lastName}<br>";
        }
        ?>
        <br>
        <input type="submit" value="Assign Project" name="assign-project">
        <?php
        if (isset($_POST['assign-project'])) {
            // Check if selected_students is set before accessing its count
            if (isset($_POST['selected_students']) && count($_POST['selected_students']) > 2) {
                echo "You can select only 2 students";
            }
        }
        ?>
    </form>
<?php } else {
    echo "No projects to display";
}
?>
