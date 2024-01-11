<?php
    include_once ('initSession.php');
    if (isset($_POST['submit'])) {
        if(!empty($_POST['fname']&&$_POST['lname'])){
            $student = new Student($_POST['fname'], $_POST['lname']);
            $projectsManager -> listOfStudents[] = $student;
        }

        
    }
    include_once ("enterStudent.php");
?>