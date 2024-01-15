<?php
//when a new attendance is created

include_once ('initSession.php');  
	
	if(isset($_POST['assign-students']))
	{
		if(count($_POST['select-student']) > 2)
		{
			echo "<script>alert('You can only select 2 students for each project!')</script>";
			echo "<script>window.location.href='assignProjectToStudent.php'</script>";
		}else{
			$projectSelected = $_POST['projectSelected'];
			$studentsSelected = $_POST['select-student'];
			$projectsManager->record[$projectSelected] = $studentsSelected;
			echo "<script>alert('Students assigned successfully!')</script>";
			echo "<script>window.location.href='index.php'</script>";
		}
	}

	include_once 'index.php';
?>