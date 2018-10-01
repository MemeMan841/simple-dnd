<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		Sheet
	</body>
</html>

<?php

session_start();

echo "<br>";
echo "Name: ";
echo $_SESSION['varName'];
echo "<br>";

echo "Description: ";
echo "<br>";
echo $_SESSION['varDescription'];
echo "<br>";

echo "Strength: ";
echo $_SESSION['varStrength'];

echo "Intelligence: ";
echo $_SESSION['varIntelligence'];

echo "Charisma: ";
echo $_SESSION['varCharisma'];



?>