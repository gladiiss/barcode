<!DOCTYPE html>
<html>
<head>
	<title>Generate Spreadsheet</title>
</head>
<body>
	<h1>Generate Spreadsheet</h1>
	<form method="post" action="download.php">
		<label for="count">Number of barcodes to generate:</label>
		<input type="number" id="count" name="count" min="1" max="1000" value="10">
		<br><br>
		<input type="submit" value="Generate">
	</form>
</body>
</html>

