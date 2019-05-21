<?php

class Nodo
{
    public $valor;
    public $next;

    public function __construct($valor, $next)
    {
        $this->valor = $valor;
        $this->next = $next;
    }

    public function imprimir_lista(Nodo $nodo)
    {
        $out = '[';
        while ($nodo->next != null) {
            $out .= $nodo->valor . ', ';
            $nodo = $nodo->next;
        }
        $out .= $nodo->valor;
        return $out . ']';
    }
    public function contar_elementos(Nodo $nodo)
    {
        $out = 0;
        while ($nodo->next != null) {
            $out++;
            $nodo = $nodo->next;
        }
        $out += 1;
        return $out;
    }
    // public function dame_elemento_numero(Nodo $nodo, $elemento)
    // {
    //     for ($i=0; $i < $elemento; $i++) { 
            
    //     }
    //     return $nodo;
    // }


    public function ordenar(Nodo $nodo)
    {
        for ($i = 1; $i < contar_elementos($nodo); $i++) {
            for ($j = 0; $j < contar_elementos($nodo) - $i; $j++) {
                if ($nodo[$j] > $nodo[$j + 1]) {
                    $k = $nodo[$j + 1];
                    $nodo[$j + 1] = $nodo[$j];
                    $nodo[$j] = $k;
                }
            }
        }
    }

    // public function tiene_bucle()
    // { }
}

$lista = new Nodo(5, new Nodo(4, new Nodo(1, new Nodo(2, new Nodo(6, null)))));


// echo $lista->imprimir_lista($lista);
// echo $lista->contar_elementos($lista);
// echo $lista->dame_elemento_numero($lista, 2);
echo $lista->ordenar($lista, 2);




// https://www.lawebdelprogramador.com/codigo/PHP/2662-Metodo-burbuja.html 

// bucles lista enlazada "tortuga y liebre"

// Command Query Responsability Segregation (CQRS) 
// la idea es tener metodos que trabajen como comnandos y querys
// una de las ventajas es que podemos probar los test al momento que se esta ejecutando 

// programar una cola y por segunda parte agregar una parte agregar una bd y migrar 
//agregar sacar vacio (metodos de la cola)
