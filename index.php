<!-- CREATE USER -->

<!doctype html>
<html lang="en">
<?php $pageTitle = 'Home Page'; ?>
<?php include('templates/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h3 class="bg-success text-white text-center py-2">Register Form in PHP</h3>
                </div>
                <div class="card-body">
                    <form action="insert.php" method="post">
                        <input type="text" class="form-control mb-2" placeholder="User Name" name="name">
                        <input type="email" class="form-control mb-2" placeholder="User Email" name="email">
                        <input type="text" class="form-control mb-2" placeholder="User Age" name="age">

                        <button name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('templates/footer.php'); ?>

</html>