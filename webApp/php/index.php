<?php
include __DIR__."/firebaseConnector.php";

/*
$id
$primeiro_nome
$ultimo_nome
$email
$celular
$cpf
$data_nascimento
$data_criacao
$usuario
$senha
*/


$user = $rcon->getReference('Contas/0/Usuario')->getSnapshot();
$digitado = "vinicius.leprevost";


if($digitado == $user->getValue()){
    print_r("É igual");
    print_r("DB: ".$user->getValue()."\n");
    print_r("Digitado: ".$digitado);
}else{
    print_r("Não é igual");
    print_r("DB: ".$user->getValue()."\n");
    print_r("Digitado: ".$digitado);
}

        
//"C:/xampp/php/php.exe"
//connect php to xampp to all
// {"php.validate.executablePath": "C:\wamp64\bin\php\php7.0.4\php.exe", "php.executablePath": "C:\wamp64\bin\php\php7.0.4\php.exe"}



?>