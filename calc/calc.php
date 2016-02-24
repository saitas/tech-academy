<?php
	require_once('request_process.php');

?>

<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>calculator</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="">
	<link rel="shortcut icon" href="">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">

		<div>
			<h2>Calculator</h2>
		</div>

		<form name="form1" action="" method="post">
			<input type = "text" name = "left">　
			<select name="arithmetic" size=1>
				<option value = "plus">＋</option>
				<option value = "minus">－</option>
				<option value = "times">×</option>
				<option value = "divid">÷</option>
			</select>　
			<input type = "text" name = "right">
			<input type = "submit" value = "calc!">
			<input type = "reset" value = "clear">
		</form>
	</div>
</body>
</html>
