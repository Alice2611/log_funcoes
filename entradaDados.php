<?php

require_once "bibliotecaFuncoes.php";

use function conversao\dolarParaReal;

echo "Dolar para real: ", dolarParaReal(100, 5), "\n";

use function conversao\euroParaReal;

echo "Euro para real: ", euroParaReal(20, 5.85), "\n";

use function conversao\pesoParaReal;

echo "Peso para real: ", pesoParaReal(50, 0.0035), "\n";

use function conversao\libraParaReal;

echo "Libra para real: ", libraParaReal(70, 6.75), "\n";

use function conversao\ieneParaReal;

echo "Iene para real: ", ieneParaReal(45, 0.031);
