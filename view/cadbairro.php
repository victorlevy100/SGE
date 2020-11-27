<?<?php 
require_once "../conexao/conexao.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Bairro</title>
</head>
<body>
	<form action="controller_cadbairro.php" method="post">
		<fieldset>
			<legend>Cadastrar Bairro</legend>
			<table>
				<tbody>
					<tr>
						<td><label>DESCRIÇÃO:</label></td>
						<td><input type="text" name="txtbairro" autocomplete="off" autofocus maxlength="50"></td>
					</tr>
					<tr>
						<td><label>CIDADE:</label></td>
						<td>
							<select id="sltcidades" name="sltcidades">
								<option>Selecione</option>
								<?php
								$sql = "select * from cidades";
								$query = mysqli_query($conexao,$sql);
								while ($vetorcidades = mysqli_fetch_array($query)){
									?>
									<option value="<?php echo $vetorcidades[0]; ?>"><?php echo $vetorcidades['ciddescricao'];?></option>
									<?php
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="SALVAR" value="SALVAR">
							<input type="reset" name="RESET" value="RESET">
							<input type="button" name="VOLTAR" value="VOLTAR" onclick="location='http://localhost:8090/view/home.php';">
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
	</form>
</body>
</html>