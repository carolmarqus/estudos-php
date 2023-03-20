<!-- Altere o algoritmo anterior para que seja lido do teclado, além das notas, o sexo do
aluno (M ou F). Se for masculino, o resultado deverá ser precedido de “Caro aluno, seu
resultado é: “. Se for feminino, o resultado deverá ser precedido de “Cara aluna, seu
resultado é: “. -->

<?php
$sexo = readline("Informe o sexo do aluno (M/F): ");
$nota1= readline("Informe a primeira nota: ");
$nota2 = readline("Informe a segunda nota: ");
$nota3 = readline("Informe a segunda nota: ");
$nota4 = readline("Informe a segunda nota: ");
$soma = 0;
$soma = $nota1 + $nota2 + $nota3 + $nota4;

$media = $soma / 4;

echo ("A media é: ".$media);

    if($sexo = "M"){
        echo "\nCaro aluno, seu resultado é: ";
        if($media>=6){
        echo ("\nAluno aprovado!");      
        }else{
        echo ("\nAluno reprovado!");
    }}else{
        echo "\nCaro aluna, seu resultado é: ";
        if($media>=6){
            echo ("\nAluna aprovada!");      
        }else{
            echo ("\nAluna reprovada!");
        }
}
?>