<?php
// if=se ifelse=se nao se, else=se nao
$pontos=17;
if($pontos>=20){
    echo "Religioso";
}elseif($pontos>=15){
    echo "Biografia";
}elseif($pontos>=10){
    echo "Suspense";
 }elseif ($pontos>=5){
     echo "Romance";
  } else{
    echo "Crônicas";
}



?>