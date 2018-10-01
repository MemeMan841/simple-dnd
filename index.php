<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="title">
			<h1>Simple DND</h1>
		</div>

		<div class="content">

			<!-- <form>
				<input type="submit" name="refresh" value="refresh">
			</form> -->
			<br> New Character <br><br>


			<form id="userform">
				Enter name<br>
				<input type="text" name="name" required><br><br>
				
				Enter description (less than 30 characters)<br>
				<textarea name="description" form="userform" required></textarea>
				<br>
				<input type="submit">
			</form>

		</div>

	</body>
</html>

<?php

if (isset($_GET['name']) && isset($_GET['description'])) {
	
	session_start();

	echo '<div class="content">';

	echo "Name: " . htmlspecialchars($_GET["name"]);
	echo '<br>';
	$_SESSION['varName'] = htmlspecialchars($_GET["name"]);

	$description = htmlspecialchars($_GET["description"]);

	if (strlen($description) > 30) {
		$description = substr($description, 0, 30);
	}

	echo "<p>";
	echo "Description: " . "<br>" .  $description;
	echo "</p>";

	echo '<br>';
	$_SESSION['varDescription'] = $description;

	echo "Strength: " . " ";
	$strength = rand(0, 10) . "<br>";
	echo $strength;
	$_SESSION['varStrength'] = $strength;


	echo "Intelligence: " . " ";
	$intelligence = rand(0, 10) . "<br>";
	echo $intelligence;
	$_SESSION['varIntelligence'] = $intelligence;

	echo "Charisma: " . " ";
	$charisma = rand(0, 10) . "<br>";
	echo $charisma;
	$_SESSION['varCharisma'] = $charisma;

	echo  '<a href="sheet.php">sheet</a>';

echo '</div class="content">';

}


if (isset($_GET['refresh'])) {
	header('Location:index.php');
}
?>