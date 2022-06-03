<?php
include "firebaseConnector.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Variáveis AJAX
$nome = $_POST["ajax_nome"];
$sobrenome = $_POST["ajax_sobrenome"];
$email = $_POST["ajax_email"];

$propriedades_cadastro = [ // CADASTRO PADRÃO FIREBASE
  'email' => $email,
  'password' => "123456",
  'displayName' => $nome." ".$sobrenome,
  'disabled' => false,
];
/* CADASTRO DIRETAMENTE PELO PACIENTE
$dados_cadastro = [ // CADASTRO PARA REALTIME
  "Data_Nascimento" => $dataNascimento,
  "Cpf" => $cpf,
  'Primeiro_Nome' => $pNome,
  'Ultimo_Nome' => $uNome,
  'Display_Name' => $pNome." ".$uNome,
];
*/

//ADICIONA ATRIBUTOS EM PRÉ-CADASTRO
$status = "0";
$dados_cadastro = [
  "Verificado" => $status,
];

// CADASTRO EM "AUTHENTICATION"
$criarUsuario = $auth->createUser($propriedades_cadastro);

// PEGAR UID
$uid = $auth->getUserByEmail($email)->uid;

// PRE-CADASTRO EM REALTIME "PreCadastro"
$updates = [
  "PreCadastro/".$uid => $dados_cadastro,
];
$rcon->getReference()
    ->update($updates);

$link='http://localhost/NuTry/webApp/php/confirmarCadastro.php?usr='.$uid.'&n='.$nome.'&s='.$sobrenome;


//  <<<<< DEFINIÇÕES DE EMAIL >>>>>
$tituloEmail = "NuTry | Confirmação de Cadastro";
$mensagem="Clique no link abaixo para confirmar seu e-mail na NuTry:<br>
<a href=".$link.">Confirmar Email NuTry</a>";



date_default_timezone_set('Etc/UTC');
$mail= new PHPMailer;
$mail->IsSMTP(); 
$mail->CharSet = 'UTF-8';   
$mail->SMTPDebug = 2;       // 0 = nao mostra o debug, 2 = mostra o debug
$mail->SMTPAuth = true;     
$mail->SMTPSecure = 'ssl';  
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 465; 
$mail->Username = 'lepvini@gmail.com'; 
$mail->Password = 'V1n1c1us@5936460';
$mail->SetFrom('lepvini@gmail.com', 'NuTry');
$mail->addAddress($email);
$mail->Subject = $tituloEmail;
$mail->msgHTML($mensagem);       
$mail->send();

?>