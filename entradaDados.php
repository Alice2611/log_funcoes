<?php

require_once "bibliotecaFuncoes.php";

// use function conversao\dolarParaReal;

// echo "Dolar para real: ", dolarParaReal(100, 5), "\n";

// use function conversao\euroParaReal;

// echo "Euro para real: ", euroParaReal(20, 5.85), "\n";

// use function conversao\pesoParaReal;

// echo "Peso para real: ", pesoParaReal(50, 0.0035), "\n";

// use function conversao\libraParaReal;

// echo "Libra para real: ", libraParaReal(70, 6.75), "\n";

// use function conversao\ieneParaReal;

// echo "Iene para real: ", ieneParaReal(45, 0.031);

/////////////////////////////////////////////////////////////


// require_once "bibliotecaFuncoes.php";

// use function geometria\areaQuadrado;

// echo "A área é: ", areaQuadrado(7), "\n";

// use function geometria\areaRetangulo;

// echo "A área é: ", areaRetangulo(14, 29), "\n";

// use function geometria\areaTriangulo;

// echo "A área é: ", areaTriangulo(8, 17), "\n";

// use function geometria\areaCirculo;

// echo "A área é: ", areaCirculo(5, 3.14), "\n";

// use function geometria\areaTrapezio;

// echo "A área é: ", areaTrapezio(23, 41, 18);


////////////////////////////////////////////////////////////////

// require_once "bibliotecaFuncoes.php";

// use function saude\calcularImc;

// echo "O IMC é: ", calcularImc(50, 1.60), "\n";

// use function saude\valorIdealAgua;

// echo "O valor ideal de Agua é: ", valorIdealAgua(50, 1.60), "\n";

// use function saude\frequenciaCardiacaMaxima;

// echo "A frequencia cardiaca maxima: ", frequenciaCardiacaMaxima(50, 16), "\n";

// use function saude\converterLibrasParaQuilo;

// echo "o resultado é: ", converterLibrasParaQuilo(50), "\n";

// use function saude\calcularCaloriasBasais;

// echo "o resultado é: ", calcularCaloriasBasais(50);


$opcaoPrincipal = "";
$opcaoConversao = "";

while ($opcaoPrincipal != 4) {
    echo "Menu Principal
  1- Conversao
  4- Sair\n";
    $opcaoprincipal = readline(">>> ");


    switch ($opcaoPrincipal) {
        case 1:
            while ($opcaoConversao=6) { //valor cotacao
          echo "Menu Principal
          1- Dolar para real
          6- Sair\n";
          $opcaoConversao = readline (">>>  ")
          switch($opcaoConversao){
            case 1:
                $valor = readline  ("Digite o valor em dolar: ");
                $cotacao = readline  ("Digite o valor da cotação atual do dolar: ");
                echo "valor em real: ", dolarParaReal($valor, $cotacao)


          }

            }
                echo "Opcao 1\n\n";
        case 4:
            echo "Saindo.....\n\n";
        default:
            echo "Opção invalida!\n\n";
            break;
    }
}
