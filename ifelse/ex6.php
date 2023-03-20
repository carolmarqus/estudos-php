<!-- Faça um algoritmo que leia um número e mostre uma mensagem indicando se este
número é par ou ímpar e se é positivo ou negativo. -->
<?php
  $num = readline("Informe um numero inteiro: ");

  if($num % 2 == 0){
    echo "Par";
  }else{
  echo "Impar";
  }
  if($num < 0 ){
    echo "\nEsse numero é negativo";
  }else{
    echo "\nEsse numero é positivo";
  }
?>