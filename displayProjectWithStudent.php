<?php
include_once('initSession.php');
// display Project selected With Student in table
if (isset($_POST['assign-project'])) { ?>
    <table border="1">
        <tr>
            <th>
            <td></td>
            <?php
            foreach ($projectsManager->listOfStudents as $student) {
                echo "<td>{$student->fname}</td>";
            }
            ?>
            </th>
        </tr>
        <?php
        foreach ($projectsManager->listOfProjects as $project) {
            if ($project->name == $_POST['selected_project']) {
                foreach ($projectsManager->listOfStudents as $student) {
                    foreach ($_POST['selected_students'] as $selectedStudent) {
                        if ($selectedStudent == $student->firstName . " " . $student->lastName) {
                            echo "<tr><td>{$project->name}</td><td>{$student->firstName} {$student->lastName}</td>";
                            foreach ($projectsManager->listOfStudents as $student) {
                                if ($selectedStudent != $student->firstName . " " . $student->lastName) {
                                    echo "<td></td>";
                                }
                            }
                            echo "</tr>";
                        }
                    }
                }
            }
        }
        ?>
    </table>

<?php } ?>