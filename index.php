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
    <h1>Ciao</h1>
	<!--per passare codice PHP in un HTML utilizzo il tag <?php  ?>-->
	<!--    funzione echo() per stampare qualcosa a chermo-->
	<?php
	echo('Hello PHP');
	// posso inserire codice html passandolo come stringa
	// passo un tag br per mandare a capo, break line
	echo "<br/>";
	echo "seconda linea di codice";
	?>

	<?php
	$name = 'Angelo';
	echo "<br/>";
	// se utilizzo le virgolette posso passare direttamente le variabili, è il template littaral
	echo "My name is: $name";
	?>

	<?php
	echo "<br/>";
	echo "<h1 style='display: inline; color: red'>My name is</h1>: $name";
	echo "<br/>";
	// concatenazione stringa col .
	echo 'ciao da ' . $name;
	?>
</body>
</html>