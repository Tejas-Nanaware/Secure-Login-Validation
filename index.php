<?php
	$ipAddress = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
}
?>
<html> 
	<head>
		<title>Secure Login Validation</title>
		<meta charset="utf8">
	</head>
	<body>
		<p>This is an example of secure login validation script in php</p>
		<form action="validate.php" method="POST">
			<input type="text" hidden name="ip" value="<?php echo $ipAddress; ?>"><br>
			<label>Username:</label>
			<input type="text" name="username"><br>			
			<label>Password:</label>			
			<input type="password" name="password"><br>
			<button type="submit">Submit</button>
		</form>
		<p>Please note for security reasons, we are tracking your IP: <?php echo $ipAddress; ?></p>				
	</body>
</html>