<?php
include_once ("initSession.php");

$errorMessage = "";
if (isset($_POST['submit'])) {
    if(!empty($_POST['project_name']&&$_POST['project_description']&&$_POST['project_duration'])){
        $project = new Project($_POST['project_name'], $_POST['project_description'], $_POST['project_duration']);
        $projectsManager->listOfProjects[] = $project;
    }
    else{
        $errorMessage = "Please fill all the fields";
    }
}
include_once ("enterProject.php");

?>
