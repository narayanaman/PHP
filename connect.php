<?php

$host="localhost";
$user="root";
$password="Aman@12345";
$database="student_db";

$conn=mysqli_connect($host,$user,$password,$database);
if(!$conn){
    die("Connect failed : " . mysqli_connect_error());
}
?>