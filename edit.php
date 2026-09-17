<?php
include 'connect.php';

$originalRoll = $_POST['original_roll'] ?? $_GET['roll'] ?? '';
$roll = $_POST['roll'] ?? $originalRoll;
$student = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $course = trim($_POST['course'] ?? '');

    if ($roll === '' || $name === '' || $course === '') {
        $error = 'Roll number, name, and course are required.';
    } else {
        $stmt = mysqli_prepare($conn, 'UPDATE student SET roll = ?, name = ?, course = ? WHERE roll = ?');
        mysqli_stmt_bind_param($stmt, 'ssss', $roll, $name, $course, $originalRoll);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header('Location: index.php');
            exit;
        }

        $error = 'Unable to update the student: ' . mysqli_stmt_error($stmt);
        mysqli_stmt_close($stmt);
    }
}

if ($originalRoll !== '') {
    $stmt = mysqli_prepare($conn, 'SELECT roll, name, course FROM student WHERE roll = ?');
    mysqli_stmt_bind_param($stmt, 's', $originalRoll);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $student = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
}

if (!$student && $error === '') {
    $error = 'Student not found.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <!-- Edit Student Form -->
    <h1>Edit Student</h1>

    <?php if ($error !== ''): ?>
        <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <?php if ($student): ?>
        <form method="post" action="edit.php?roll=<?php echo urlencode($student['roll']); ?>">
            <input type="hidden" name="original_roll" value="<?php echo htmlspecialchars($student['roll'], ENT_QUOTES, 'UTF-8'); ?>">

            <label for="roll">Roll Number:</label>
            <input type="text" id="roll" name="roll" value="<?php echo htmlspecialchars($student['roll'], ENT_QUOTES, 'UTF-8'); ?>" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8'); ?>" required>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" value="<?php echo htmlspecialchars($student['course'], ENT_QUOTES, 'UTF-8'); ?>" required>

            <input type="submit" value="Update Student">
        </form>
    <?php endif; ?>

</body>
</html>