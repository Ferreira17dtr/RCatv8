<!doctype html>
<html>
<head>
<Title> ATV8 PHP </title>
</head>
<body>

<?php

for ($i=1; $i<=20; $i++) {
	$nota= rand(1,20);


	if ($nota < 8) {
		echo 'O aluno <span style="color:#0000cc">' .$i. '</span> teve nota  <span style="color:red">' .$nota. '</span> o aluno reprovou <br>';
	}
	elseif ($nota >= 8 && $nota <= 9.4) {
		echo 'O aluno <span style="color:#0000cc">' .$i. '</span> teve nota  <span style="color:green">' .$nota. '</span> o aluno foi admitido a exame <br>';
	}
	elseif ($nota > 9.4 && $nota <= 20) {
		echo 'O aluno <span style="color:#0000cc">' .$i. '</span> teve nota  <span style="color:pink">' .$nota. '</span> o aluno aprovou <br>';
	}
}

?>

</body>
</Title>
</head>
</html>