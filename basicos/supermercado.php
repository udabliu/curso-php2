<?php
// criei um array associativo
$arr = ["batata" => 10,
        "feijao" => 5,
        "almofada" => 12,
        "vassoura" => 15,
        "balde" => 58
];

// criei uma funçao para receber o array como parametro
function objeto($arr){

    //novo array criado para armazenar os dados que forem filtrados
    $arrItems = [];

    //foreach para pegar todos os valores do array
    foreach($arr as $item => $valor){

        // condição para q apenas os  itens de chave(valor) > 10 sejam filtrados e jogados no array acima ($arrayItems) através do array_push()
        if ($valor < 10){
            array_push($arrItems,$item); 
        }
       
    }

    //retornei o array com os itens filtrados para poder utilizar (printar,usar no html enfim)
    return $arrItems;

}




//função sendo chamada e passando o parametro
print_r(objeto($arr));



 

