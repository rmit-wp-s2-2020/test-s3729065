<!doctype html>
<html lang="en">
<meta charset="utf-8">

<header>
	<?php require_once("../includes/navigator.php") ?>
</header>

<head>
</head>

<body>
<main class="container">

	<section class="jumbotron">

	<?php $workout = []; $workout_list = []; $workout_name = "name"; ?>

	<div class="row">
		<img src="/~s3729065/wp/a2/images/<?php echo $workout['image-name'];?>" alt="PHP Code Derived Workout Image" class="d-block d-sm-inline-block"/>
		<p class="lead"><?php echo $workout_list[$workout_name]?></p>
	</div>
	
	<div class="row">
		<a href="form.php?workouts=<?=$workout['workout'];?>" class="btn btn-outline-success btn-add-workout">Add Workout</a>
		<a href="my_fitness.php" class="btn btn-outline-secondary btn-return-me">Return to My Profile</a>
	</div>

	</section>

</main>
</body>

<footer>
	<?php require_once("../includes/sitemap.php"); ?>
</footer>
</html>