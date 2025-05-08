<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tr Will</title>
</head>
<body>
	<h2>Follow each link to the page example</h2>
	<ul>
		<li><a href="pages/prova.php">Simple If Statement</a></li>
	</ul>
    <h1>Ciao</h1>

	<?php
	echo('Hello PHP');
	echo "<br/>";
	echo "seconda linea di codice";
	?>

	<?php
	$name = 'Angelo';
	echo "<br/>";
	echo "My name is: $name";
	?>

	<?php
	echo "<br/>";
	echo "<h1 style='display: inline; color: red'>My name is</h1>: $name";
	echo "<br/>";
	echo 'ciao da ' . $name;
	?>
</body>
</html>