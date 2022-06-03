<?php
include "firebaseConnector.php";

$cpf = "001.002.003-04";
$dataNascimento = "03/06/2000";


$uid = $_GET['usr'];
$pNome = $_GET['n'];
$uNome = $_GET['s'];
$altura = $_GET

if(!empty($uid)){
    $dados_cadastro = [ // CADASTRO PARA REALTIME
        'Data_Nascimento' => $dataNascimento,
        'Cpf' => $cpf,
        'Primeiro_Nome' => $pNome,
        'Ultimo_Nome' => $uNome,
        'Display_Name' => $pNome." ".$uNome,
        'Perfil' => "Paciente",
        'altura' => $altura,
    ];
    $verificacao = [
        'Verificado' => "1",
    ];
    // CADASTRO EM REALTIME "CONTAS"
    $updates = [
        "Contas/".$uid => $dados_cadastro,
        "PreCadastro/".$uid => $verificacao,
    ];
    $rcon->getReference()
        ->update($updates);

    echo "CADASTRADO COM SUCESSO!";
    //header('Location: http://localhost/NuTry/webApp/paginas/index.html');
}else{
    echo "ERRO. NÃO CONSEGUIMOS CONFIRMAR SEU CADASTRO";
}






	  
?>

