<?php 

session_start();
?>

<head>

	<title>Database</title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script> 
	<style type="text/css">
		.brand {
			background: #cbb09c !important;
		}
		.brand-text {
			color: #cbb09c !important;
		}

		
		
	

	</style>
</head>

<body class="grey lighten-4">
 	<nav class="nav-wrapper teal darken-1">

 		<div class="container">

 			<div class="row teal darken-1">
 				<div class="col s12 m6 l6">
 					<ul class="left">

 						<li><a href="../index.html" class="grey-text text-lighten-3"><h5>The Physicists' Hub</h5></a></li>


 						
 					</ul>
 				</div>
 				<div class="col s12 m6 l6m">
 					<ul class="right">

 						<li><a href="../index.html"><i class="large material-icons white-text ">home</i></a></li>
 						<!-- <li><a href="myindex.php"><i class="large material-icons white-text ">library_books</i></a></li>
 						<li><a href="add.php"><i class="large material-icons white-text ">add_circle</i></a></li> -->
 						<?php if ($_SESSION != NULL) { ?>
 						
 						<li><a href="../signout.php"><i class="large material-icons grey-text ">exit_to_app</i></a></li>
 				<?php } ?>

 				<?php if ($_SESSION == NULL) { ?>
 						<li><a href="../signup.php">Sign Up</a></li> 
 						<!-- <li><a href="../login.html"><i class="large material-icons grey-text ">exit_to_app</i></a></li> -->
 						<li><a href="../login.html">Log in</a></li>
 				<?php } ?>
 					</ul>
 				</div>
 				</div>
 		</div> 		
 	</nav>