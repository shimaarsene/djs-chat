<?php 

	session_start();

	// initialize valiables
	$name = "";
	$email = "";
	$errors = array();

	// connect to db
	$db = mysqli_connect('localhost', 'root', '', 'arsene');

	// register user
	if (isset($_POST['register'])) {
		// receive all inputs values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);

		// form validating check if user fill all input
		if (empty($name)) {
			array_push($errors, "You didn't fill the name");
		}

		if (empty($email)) {
			array_push($errors, "You didn't fill email");
		}

		if (empty($password_1)) {
			array_push($errors, "You didn't fill password");
		}

		if ($password1 != $password2) {
			array_push($errors, "Two password do not match");
		}

		// check if user already exist
		$user_check_query = "SELECT * FROM user WHERE name = '$name' OR email = '$email' LIMIT 1";

		$result = mysqli_query($db, $user_check_query);

	  	$user = mysqli_fetch_assoc($result);

		// if user exist bring error
		if ($user) {
			if ($user['name'] === $name) {
				array_push($errors, "Name already exists");
			}

			if ($user['email'] === $email) {
				array_push($errors, "Email already exists");
			}
		}

		// if there's no error insert to db
		if (count($errors) == 0) {
			$password = md5($password_1);

			$query = "INSERT INTO users (name, email, 'password') VALUES ('$name', '$email', '$password')";

			mysqli_query($db, $query);

			$_SESSION['name'] = $name;
			$_SESSION['email'] = "You are logged in";
			header('location: index.php');
		}
	}

	// login user
	if (isset($_POST['login'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
  		$password = mysqli_real_escape_string($db, $_POST['password']);

  		if (empty($name)) {
  			array_push($errors, "Name is required");
  		}

  		if (empty($password)) {
  			array_push($errors, "Password is required");
  		}

  		if (count($errors) == 0) {
  			$password = md5($password);

  			$query = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";

  			$result = mysqli_query($db, $query);

  			if (mysqli_num_rows($result) == 1) {

  				$_SESSION['name'] = $name;

  				$_SESSION['success'] = "You are now logged in";

  				header('location: index.php');

  			} else {

  				array_push($errors, "Wrong name/password combination");

  			}
  		}
	}

?>