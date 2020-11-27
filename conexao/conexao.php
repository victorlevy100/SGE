<?php
$server = "localhost";
$user = "root";
$pass = "";
$base = "parking";
$charset  = "UTF8";
$conexao_pdo = null;

/*
// Concatenação das variáveis para detalhes da classe PDO
$detalhes_pdo  = 'mysql:host='.$server.';';
$detalhes_pdo .= 'dbname='.$base.';';
$detalhes_pdo .= 'charset='.$charset.';';

// Tenta conectar
try {
    // Cria a conexão PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $user, $pass);
} catch (PDOException $e) {
    // Se der algo errado, mostra o erro PDO
    print "Erro: " . $e->getMessage() . "<br/>";
   
    // Mata o script
    die();
}
*/




$conexao = new mysqli($server, $user, $pass, $base);
if($conexao->connect_errno)
	echo "Falha na conexão: (".$conexao->connect_errno.") ".$conexao->connect_error;

function pegarConexao(){
	$conexao = new mysqli("localhost", "root", "", "parking");
	return $conexao;
}
/*
$conexao= mysqli_connect($server, $user, $pass, $base);
	if(!$conexao){
		die("Falha na Conexão!".mysqli_connect_erro());}*/
?>

