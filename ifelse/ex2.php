<!-- Escrever um algoritmo que leia dois valores inteiros distintos e informe qual é o maior -->

<?php
$valor1 = readline("Informe um valor inteiro: ");
$valor2 = readline("Informe outro valor inteiro: ");

if($valor1>$valor2){
    echo ("O primeiro valor informado é maior");
    echo ("\nPrimeiro Valor: ".$valor1);
    echo ("\nSegundo Valor: ".$valor2);
}else{
    echo ("O Segundo valor informado é maior");
    echo ("\nPrimeiro Valor: ".$valor1);
    echo ("\nSegundo Valor: ".$valor2);
}
?>