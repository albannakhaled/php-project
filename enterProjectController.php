<?php
include_once ("initSession.php");

$errorMessage = "";
if (isset($_POST['submit'])) {
    if(!empty($_POST['project_name']&&$_POST['project_description']&&$_POST['project_duration'])){
        $project = new Project($_POST['project_name'], $_POST['project_description'], $_POST['project_duration']);
        $projectsManager->listOfProjects[] = $project;
    }
    else{
        switch(true){
            case empty($_POST['project_name']):
                $errorMessage = "Project name is required";
                break;
            case empty($_POST['project_description']):
                $errorMessage = "Project description is required";
                break;
            case empty($_POST['project_duration']):
                $errorMessage = "Project duration is required";
                break;
        }
    }
    
    

}
if (isset($_POST['back'])) {
	header("location:index.php");
}
include_once ("enterProject.php");

?>
