<?php 
//require_once "../controller_verifica_sessao.php";
require_once "../conexao/conexao.php";
$sql = ("select * from bairros where baicidcodigo='".$_POST['id']."'");
$query = mysqli_query($conexao,$sql);
while ($vetorbairros = mysqli_fetch_assoc($query)){
	echo "<option value=".$vetorbairros['baicodigo'].">".$vetorbairros['baidescricao']."</option>";
}
?>