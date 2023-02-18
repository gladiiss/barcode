<!DOCTYPE html>
<html>
<head>
	<title>Error</title>
</head>
<body>
	<h1>Oops! An error occurred.</h1>
	<p>Sorry, an error occurred while processing your request. Please try again.</p>
	<p><a href="scan.php">Go back to scan page</a></p>
	</br>
	<?php if (isset($_GET['error'])): ?>
		<p>Error message: <?php echo $_GET['error']; ?></p>
	<?php endif; ?>
</body>
</html>


