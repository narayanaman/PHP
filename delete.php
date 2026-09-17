<?php
include 'connect.php';

$roll = $_GET['roll'] ?? '';

if ($roll === '') {
    die('Roll number is required.');
}

$sql = "DELETE FROM student WHERE roll = ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $roll);

if (mysqli_stmt_execute($stmt)) {
    echo "Student deleted successfully.";
} else {
    echo "Error deleting student: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
