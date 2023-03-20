<!-- Elabore um algoritmo que leia do teclado o sexo de uma pessoa. Se o sexo digitado for
M ou F, escrever na tela “Sexo válido!”. Caso contrário, informar “Sexo inválido!”; -->
<?php
$sexo = readline("Informe o sexo (M/F): ");
if($sexo == "M"){
    echo "Sexo válido!";
}elseif($sexo == "F"){
    echo "Sexo válido!";
}else{
    echo "Sexo inválido! informar M/F";
}
?>