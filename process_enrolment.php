<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO enrolments (name, email, course) VALUES ('$name', '$email', '$course')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: admitted.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
