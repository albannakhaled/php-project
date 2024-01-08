<?php
// When a new attendance is created
include_once('initSession.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['projectSelected']) && isset($_POST['select-student'])) {
        $selectedProject = $_POST['projectSelected'];

        // Initialize the project record if not exists
        if (!isset($projectsManager->record[$selectedProject])) {
            $projectsManager->record[$selectedProject] = array();
        }

        foreach ($_POST['select-student'] as $studentKey) {
            // Add the selected student to the project record
            $projectsManager->record[$selectedProject][] = $projectsManager->listOfStudents[$studentKey];
        }
    } else {
        echo "You should enter a sheet date";
    }
}

include_once("index.php");