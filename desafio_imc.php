<?php

echo "\n****Desafio IMC - ALURA com PHP******" .PHP_EOL . PHP_EOL;

$peso = 83;
$altura = 1.59;

$res = $peso /($altura*$altura);

echo "Seu IMC é igual a $res kg/m2, ";

if($res <= 16.9){
    echo "está muito abaixo do peso" .PHP_EOL;
}

elseif( $res <= 18.4){
    echo "está abaixo do peso" .PHP_EOL;
}

elseif( $res <= 24.9){
    echo "está com peso normal " .PHP_EOL;
}

elseif( $res <= 29.9){
    echo "está com peso acima " .PHP_EOL;
}

elseif( $res <= 34.9){
    echo "está com obesidade grau l " .PHP_EOL;
}

elseif( $res <= 40){
    echo "está com obesidade grau ll " .PHP_EOL;
}

else{
      echo "está com obesidade grau lll " .PHP_EOL;
}

