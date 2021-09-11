<?php

$idade = 17;
$nome = 'Iris';
$ano = 18 - $idade;
$numeroDePessoas = 1;

echo "\nOlá $nome, você só pode acessar esse local sendo maior de 18 anos. " .PHP_EOL .PHP_EOL;

if($idade >= 18 && $numeroDePessoas >= 1){

    echo " Vejamos...\n ";

    echo "Olha vimos que você tem $idade anos, pode entrar livremente.\n";

}

elseif($idade >= 16 && $numeroDePessoas > 1 ){

    echo "Vimos que você tem $idade anos de idade e está com acompanhante. Portanto, pode entrar no estabelecimento.\n";

    }

elseif($idade >= 16 && $numeroDePessoas == 1){

    echo "Vimos que você tem $idade anos de idade, porém não está acompanhado. Portanto não poderá entrar no estabelecimento";
 
    }

else{

    echo "Vejamos...\n";

    echo "Ops! temos um problema, verificamos que você tem $idade anos. Infelizmente você não poderá acessar este site, nos vemos daqui à $ano ano(s).\n";
}



