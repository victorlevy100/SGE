<?php 
//require_once "../controller_verifica_sessao.php";
require_once "../conexao/conexao.php";
$sql = ("select * from cidades where cidestcodigo='".$_POST['id']."'");
$query = mysqli_query($conexao,$sql);
while ($vetorcidades = mysqli_fetch_assoc($query)){
	echo "<option value=".$vetorcidades['cidcodigo'].">".$vetorcidades['ciddescricao']."</option>";
}
?>