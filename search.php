<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container-fluid">
<?php

	foreach ($_POST as $key=>$value)
	{
		$city[$key]= htmlentities(trim($value));
	}
	
	echo '<h1>ville</h1>';
?>
	</body>
</html>
