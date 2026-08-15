<?php

class Operacao {
    private $valor1;
    private $valor2;

    public function setValor1($valor) {
        $this->valor1 = $valor;
    }

    public function getValor1(){
        return $this->valor1;
    }

    public function setValor2($valor) {
        $this->valor2 = $valor;
    }

    public function getValor2() {
        return $this->valor2;
    }

public function somar() {
    $resultado = $this->valor1 + $this->valor2;
    return $resultado;
}

public function subtrair() {
    $resultado = $this->valor1 - $this->valor2;
    return $resultado;
}

public function multiplicar() {
    $resultado = $this->valor1 * $this->valor2;
    return $resultado;
}

public function dividir() {
    $resultado = $this->valor1 / $this->valor2;
    return $resultado;
}

public function exponenciar() {
    $resultado = $this->valor1 ** $this->valor2;
    return $resultado;
}

}
