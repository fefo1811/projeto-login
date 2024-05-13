<?php require_once('../autenticacao.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<h1>Olá mundo</h1>
	<?= print_r($_SESSION['usuarioAutenticado']); ?>
</body>
</html>
