<?php
include "firebaseConnector.php";

$email = $_POST["ajax_email"];
$pwd = $_POST["ajax_senha"];

$signInResult = $auth->signInWithEmailAndPassword($email, $pwd);

?>



