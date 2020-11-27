<?php
session_start();
if(!isset($_SESSION["login"])){//isset funçao nativa do php que verifica se uma variavel ou sessao existe ou contem algum valor armazenado na mesma
$msg = 'Voce não esta logado!\n\nVaza daqui Agora!';
echo "<script>alert('$msg');location='../index.php';</script>";
}
?>