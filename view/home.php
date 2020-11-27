<?php 
include "../functions/funcoes.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/css_home.css">
	<title>Home</title>
</head>
<body>
	<form >
		<table>
			<?php
			require_once '../view/cabecalho.php';
			?>
			<tbody>
				<tr>
					<?php exibeLogin(); ?>
				</tr>
				<tr>
					<?php verificaSexo(); ?>
				</tr>
			</tbody>
			<?php 
			require_once '../view/rodape.php';
			?>
		</table>
	</form>
</body>
</html>