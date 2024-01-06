<?php
    include_once('initSession.php');
    print_r($_SESSION['projectManager']);
    if(!empty($projectsManager->listOfProjects)){
        // foreach($projectsManager->listOfProjects as $project){
        //     echo "Project Name: ".$project->name."<br>";
        //     echo "Project Description: ".$project->description."<br>";
        //     echo "Project Duration: ".$project->duration."<br>";
        //     echo "Assigned Student: ".$project->student."<br>";
        //     echo "<br>";
        // }
    }
    else{
        echo "No projects to display";
    }
?>