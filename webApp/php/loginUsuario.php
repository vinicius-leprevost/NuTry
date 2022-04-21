<?php
include "firebaseConnector.php";
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$email = $_POST["ajax_email"];
$pwd = $_POST["ajax_senha"];
$retorno=array();
$retorno['autenticado']=false;

try{
    $user = $auth->getUserByEmail($email);
    
    
    try{
        $signInResult = $auth->signInWithEmailAndPassword($email, $pwd);        
        $idTokenString = $signInResult->idToken();
        
        
        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->claims()->get('sub');

            $_SESSION['verified_user_id'] = $uid;
            $_SESSION['idTokenString'] = $idTokenString;
            $_SESSION = "Logado com sucesso!";

            $retorno['autenticado']=true;
            echo json_encode($retorno); //retorna se tudo estiver certo para js avançar

        } catch (FailedToVerifyToken $e) {
            echo 'The token is invalid: '.$e->getMessage();
        }

    }
    catch(Exception $e){
        $_SESSION = "Senha incorreta";
        exit();
    }


} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    //echo $e->getMessage();
    $_SESSION = "Email inválido";
    //header('Location: ');
    exit();
}



?>



