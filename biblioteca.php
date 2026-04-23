<?php
//C:\\xampp\\php\\php.exe entrada.php


namespace matematica; {

    function Somar($a, $b, $c)
    {

        return $a + $b + $c;
    }
    echo "Resultado: ", Somar(5, 7, 3), "\n";

    function Subtrair($a, $b)
    {

        return $a - $b;
    }
    echo "Resultado: ", Subtrair(10, 5), "\n";

    function divisao($a, $b)
    {

        return $a / $b;
    }
    echo "Resultado: ", divisao(14, 2), "\n";

    function multiplicacao($a, $b)
    {

        return $a * $b;
    }
    echo "Resultado: ", multiplicacao(8, 5), "\n";
}

namespace texto; {
    function concatenar($nome, $sobrenome)
    {
        return $nome . " " . $sobrenome;
    }
}

namespace logica; {
    function verificaIdade($idade)
    {
        if ($idade >= 18) {
            return "Maior de idade!";
        } else {
            return "Menor de idade!";
        }
    }
}


namespace logica; {
    function verificaExercito($sexo, $idade)
    {
        if ($idade >= 18 && $sexo == "Masculino") {
            return "Voce está apto a servir ao Exercito";
        } else {
            return "Voce não cumpre aos requisitos";
        }
    }
}
