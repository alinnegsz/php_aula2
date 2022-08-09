<?php

//Contadores
echo "Contador com for <br><br>";
for($i=10,$j=0; $i>=0; $i--,$j++){ //contador duplo
    echo $i." - ".$j."<br>";
}
echo "<br><br>Contador com while <br><br>";
$i = 0;
while($i<=10){
    echo $i."<br>";
    $i++;
}

//Arrays
echo "<br><br>Arrays<br><br>";
$array = ["Maria", 15, 25.5];
$array[] = "João"; //adiciona novo valor
$array["curso"] = "info"; //definindo posição personalizada

//array associativo
$aluno = [
    "nome" => "Maria",
    "idade" => 16,
    "media" => 10.0
];

var_dump($array); //exibe na tela detalhes da variável
echo "<br>";
//var_dump($aluno); 
echo "<br><br>";
foreach ($aluno as $chave => $valor){
    echo $chave."<br>";
    echo $valor."<br><br>";
}

?>