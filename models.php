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
    public $takenProjects = [];
    public $takenStudents = [];
    

    public function checkIfProjectTaken($project){
        if(!in_array($project, $this->record)){
            return true;
        }
        return false;
    }
    public function checkIfStudentTaken($student){
        if(in_array($student, $this->takenStudents)){
            return true;
        }
        return false;
    }
    // check if project has more 2 students
    public function checkIfProjectFull($project){
        if(count($this->record[$project]) >= 2){
            return true;
        }
        return false;
    }
}
?>
