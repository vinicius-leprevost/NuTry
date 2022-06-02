<?php
include "firebaseConnector.php";

$ref="Refeicao/0123456789/1234"
$fetchdata = $database->getReference($ref)->getValue();

foreach($fetchdata as $key => $dados){

}

$retorno[0]["card"] = $dados
echo json_encode($retorno);

/* itemRef=mDatabase.getReference().child("items").child(itemId).child("name");
mItemsRef.getValue();
*/

?>