<?php
include "firebaseConnector.php";

$ref="Refeicao/0123456789/1234";


//$user = $rcon->getReference($ref)->getSnapshot();
$fireData = $rcon->getReference($ref)->getValue();

$i=0;
foreach($fireData as $key => $retorno){
    /*
    $retorno[$i]['carb'] = $row['Carboidrato'];
    $retorno[$i]['prot'] = $row['Proteina'];
    $retorno[$i]['PID'] = $row['PID'];

    $i++;
*/
}


echo json_encode($retorno);

?>