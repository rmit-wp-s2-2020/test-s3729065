<?php
require_once("php/details.php");
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">

<head>
	<link rel="stylesheet" href="css/index.css">
</head>

<body class="grid">
	<div id="details-form-group">

		<form id="details-form" action="php/action.php">
			<label for="details-name">Name:</label>
			<input type="text" id="details-name" value="details-name" name="details-name" required>
			
			<label for="details-age">Age:</label>
			<input type="number" id="details-age" value="details-age" name="details-age">

			<label for="details-address">Address:</label>
			<input type="text" id="details-address" value="details-address" name="details-address" required>

			<label for="details-submit">Submit:</label>
			<button type="submit" onclick=<?php update_details() ?>></button>
		</form>
	
	</div>
</body>
</html>

<?php
/* Copy and pasted my index.php code,
	this was done to recreate another form for editing details.
*/
?>