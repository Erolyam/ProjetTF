<?php include('../templates/header.php');
if (isset($_SESSION['role'])) {
    header("Location: ../gallerie/gallerie.php");
    die();
}
?>
    <form enctype="multipart/form-data" action="../../actions/user_register1.php" method="post">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Enter Username" required
                           autofocus>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required
                           autofocus>
                </div>
                <button type="submit" class="btn btn-primary btn-block" id="button_login" name="login">Login</button>
            </div>
        </div>
    </form>
<?php include('../templates/footer.php'); ?>