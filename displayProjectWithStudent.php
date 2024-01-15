<?php
include_once('initSession.php');

// Check if the session variable is set
if (isset($_SESSION['projectManager'])) {
    // Access the project manager object from the session
    $projectsManager = $_SESSION['projectManager'];
    
    // Print the records in the project manager
    // print_r($projectsManager->record);

    // Display the project selected with students in a table
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display Projects</title>
        <link rel="stylesheet" href="css/display-student.css">
    </head>
    <body>
        <div class="container">
            <?php if (!empty($projectsManager->listOfProjects)) : ?>
                <table>
                    <tr>
                        <th></th>
                        <?php foreach ($projectsManager->listOfStudents as $student) : ?>
                            <th><?php echo "{$student->firstName} {$student->lastName}"; ?></th>
                        <?php endforeach; ?>
                    </tr>

                    <?php foreach ($projectsManager->listOfProjects as $project) : ?>
                        <tr>
                            <td><?php echo $project->name; ?></td>
                            <?php foreach ($projectsManager->listOfStudents as $student) : ?>
                                <?php
                                if (isset($projectsManager->record[$project->name])) {
                                    if (in_array("{$student->firstName} {$student->lastName}", $projectsManager->record[$project->name])) {
                                        echo "<td>X</td>";
                                    } else {
                                        echo "<td></td>";
                                    }
                                } 
                                ?>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <br>
                <br>
                <form action="index.php">
                    <input type="submit" value="Back to Home Page" name="back" class="back-btn">
                </form>
            <?php else : ?>
                <p>No projects available</p>
            <?php endif; ?>
        </div>
    </body>
    </html>
<?php
} else {
    echo "Session variable 'projectManager' is not set.";
}
?>
