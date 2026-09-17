<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Student List</h1>
        <a href="add.php">Add New Student</a>
        <table border="1">
            <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
            <?php
                include 'connect.php';
                $sql = "SELECT * FROM student";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['roll']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['course']."</td>";
                    echo "<td><a href='edit.php?roll=".$row['roll']."'>Edit</a> | <a href='delete.php?roll=".$row['roll']."'>Delete</a></td>";
                    echo "</tr>";
                }
                mysqli_close($conn);
            ?>
     <!-- Show list of student from fetching connect.php to showing in table -->
    
 </body>
 </html>