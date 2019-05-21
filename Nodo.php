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
    public function imprimir(Nodo $nodo)
    {
        $out = '[';
        while ($nodo->next != null) {
            $out .= $nodo->valor . ', ';
            $nodo = $nodo->next;
        }
        $out .= $nodo->valor . "]\n";
        return $out;
    }
    public function contar_elementos(Nodo $nodo)
    {
        $count = 0;
        while ($nodo->next != null) {
            $count++;
            $nodo = $nodo->next;
        }
        $count += 1;
        return $count;
    }
    public function dame_elemento_numero(Nodo $nodo, $elemento)
    {
        for ($i = 0; $i < $elemento; $i++) {
            $nodo = $nodo->next;
        }
        return $nodo;
    }
    public function ordenar(Nodo $nodo)
    {
        $inicio = $nodo;
        for ($i = 0; $i < $this->contar_elementos($inicio); $i++) {
            for ($j = 0; $j < $this->contar_elementos($inicio) - 1; $j++) {
                if ($this->dame_elemento_numero($inicio, $j)->valor > $this->dame_elemento_numero($inicio, $j + 1)->valor) {
                    $tmp = $this->dame_elemento_numero($inicio, $j)->valor;
                    $this->dame_elemento_numero($inicio, $j)->valor = $this->dame_elemento_numero($inicio, $j + 1)->valor;
                    $this->dame_elemento_numero($inicio, $j + 1)->valor = $tmp;
                }
            }
        }
        return $nodo;
    }
    public function tieneBucles(Nodo $nodo)
    {

        $count = 0;
        $start = microtime(true) * 100000;
        while ($nodo->next != null) {
            //sleep(1);
            $count++;
            $nodo = $nodo->next;
            $time = microtime(true) * 100000;
            if (($time - $start) > 100000) {
                echo 'Tiene bucle' . "\n";
                return true;
            }
        }
        echo 'No tiene bucle' . "\n";
        return false;
    }
}

$lista = new Nodo(5, new Nodo(4, new Nodo(1, new Nodo(2, new Nodo(6, null)))));

echo $lista->imprimir($lista);
echo $lista->contar_elementos($lista);
echo "\n";
echo $lista->imprimir($lista->dame_elemento_numero($lista, 2));
echo $lista->imprimir($lista,$lista->ordenar($lista));
$lista->tieneBucles($lista);
