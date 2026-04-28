<?php
//C:\\xampp\\php\\php.exe bibliotecaFuncoes.php

//atividade 1 
namespace conversao {

    function dolarParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function euroParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function pesoParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function libraParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function ieneParaReal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
}

namespace geometria {

    function  areaQuadrado($lado)
    {
        return $lado * $lado;
    }
    function areaRetangulo($base, $altura)
    {
        return $base * $altura;
    }
    function areaTriangulo($base, $altura)
    {
        return $base * $altura / 2;
    }
    function areaCirculo($raio)
    {
        return ($raio ** 2) * 3.14;
    }
    function  areaTrapezio($baseMaior, $baseMenor, $altura)
    {
        return  $baseMaior + $baseMenor * $altura / 2;
    }
}

namespace saude {
    function  calcularImc($peso, $altura)
    {
        return $peso/ $altura**2;
    }
    function valorIdealAgua($peso)
    {
        return $peso * 0.35
    }
    function frequenciaCardiacaMaxima($idade)
    {
        return 220 - $idade;
    }
    function converterLibrasParaQuilo($libras)
    {
        return $libras* 0.4536;
    }
    function  calcularCaloriasBasais($peso, $idade, $sexo){
    
    if (sexo= masculino);
    return 66.5 + (13.75 * $peso) + (5.003 * $altura) - (6.75 * $idade);
    }
    else {
     (sexo=feminino);
     return 66.5 + (9.563 * $peso) + (1.850 * $altura) - (6.75 *$idade);
    }
    
//////////////////////////////////////////////////////////////////////////////////////
$op = readline (">>>>>");
 
print ("------MENU-----");
print ("1-Dolar em real");
print ("2-Euro em real");
print ("3-Peso em real");
print ("4-Libra em real");
print ("5-Iene em real ");
print ("6- Sair");

 switch ($op) { 
 case 1:    
    $dolar = readline ("digite a quantidade de dolares");   
    $dolarcotacao = readline ("digite o valor da cotaçao atual do dolar");  

   echo "dolar para real: ", dolarParaReal($dolar, $dolarcotacao), "\n\n";
     break;  

 case 2:     
     $euro = readline ("digite a quantidade de euro");  
     $eurocotacao = readline ("digite o valor da cotaçao atual do euro"); 

     echo "euro para real: ", euroParaReal($euro, $eurocotacao), "\n\n"; 
     break;  
     
 case 3:   
    $peso = readline ("digite a quantidade de peso");    
    $pesocotacao = readline ("digite o valor da cotaçao atual do peso");

    echo "peso para real: ", pesoParaReal($peso, $pesocotacao), "\n\n";    
    break; 

 case 4:      
    $libras = readline ("digite a quantidade de libras");     
    $librascotacao = readline ("digite o valor da cotaçao atual de libras"); 
    
    echo "libras para real: ", librasParaReal($libras, $librascotacao), "\n\n";     break; 

 case 5:      
    $iene = readline ("digite a quantidade de iene");     
    $ienecotacao = readline ("digite o valor da cotaçao atual de iene");      
    
    echo "iene para real: ", ieneParaReal($iene, $ienecotacao), "\n\n";
  break; 

  case 6 :        
 echo "saindo...\n"; break; default:  echo "opcao nao encontrada! \n";
  break;
  
  } 