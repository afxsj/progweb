<?php
//Switch- uma estrtura de opção-um teste
// o eco normalmente nao faz parte da condição prescrista

$fruta="maçã";
$valor=7;

switch ($fruta){
    case"maçã":
        $valor +=3;
        break;

case "banana":
    $valor += 5;
    break;

 case "morango":
    $valor +=7;
    break;
 
    default:
   
    $valor +=1;
    
}

echo $valor;

?>