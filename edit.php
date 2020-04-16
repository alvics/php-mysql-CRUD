<!-- UPDATE USER -->

<!doctype html>
<html lang="en">

<?php
echo 'from edit.php';
require_once('dbconnect.php');
// get the id var from view.php & set it
$UserId = $_GET['Id'];

//sql query
$query = " SELECT * from user WHERE id='" . $UserId . "' ";
// store query in a result var
$result = mysqli_query($conn, $query);

// get the date from db & asign to vars
while ($row = mysqli_fetch_assoc($result)) {
    $userId = $row['id'];
    $userName = $row['user_name'];
    $userEmail = $row['user_email'];
    $userAge = $row['user_age'];
}

?>


<?php $pageTitle = 'Home Page'; ?>
<?php include('templates/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h3 class="bg-success text-white text-center py-2">Update Form in PHP</h3>
                </div>
                <div class="card-body">
                    <form action="update.php?ID=<?php echo $userId; ?>" method="post">
                        <input type="text" class="form-control mb-2" placeholder="User Name" name="name" value="<?php echo $userName; ?>">
                        <input type="email" class="form-control mb-2" placeholder="User Email" name="email" value="<?php echo $userEmail; ?>">
                        <input type="text" class="form-control mb-2" placeholder="User Age" name="age" value="<?php echo $userAge; ?>">

                        <button name="update" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('templates/footer.php'); ?>

</html>