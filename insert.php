<?php

include 'connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $course = $_POST['course'];

    $sql = "INSERT INTO student (roll,name,course) VALUES ('$roll','$name','$course')";

    if(mysqli_query($conn,$sql)){
        echo "Student added successfully.";
    }else{
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<script>
    setTimeout(function(){
        window.location.href = "index.php";
    }, 2000);
</script>