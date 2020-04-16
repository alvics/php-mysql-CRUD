<?php

require_once('dbconnect.php');

if (isset($_POST['update'])) {

    $UserId = $_GET['ID']; // ID var from edit.php form action
    $UserName = $_POST['name'];
    $UserEmail = $_POST['email'];
    $UserAge = $_POST['age'];

    $query = " UPDATE user SET user_name='" . $UserName . "',user_email='" . $UserEmail . "',user_age='" . $UserAge . "' WHERE id='" . $UserId . "' ";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location:view.php');
    } else {
        echo 'Please check your query!';
    }
} else {
    header('Location: view.php');
}
