<?php 

$valor = 5

switch($valor)
{
    case 0:
        echo "O valor é zero";
        break
    case 1:
        echo "O valor é 1";
        break
    case 2:
        echo "O valor é 2";
    break;
    default:
    echo "Valor não é encontrado"
break; 
}

<? php 

$x = 0;

while ($x < 10)
{
    echo "x é igual a ".$x."<br>";
    $x++;
} 
<$php 
$nomes = array ("João", "Maria", "Pedro", "Madalena");

foreach($nomes as $aluno)
{
    echo "Aluno: ".$aluno."<br>";
}