<?php
include "firebaseConnector.php";

//VARIAVEIS DO AJAX
$pNome = $_POST["ajax_pNome"];
$uNome = $_POST["ajax_uNome"];
$email = $_POST["ajax_email"];
$celular = $_POST["ajax_celular"];
$cpf = $_POST["ajax_cpf"];
$dataNascimento = $_POST["ajax_dataNascimento"];
$pwd = $_POST["ajax_senha"];


$propriedades_cadastro = [ // CADASTRO PADRÃO FIREBASE
    'email' => $email,
    'emailVerified' => false,
    'phoneNumber' => '+55'.$celular,
    'password' => $pwd,
    'displayName' => $pNome." ".$uNome,
    'photoUrl' => '',
    'disabled' => false,
];

$dados_cadastro = [ // CADASTRO PARA REALTIME
    "Data_Nascimento" => $dataNascimento,
    "Cpf" => $cpf,
    'Primeiro_Nome' => $pNome,
    'Ultimo_Nome' => $uNome,
    'Display_Name' => $pNome." ".$uNome,
    'Perfil' => "Nutricionista",
];

// CADASTRO EM "AUTHENTICATION"
$criarUsuario = $auth->createUser($propriedades_cadastro);

// PEGAR UID
$uid = $auth->getUserByEmail($email)->uid;

// CADASTRO EM REALTIME "CONTAS"
$updates = [
    "Contas/".$uid => $dados_cadastro,
];
$rcon->getReference()
    ->update($updates);

?>



