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
            <hr>
            <label style="color: green;">Select students to be changed</label>
            <hr>
            <br><br>
            <!-- list all the project -->
            <?php
            if (isset($_POST['display-student-assigned'])) {
                $projectSelected = $_POST['projectSelected'];
                foreach ($projectsManager->record[$projectSelected] as $student) {
                    echo "<input type='checkbox' name='select-student[]' value='{$student}'>{$student}<br>";
                }
            }


            // delete student from project
            if (isset($_POST['delete-students'])) {
                $projectSelected = $_POST['projectSelected'];
                $studentsSelected = $_POST['select-student'];
                foreach ($studentsSelected as $student) {
                    $projectsManager->deleteStudentFromProject($projectSelected, $student);
                }
                echo "<p>Student deleted from project</p>";
                if(empty($projectsManager->record[$projectSelected])){
                    unset($projectsManager->record[$projectSelected]);
                }
            }            
            ?>
            <br>
            <hr>
            <label style="color: green;">Choose new available Student</label>
            <hr>
            <br><br>

            <!-- display the available student as a check box to assigned to the empty project -->

            <?php
            if (isset($_POST['display-student-assigned'])) {
                $projectSelected = $_POST['projectSelected'];
                $availableStudents = $projectsManager->displayAvailableStudents();
                foreach ($availableStudents as $student) {
                    echo "<input type='checkbox' name='select-student[]' value='{$student->firstName} {$student->lastName}'>{$student->firstName} {$student->lastName}<br>";
                }
            }

            // add student to project
            if (isset($_POST['add-students'])) {
                $projectSelected = $_POST['projectSelected'];
                $studentsSelected = $_POST['select-student'];
                foreach ($studentsSelected as $student) {
                    // test if the student to the project > 2
                    if (count($projectsManager->record[$projectSelected]) < 2) {
                        $projectsManager->addStudentToProject($projectSelected, $student);
                    } else {
                        echo "<p>Can't be added can project take 2 student max</p>";
                    }
                }
                echo "<p>Student added to project</p>";
            }
            ?>
            <br>
            <input type="submit" name="add-students" value="add student"><br>
            <input type="submit" name="delete-students" value="delete student">
        </form>
        <form action="index.php">
            <input type="submit" value="Back to Home Page" name="back" class="back-btn">
        </form>
    </div>
</body>

</html>