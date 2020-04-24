
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome on DJ's chat</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="">LOGO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarResponsive">
	      	<ul class="navbar-nav ml-auto">
	      		<li class="nav-item active">
	      			<a class="nav-link" href="">Home
		      			<span class="sr-only">(current)</span>
		      		</a>
	      		</li>
	      		<li class="nav-item">
		            <a class="nav-link" href="#">About</a>
		        </li>
		        <li class="nav-item">
		            <a class="nav-link" href="#">Services</a>
		        </li>
		        <li class="nav-item">
		            <a class="nav-link" href="#">Contact</a>
		        </li>
	      	</ul>
	      </div>
		</div>
	</nav>

	<header class="py-5 bg-image-full">
	    
	</header>

	<section class="py-5">
	    <div class="container">
	      	<?php if (isset($_SESSION['success'])) : ?>
		      	<div class="error success" >
		      		<h3>
			          	<?php 
				          	echo $_SESSION['success']; 
				          	unset($_SESSION['success']);
			          	?>
		      		</h3>
		      	</div>
		  	<?php endif ?>

		  	<?php  if (isset($_SESSION['username'])) : ?>
		    	<div class="d-flex">
		    		<h5 class="text-white">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h5>
		    		<button class="btn btn-sm btn-danger"> <a href="index.php?logout='1'" class="text-white">logout</a> </button>
		    	</div>
		    <?php endif ?>
	    </div>
  	</section>

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</body>
</html>