<!-- Escrever um algoritmo que leia o nome e as três notas obtidas por um aluno durante o
semestre. Calcular a sua média (aritmética), informar o nome e sua menção aprovado
(media &gt;= 7), Reprovado (media &lt;= 5) e Recuperação (media entre 5.1 a 6.9) -->
<?php

$nome = readline("Informe o nome: ");
$nota1 = readline("Informe a primeira nota: ");
$nota2 = readline("Informe a segunda nota: ");
$nota3 = readline("Informe a terceira nota: ");


$soma = $nota1 + $nota2 + $nota3;


$media = $soma/3;


if($media >= 7){
    echo ("O aluno ".$nome." esta aprovado");
}elseif($media <= 5){
    echo("O aluno ".$nome." esta reprovado");
}else{
    echo ("O aluno ".$nome." esta de recuperação");
}
?>
