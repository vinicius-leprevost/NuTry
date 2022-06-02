<?php
require __DIR__.'/../../vendor/autoload.php';
date_default_timezone_set("America/Sao_Paulo");
$a = new DateTime();
$dataAtual = $a->format("d-m-Y h:i:s a");

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\firebase\Auth;
//Firebase Route
$factory = (new Factory())
                    ->withServiceAccount(__DIR__."/nutry-firebaseKey.json")
                    ->withDatabaseUri('https://nutry-41304-default-rtdb.firebaseio.com/'); //caminho banco de dados


$rcon = $factory->createDatabase();
$auth = $factory->createAuth();

/*   

<<< ADICIONE AQUI TODOS OS ATRIBUTOS UTILIZADOS NO BANCO DE DADOS >>>

Contas ->
    Referência -> (uid)
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

Administradores ->
    Referência ->
        $ID
        $permissao
        $usuario
        $data_setado
        

Nutricionistas -> 
    Referência ->
        $ID
        $usuario
        $data_setado
        $plano
        $duracao_plano (em dias)

Planos ->
    Referência ->
        $ID
        $valor
        $titulo
        $descricao



ESTE ARQUIVO APENAS REALIZA A CONEXÃO COM O BANCO DE DADOS FIREBASE
UTILIZE $rcon->getReference(); para recuperar arquivos do DB


*/



?>