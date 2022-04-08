<?php
require __DIR__.'/../../vendor/autoload.php';
date_default_timezone_set("America/Sao_Paulo");

use Kreait\Firebase\Factory;
$factory = (new Factory())->withDatabaseUri('https://nutry-41304-default-rtdb.firebaseio.com/'); //caminho banco de dados
$rcon = $factory->createDatabase();


/*   

<<< ADICIONE AQUI TODOS OS ATRIBUTOS UTILIZADOS NO BANCO DE DADOS >>>

Contas ->
    Referência ->
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