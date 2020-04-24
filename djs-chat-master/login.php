<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login on DJ's chat</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>

                        <?php include('errors.php'); ?>

                        <form class="form-signin" action="login.php" method="POST">
                            <div class="form-label-group">
                                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username">
                                <label for="inputUsername">Username</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                                <label for="inputPassword">Password</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login_user">Sign in</button>

                            <hr class="my-4">

                            <div class="text-center">
                                <p class="text-black">Create account <a href="register.php">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</body>
</html>