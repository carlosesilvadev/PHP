<!DOCTYPE html>
<html>
<head>
	<title> Exemplo HTML com PHP </title>
</head>
<body>
	
	<?php
		$data = date('d/m/Y', time());
	?>

	<p sytle="text-align: center;"> Hoje é dia <?php echo $data; ?></p>

</body>
</html>