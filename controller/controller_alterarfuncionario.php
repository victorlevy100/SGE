<?php
require_once "../conexao/conexao.php";

$codigo			= $_POST['funcodigo'];
$nome 			= $_POST['txtnome'];
$cpf 			= $_POST['txtcpf'];
$dtnascimento 	= $_POST['txtdtnascimento'];
$estado 		= $_POST['txtestados'];
$cidade 		= $_POST['txtcidades'];
$bairro 		= $_POST['txtbairros'];
$endereco 		= $_POST['txtendereco'];
$sexo 			= $_POST['txtsexo'];
$login 			= $_POST['txtlogin'];
$senha 			= $_POST['txtsenha'];

if($nome == '' || $cpf == '' || $dtnascimento == '' || empty($estado) || empty($cidade) || empty($bairro) || $endereco == '' || $sexo == '' || $login == '' || $senha == ''){
	echo "<script> alert('Não pode haver campos em branco.\n Você será redirecionado para a mesma página.');</script>";
	header("refresh: 0; url=http://localhost:8090/view/listarfuncionarios.php");
}else{

	$senha_segura = password_hash($senha, PASSWORD_DEFAULT);

	$sql = "select * from funcionarios where funcodigo = '$codigo';";
	$resultado = mysqli_query($conexao,$sql);
	$linhas = mysqli_affected_rows($conexao);

	if($linhas>0){
		while($funcionario=mysqli_fetch_array($resultado)) {			
			$codigousuario= $funcionario[10];
		}
		$sql1 = "update usuarios set usulogin='$login', ususenha='$senha_segura' where usucodigo = '$codigousuario';";
		$resultado1 = mysqli_query($conexao,$sql1);
		$linhas1 = mysqli_affected_rows($conexao);
		if($linhas1>0){
			$sql2 = "update funcionarios set funnome='$nome', funcpf='$cpf', fundtnascimento='$dtnascimento', funestcodigo=$estado, funcidcodigo=$cidade, funbaicodigo=$bairro, funendereco='$endereco', funsexo='$sexo' where funcodigo=$codigo;";

			$resultado2 = mysqli_query($conexao,$sql2);
			$linhas2 = mysqli_affected_rows($conexao);
			if($sql2){
				$_SESSION['mensagem'] = "gravadocomsucesso";
				echo "<script> alert('Alteração realizada com sucesso!');</script>";
				header("refresh: 0; url=http://localhost:8090/view/listarfuncionarios.php");
			}else{
				echo "<script> alert('Alteração não realizada!');</script>";
				header("refresh: 0; url=http://localhost:8090/view/home.php");
			}
		}else{
			echo "<script> alert('Usuário não localizado!');</script>";
			header("refresh: 0; url=http://localhost:8090/view/home.php");
		}
	}else{
		echo "<script> alert('Funcionário não localizado!');</script>";
		header("refresh: 0; url=http://localhost:8090/view/home.php");
	}
}
?>