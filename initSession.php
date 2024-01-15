<?php
    include_once ('models.php');
    session_start();
    // session_destroy();

    if(!isset($_SESSION['projectManager'])){
        $_SESSION['projectManager'] = new ProjectManager();
    }
    $projectsManager = &$_SESSION['projectManager'];


    print_r($projectsManager->record);
?>
