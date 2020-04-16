<!-- CREATE USER FUNCTION -->

<?php

require_once('dbconnect.php');


if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age'])) {
        echo 'Please fill form';
    } else { // Set vars from the form
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $user_age = $_POST['age'];

        // sql query / add to db
        $query = " INSERT INTO user (user_name, user_email, user_age) VALUES('$user_name', '$user_email', '$user_age') ";

        $result = mysqli_query($conn, $query);

        if ($result) {
            header('location:view.php');
        } else {
            echo "Please Check Your Query!";
        }
    }
} else {
    header('location:index.php');
}
mysqli_close($conn);

$pageTitle = "Insert Page";
include('templates/header.php'); ?>

<h2>Hello from insert!!</h2>

<?php require('templates/footer.php'); ?>