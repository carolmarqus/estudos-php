<!-- Elabore um algoritmo a ler 4 notas de um aluno (de 1 a 10). Após calcular a média das
notas, apresentar a mensagem “Aprovada” se o aluno tiver obtido média maior ou
igual a 6, caso contrário, apresentar “Reprovado”. -->
<?php
$nota1= readline("Informe a primeira nota: ");
$nota2 = readline("Informe a segunda nota: ");
$nota3 = readline("Informe a segunda nota: ");
$nota4 = readline("Informe a segunda nota: ");

$soma = $nota1 + $nota2 + $nota3 + $nota4;

$media = $soma / 4;

echo ("A media é: ".$media);

    if($media>=6){
        echo ("\nAluno aprovado!");
    }else{
        echo ("\nAluno reprovado!");
    }
?>