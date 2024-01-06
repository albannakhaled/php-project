<?php
include_once('initSession.php');
print_r($_SESSION['projectManager']);
// display Project selected With Student in table
?>
    <table border="1">
        <tr>
            <th>
            <?php
            foreach ($projectsManager->listOfStudents as $student) {
                echo "<td>{$student->firstName}</td>";
            }
            ?>
            </th>
        </tr>
        <?php
        foreach ($projectsManager->listOfProjects as $project) {
            echo "<tr><td>{$project->name}</td>";
            foreach ($projectsManager->listOfStudents as $student) {
                // check x where student is assigned to project
                
            }
            echo "</tr>";
        }
        ?>
    </table>
    <!-- if (isset($_POST['assign-project'])) { ?>