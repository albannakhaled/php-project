<?php
    include_once ('models.php');
    session_start();

    if(!isset($_SESSION['projectManager'])){
        $_SESSION['projectManager'] = new ProjectManager();
    }
    $projectsManager = &$_SESSION['projectManager'];
?>
