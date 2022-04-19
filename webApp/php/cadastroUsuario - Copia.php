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
$senha = md5($_POST["ajax_senha"]);


$propriedades_cadastro = [
    'email' => $email,
    'emailVerified' => false,
    'phoneNumber' => '+55'.$celular,
    'password' => $senha,
    'displayName' => $pNome." ".$uNome,
    'photoUrl' => '',
    'disabled' => false,

];

$criarUsuario = $auth->createUser($propriedades_cadastro);



/*
$dados_cadastro = [
    "Data_Nascimento" => $dataNascimento,
    "Cpf" => $cpf,
    'Primeiro_Nome' => $pNome,
    'Ultimo_Nome' => $uNome,
];


$uid = $auth->getUserByEmail($email);
print_r($uid);



$updates = [
    "Contas/".$auth()->uid => $novoUsuario,
];

$rcon->getReference()
    ->update($updates);

*/


?>



