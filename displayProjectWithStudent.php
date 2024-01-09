<?php
include_once('initSession.php');

// Check if the session variable is set
if (isset($_SESSION['projectManager'])) {
    // Access the project manager object from the session
    $projectsManager = $_SESSION['projectManager'];
    
    // Print the records in the project manager
    print_r($projectsManager->record);

    // Display the project selected with students in a table
    ?>
    <table border="1">
        <tr>
            <th></th>
            <?php
            // Print project names as table headers
            foreach ($projectsManager->listOfStudents as $student) {
                echo "<th>{$student->firstName} {$student->lastName}</th>";
            }
            ?>
        </tr>

        <?php
        // Print student names and X sign for selected projects
        foreach ($projectsManager->listOfProjects as $project) {
            echo "<tr><td>{$project->name}</td>";
            foreach ($projectsManager->listOfStudents as $student) {
                if (isset($projectsManager->record[$project->name])) {
                    if (in_array(array($student->firstName, $student->lastName), $projectsManager->record[$project->name])) {
                        echo "<td>X</td>";
                    } else {
                        echo "<td></td>";
                    }
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <br>

    <form action="index.php">
        <input type="submit" value="Back to Home Page" name="back">
    </form>
<?php
} else {
    echo "Session variable 'projectManager' is not set.";
}
?>
