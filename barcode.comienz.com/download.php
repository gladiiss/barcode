<?php
// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['count'])) {
	$count = intval($_POST['count']);
	if ($count > 0) {
		// Query database for names
		$sql = "SELECT barcode FROM barcodes ORDER BY RAND() LIMIT $count";
		$result = mysqli_query($conn, $sql);

		// Generate spreadsheet data
		$spreadsheet = "Barcode\r\n";
		while ($row = mysqli_fetch_assoc($result)) {
			$barcode = $row['barcode'];
			$spreadsheet .= "$barcode\r\n";
		}

		// Prompt user to download file
		header("Content-Type: application/csv");
		header("Content-Disposition: attachment; filename=names.csv");
		header("Pragma: no-cache");
		header("Expires: 0");
		echo $spreadsheet;
		exit();
	}
}

// Close database connection
mysqli_close($conn);
?>


