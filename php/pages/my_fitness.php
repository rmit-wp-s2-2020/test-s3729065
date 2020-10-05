<!doctype html>
<html lang="en">

<meta charset="utf-8">
<title>Adrenaline Buzz Club | My Fitness</title>

<?php include("../includes/navigator.php") ?>
<?php
require_once('../json_functions.php');
require_once('../workouts_functions.php');
require_once('../workouts.php');
?>

<body>
<main class="container">

	<div class="section">

		<h1 class="display-1">My Fitness</h1>

		<div class="row" id="workouts-cards">

		<?php foreach(list_workouts() as $item => $display) { ?>
		
			<div class="col-md-3">

				<a href="workouts.php?workouts=<?php echo $item;?>">
					<img class="" src="images/<?php echo $display['image-name'];?>"/>
				</a>

			</div>

		<?php } ?>
		
		</div>

		<div class="row" id="top-image-set">

		<img class="col-md-3" id="4325436" src="../../images/pexels-cottonbro-4325436.jpg" alt="">
		<img class="col-md-3" id="4325440" src="../../images/pexels-cottonbro-4325440.jpg" alt="">
		<img class="col-md-3" id="4164525" src="../../images/pexels-ivan-samkov-4164525.jpg" alt="">

		</div>

	</section>

	<section class="row" id="bottom-image-set">

		<img class="col-md-3" id="4753881" src="../../images/pexels-cottonbro-4753881.jpg" alt="">
		<img class="col-md-3" id="4162449" src="../../images/pexels-ivan-samkov-4162449.jpg" alt="">
		<img class="col-md-3" id="4753890" src="../../images/pexels-cottonbro-4753890.jpg" alt="">

	</section>

</main>
</body>

<footer>
<?php require_once(includes/sitemap.php); ?>
</footer>
</html>