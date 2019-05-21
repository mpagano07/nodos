<?php

// ordenar la lista de menor a mayor

$lista = array(3, 5, 2, 1, 4);

for ($i = 0; $i < count($lista); $i++) {
    for ($j = 0; $j < count($lista) - 1; $j++) {
        if ($lista[$j] > $lista[$j + 1]) {
            $temp = $lista[$j + 1];
            $lista[$j + 1] = $lista[$j];
            $lista[$j] = $temp;
        }
    }
}

print_r($lista);

