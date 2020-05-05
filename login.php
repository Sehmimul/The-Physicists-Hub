<?php 

// Start the session
session_start();

include 'ideas/connection_check.php'; 
$username = $password = $id =  "";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$sql = "SELECT * FROM hub WHERE username='$username' and password = '$password'";
$result = mysqli_query($conn, $sql);
if ($result) {
} else {
	echo "1st step error".mysqli_error($conn);
}
$row = mysqli_fetch_array($result);
if ($row!=NULL && $row['username']==$username && $row['password']==$password) {
	$id = $row['id'];
	$_SESSION["id"] = $id;
	$_SESSION["name"] = $row['your'];
	$_SESSION["email"] = $row['email'];
	//$uniq = uniqid();
	//header("Location: ideas/myindex.php?id=$uniq?id=$uniq?my=$uniq?id=$id?$uniq?$uniq");
	header("Location: ideas/myindex.php");
} else {
	echo "Sorry!!";
}
?>
