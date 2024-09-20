<?php 
session_start();
$_SESSION['loggedin'] = '';
// $error = false;

$error = false;

if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == 'admin' && md5($_POST['password']) == '827ccb0eea8a706c4c34a16891f84e7b'){
        $_SESSION['loggedin'] = true;
    } else {
        $_SESSION['loggedin'] = false;
        $error = true;
    }
}

if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false;
    session_destroy();
}
echo md5(12345);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container">
		<div class="row">
		<h1 class="text-center">Login Form</h1>
		<?php 
		
		    if($_SESSION['loggedin'] == true) { ?>
		    <p class="text-center">Hello Admin! Welcome to my Site</p>
		    <?php 
		} else { ?>
		    <p class="text-center">Hello! Welcome to my Site</p>
		    <?php
		}
		?>
		<?php
		if($_SESSION['loggedin'] == false) {
			if($error) {
				echo "<strong>Username and Password didn't match!</strong>";
			}
			?>

			<form action="index.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="username" name="username" class="form-control" id="username" placeholder="Enter Username">
				
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password"
				 class="form-control" id="exampleInputPassword1" placeholder="Password"
				 name="password"
				 >
			</div>
			
			<button type="submit" class="mt-3 btn btn-primary">Login</button>
			</form>
			<?php

		} else {
			?>
		<form action="index.php" method="post">
				<input type="hidden" name="logout" value="1">
				<button type="submit" class="btn btn-primary"> Logout </button>
			</form>
			<?php
		}
		?>
		</div>
	</div>
  </body>
</html>