<?php
include "firebaseConnector.php";
//Variáveis AJAX
$nome = $_POST["ajax_nome"];
$sobrenome = $_POST["ajax_sobrenome"];
$email = $_POST["ajax_email"];

$dados_cadastro = [ // CADASTRO PARA REALTIME
    "Data_Nascimento" => $dataNascimento,
    "Cpf" => $cpf,
    'Primeiro_Nome' => $pNome,
    'Ultimo_Nome' => $uNome,
    'Display_Name' => $pNome." ".$uNome,
];









$link='http://localhost/projeto/OUTFLIX_empresa_atual_v11/php/confirmar_Email.php?usr='.$md5;


//  <<<<< DEFINIÇÕES DE EMAIL >>>>>
$tituloEmail = "CONFIRMAÇÃO DE CADASTRO ";
$mensagem="Clique no link abaixo para confirmar seu e-mail na TwoBrothers Streams:<br>
<a href=".$link.">Confirmar Email TwoBrothers</a>";



date_default_timezone_set('Etc/UTC');
require 'PHPMailer/PHPMailerAutoload.php';
$mail= new PHPMailer;
$mail->IsSMTP(); 
$mail->CharSet = 'UTF-8';   
$mail->SMTPDebug = 2;       // 0 = nao mostra o debug, 2 = mostra o debug
$mail->SMTPAuth = true;     
$mail->SMTPSecure = 'ssl';  
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 465; 
$mail->Username = 'jhony.jpn@gmail.com'; 
$mail->Password = 'united2828';
$mail->SetFrom('jhony.jpn@gmail.com', 'TwoBrothers');
$mail->addAddress($email);
$mail->Subject = $tituloEmail;
$mail->msgHTML($mensagem);       
$mail->send();






?>
