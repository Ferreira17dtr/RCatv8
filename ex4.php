<!doctype html>
<html>
<head>
<Title> ATV8 PHP </title>
</head>
<body>

<?php

$pararLoop= rand(1,30);

for ($numero = 0; ; $numero++) {
	if ($numero == $pararLoop) {
		break;
	}
	echo $numero."<br>";
}

?>

</body>
</Title>
</head>
</html>