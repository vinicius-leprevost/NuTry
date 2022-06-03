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

?>