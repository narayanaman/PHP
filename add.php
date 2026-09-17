<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- create a form for student roll name and course -->
     <form method="post" action="insert.php">
     <label for="roll">Roll Number:</label>
     <input type="text" id="roll" name="roll" required>

     <label for="name">Name :</label>
     <input type="text" id="name" name="name" required>
     
     <label for="name">Course :</label>
     <input type="text" id="course" name="course" required>

     <input type="submit" value="Add Student">
        </form>

     



</body>
</html>