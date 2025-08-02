<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    $sql = "INSERT INTO user_details (name, username, email, phone, location, message)
            VALUES ('$name', '$username', '$email', '$phone', '$location', '$message')";

    if ($conn->query($sql) === TRUE) {
        // SweetAlert Success
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Your details have been submitted.',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'index.php';
            });
        });
        </script>";
    } else {
        // SweetAlert Error
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Something went wrong: " . $conn->error . "'
            });
        });
        </script>";
    }
}
?>

