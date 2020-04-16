<!-- DELETE USER FUNCTION -->

<?php

require_once('dbconnect.php');

if (isset($_GET['del'])) { // DEL VAR FROM view.php

    $UserId = $_GET['del'];
    $query = "DELETE from user WHERE id ='" . $UserId . "' ";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location:view.php');
    } else {
        echo "Please check your query!";
    }
}
