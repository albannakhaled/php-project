<?php
//when a new attendance is created

include_once ('initSession.php');  

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (isset($_POST['projectSelected']) && isset($_POST['select-student']))
	{
		
		foreach($_POST['select-student'] as $check)
		{

			foreach ($projectsManager->listOfStudents as $key => $value)
			{
				
				if($key == $check)
				{	
				
					$projectsManager->record[$_POST['projectSelected']][] = array($value->firstName, $value->lastName);
				}
				
			}	
		
		}	
	}
	else 
		echo "You should to enter a sheet date";
}
include_once("index.php");
?>