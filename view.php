<!-- VIEW LIST OF USER  -->
<?php
$pageTitle = "View Page";
require_once('dbconnect.php');
$query = "SELECT * from user";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php');

?>
<section>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card mt-5">
                <table class="table table-bordered">
                    <tr>
                        <td>User ID:</td>
                        <td>User Name:</td>
                        <td>User Email:</td>
                        <td>User Age:</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    <?php
                    // loop through the array & assign vars to the db cols
                    while ($row = mysqli_fetch_assoc($result)) {
                        $userId = $row['id'];
                        $userName = $row['user_name'];
                        $userEmail = $row['user_email'];
                        $userAge = $row['user_age'];
                    ?>
                        <!-- display db query -->
                        <tr>
                            <td><?php echo $userId ?></td>
                            <td><?php echo $userName ?></td>
                            <td><?php echo $userEmail ?></td>
                            <td><?php echo $userAge ?></td>
                            <td><a href="edit.php?Id=<?php echo $userId ?>">Edit</a></td>
                            <td><a href="delete.php?del=<?php echo $userId ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</section>


<?php include('templates/footer.php') ?>