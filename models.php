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
    public $record = [];
    

    // display project not selected by any student
    public function displayAvailableProjects(){
        $availableProjects = [];
        foreach($this->listOfProjects as $project){
            if(!in_array($project->name, array_keys($this->record))){
                $availableProjects[] = $project;
            }
        }
        return $availableProjects;
    }

   // check if student has a project
    public function checkStudentProject($student){
        foreach($this->record as $project => $students){
            if(in_array($student, $students)){
                return $project;
            }
        }
        return false;
    }
    // display student not assigned to any project
    public function displayAvailableStudents(){
        $availableStudents = [];
        foreach($this->listOfStudents as $student){
            if(!$this->checkStudentProject("{$student->firstName} {$student->lastName}")){
                $availableStudents[] = $student;
            }
        }
        return $availableStudents;
    }
    // delete student from project
    public function deleteStudentFromProject($project, $student){
        $key = array_search($student, $this->record[$project]);
        unset($this->record[$project][$key]);
    }
    // add student to project
    public function addStudentToProject($project, $student){
        $this->record[$project][] = $student;
    }
}
?>
