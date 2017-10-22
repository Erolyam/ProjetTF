<?php include str_replace("//", "/", $_SERVER['DOCUMENT_ROOT']) . '/ProjetTF/Source/views/templates/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="error-template">
                <h1>Oops!</h1>
                <h2>404 Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!<br>
                </div>
                <div>
                    <a href="../users/login.php" class="btn btn-primary">
                        <i class="icon-home icon-white"></i> Take Me to Login </a>
                </div>
            </div>
        </div>
    </div>
<?php include('../templates/footer.php'); ?>