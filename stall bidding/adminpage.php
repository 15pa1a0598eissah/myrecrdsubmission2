<?php
	include 'connect.php';
	session_start();
?>
<html>
	<head>
		<link rel="stylesheets" >
	</head>
	<body>
		<h3>welcome admin</h3>
		<a href="loginp.php">logout</a>
		<?php echo $_SESSION['username'];?>
		<form method="post" <?php $_SERVER['PHP_SELF']?>
			<input type="text" >
		</form>
		<?php session_destroy();?>
	</body>
</html>