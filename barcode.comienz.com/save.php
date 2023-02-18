<?php
// Database configuration
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from form
if (isset($_POST['submit'])) {
	$barcode = $_POST['barcode'];
	
	// Insert data into database
	$sql = "INSERT INTO barcodes (barcode) VALUES ('$barcode')";
	if (mysqli_query($conn, $sql)) {
		// Redirect to input form
		header("Location: scan.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

// Close connection
mysqli_close($conn);
?>

