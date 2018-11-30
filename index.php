<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>

	<h1>Température</h1>

	<br><br>


<?php
$text = file_get_contents("data.txt");
echo $text;
?>


<br><br><br><br>

<img src="img/thermometer.jpg">

</body>
</html>