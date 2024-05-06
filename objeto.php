<?php

class animal {
    function __construct ($raca, $cor) {
        $this->raca = $raca;
        $this->cor = $cor;
    }
    
    function mostrar() {
        echo "Este animal é um(a) {$this->raca} e é {$this->cor}. <br>";
    }
}

$animal = new animal("cachorro", "marrom");
$animal2 = new animal("gato", "cinza");

$animal->mostrar();
$animal2->mostrar();

?>
