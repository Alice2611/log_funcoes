<?php

require_once "biblioteca.php";

use function matematica\Somar;
use function texto\concatenar;

echo "Soma: ", somar(1, 1, 1), "\n";
echo "Nome completo: ", concatenar("João", "Silva");
