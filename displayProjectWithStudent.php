<?php
include_once ('initSession.php');

//to dispaly the sheets table
echo "<table border=1>";
echo "<tr><td></td>";

foreach($projectsManager->listOfStudents as $key => $value ) {  // display the students names in the first row
	echo "<td>".$value->firstName."</td>";
}

foreach( $projectsManager->listOfProjects as $key => $value) { 		// display the projects names in the first column
	 
	echo "<tr>";
	echo "<td>". $value->name."</td>";
	$concat = array($value->firstName,$value->lastName) ;
	
		foreach($projectsManager->record as $key => $value ){        
        // display the X if the student is assigned to the project
            if(in_array($concat,$value)){
                echo "<td>X</td>";
            }else{
                echo "<td></td>";
            }
	
	}
	echo "</tr>";
	
}

echo "</table>";


?>