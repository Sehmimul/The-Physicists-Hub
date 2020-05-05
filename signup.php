<?php
include 'ideas/connection_check.php';

$email = $your = $username = $password = '';
$errors = array('your'=>'','email' =>'', 'username' => '', 'password' => '');

if(isset($_POST['submit'])) {

	if(empty($_POST['your'])) {
		$errors['your'] = 'Your Name is needed <br />';
	}  else {
	 	$your = $_POST['your'];	 		
	}

	if(empty($_POST['email'])) {
	 $errors['email'] = 'An email is needed <br />';
	 } else {
	 $email = $_POST['email'];
	 if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 $errors['email'] = 'email must be valid';
	 	}
	 }

	if(empty($_POST['username'])) {
		$errors['username'] = 'Your Username is needed <br />';
	}  else {
	 	$username = $_POST['username'];	 		
	}


	if(empty($_POST['password'])) {
		$errors['password'] = 'Your Password is needed <br />';
	}  else {
	 	$password = $_POST['password'];	 		
	}


	if(array_filter($errors)){
	//	echo "Failed Sorry try again with all inputs filled properly";
	//	header("Location: signup.php");


	} else {
		$your = mysqli_real_escape_string($conn, $_POST['your']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		$sql = "INSERT INTO hub(username, email, password, your) VALUES('$username', '$email', '$password', '$your')";

		if(mysqli_query($conn, $sql)) {
	 	header("Location: ideas/myindex.php");
	 	} else {
	 	echo "error".mysqli_error($conn);
	 }


	}

	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<form action="signup.php" method="POST">
	<p>
		<label>Name: </label>
		<input type="text" name="your" id="your">
		<div class="red-text"><?php echo $errors['your']; ?></div>
	</p>
	<p>
		<label>email: </label>
		<input type="text" name="email" id="email">
		<div class="red-text"><?php echo $errors['email']; ?></div>
	</p>
	<p>
		<label>Username: </label>
		<input type="text" name="username" id="username">
		<div class="red-text"><?php echo $errors['username']; ?></div>
	</p>
	<p>
		<label>Password: </label>
		<input type="password" name="password" id="password">
		<div class="red-text"><?php echo $errors['password']; ?></div>
	</p>
	<p>
		<input type="submit" name="submit" value="submit">
		
	</p>
	</form>
</body>
</html>