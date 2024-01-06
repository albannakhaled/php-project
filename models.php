<?php

class Project{
    public $name;
    public $description;
    public $duration;
    public function __construct($name, $description, $duration){
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
    }
}

class Student{
    public $firstName;
    public $lastName;
    public function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

class ProjectManager{
    public $listOfProjects = [] ;
    public $listOfStudents = [];

    public function getStudentByProject($projectName){
        $studentList = array();
        foreach($this->listOfStudents as $student){
            if($student->project == $projectName){
                array_push($studentList, $student);
            }
        }
        return $studentList;
    }

    public function getProjectByStudent($studentName){
        $projectList = array();
        foreach($this->listOfProjects as $project){
            if($project->student == $studentName){
                array_push($projectList, $project);
            }
        }
        return $projectList;
    }
    public function getAllStudents(){
        return $this->listOfStudents;
    }
    public function getAllProjects(){
        return $this->listOfProjects;
    }
}
?>
