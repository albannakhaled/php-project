<html>
<body>
    <h2>Enter a project</h2>
    <form method="post" action="enterProjectController.php">
        <label>Project Name:</label>
        <input type="text" name="project_name" >
        <br>
        <label>Project Description:</label>
        <textarea name="project_description" ></textarea>
        <br>
        <label>Project Duration:</label>
        <input type="text" name="project_duration" >
        <br>
        <input type="submit" name="submit">
        <input type="submit" value="back to home page" name="back">
    </form>
</body>
</html>