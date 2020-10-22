<!doctype html>
<html>
<head>
<Title> ATV8 PHP </title>
</head>
<body>

<?php

$x = 1;
while ($x <= 10) {
	$res = $x * 5;
	echo '5 x ' .$x .' = ' .$res. '<br>';
	$x++;
}
?>
<br>
<br>
<?php

$x = 1;
do {
	$res = $x * 9;
	echo '9 x ' .$x .' = ' .$res. '<br>';
	$x++;
}
while ($x <= 10);

?>

</body>
</Title>
</head>
</html>