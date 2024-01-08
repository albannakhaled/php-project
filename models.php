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
}
?>
