<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register on DJ's chat</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign Up</h5>

                        <?php include('errors.php'); ?>

                        <form class="form-signin" action="register.php" method="POST">
                            <div class="form-label-group">
                                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                                <label for="inputUsername">Username</label>
                            </div>

                            <div class="form-label-group">
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" value="<?php echo $email; ?>">
                                <label for="inputEmail">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password_1" class="form-control" placeholder="Password">
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputConfirmPassword" name="password_2" class="form-control" placeholder="Password">
                                <label for="inputConfirmPassword">Confirm Password</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="reg_user">Sign up</button>

                            <hr class="my-4">

                            <div class="text-center">
                                <p class="text-black">Already have account <a href="login.php">Sign In</a></p>
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