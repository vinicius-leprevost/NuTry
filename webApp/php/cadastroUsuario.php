<?php
include "firebaseConnector.php";
$a = new DateTime();
$dataAtual = $a->format("d-m-Y h:i:s a");


$pNome = $_POST["ajax_pNome"];
$uNome = $_POST["ajax_uNome"];
$email = $_POST["ajax_email"];
$celular = $_POST["ajax_celular"];
$cpf = $_POST["ajax_cpf"];
$dataNascimento = $_POST["ajax_dataNascimento"];
$usuario = $_POST["ajax_usuario"];
$senha = md5($_POST["ajax_senha"]);

$novaKey = $rcon->getReference("Contas")->push()->getKey();

$novoUsuario = [
    "ID"                =>  $novaKey,
    "Primeiro_Nome"     =>  $pNome,
    "Ultimo_Nome"       =>  $uNome,
    "Email"             =>  $email,
    "Celular"           =>  $celular,
    "Cpf"               =>  $cpf,
    "Data_Nascimento"   =>  $dataNascimento,
    "Data_Criacao"      =>  $dataAtual,
    "Usuario"           =>  $usuario,
    "Senha"             =>  $senha,
];


$updates = [
    "Contas/".$novaKey => $novoUsuario,
];

$rcon->getReference()
    ->update($updates);

?>



