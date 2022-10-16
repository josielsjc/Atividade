<?php

$var_anagrama= $_POST['frm_anagrama'];   
 
      //Faz a conta de qual sera o tamanho do array para saber quanats vezes o loop vai se repetir dependendo da palavra
      $arr1 = str_split($var_anagrama);
      $conta= count($arr1 );

      //Inicia a variavel que ira receber palavras aleatorias, comparar com o array
      $aleatorio=null;

      //Aqui faz o fatorial para saber quantas possibilidades existe da palavra se repetirem
      $fatorial = $conta;
      //Calculo do fatorial da palavra
      while($fatorial >1){
        $fatorial--;
         $conta = $conta*$fatorial ;
       
      }$i = 0;

      //inicia o primeiro indice
      $palavra[$i] = $var_anagrama; 
for ($i = 1; $i <= $conta;) {


//verifica se existe a palavra no array, se existir faz um random
if (in_array($aleatorio, $palavra)) { 
  $aleatorio = str_shuffle($var_anagrama);



} 

//Caso a palavra não exista ela é gravada no Array
else  { 
  echo '      ';
  echo  $palavra[$i] = $aleatorio; 
  
 $i++;

  }
 
}


?>