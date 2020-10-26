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
			<input type="submit" id="details-submit" value="details-submit" name="details-submit">
		</form>
	
	</div>

	<div>
		<ul>
			<?php= get_details(); ?>
			<li><?php= echo $name?></li>

			<?php if(get_details())
				echo <a href="php/update.php">Edit Detail</a>
			?>
		</ul>
	</div>
</body>


<footer>

</footer>
</html>