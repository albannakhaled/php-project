<?php
    include_once ('initSession.php');
    if (isset($_POST['submit'])) {
        if(!empty($_POST['fname']&&$_POST['lname'])){
            $student = new Student($_POST['fname'], $_POST['lname']);
            $projectsManager -> listOfStudents[] = $student;
        }

        
    }
    if(isset($_POST['back'])) {
        header("location:index.php");
    }
    include_once ("enterStudent.php");
?>