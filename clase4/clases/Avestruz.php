<?php
// clases/Avestruz.php
require_once 'Ave.php';

class Avestruz extends Ave {
    public function __construct() {
        parent::__construct("Avestruz");
        $this->habilidades = ["Correr a gran velocidad", "No puede volar", "Depositar grandes huevos"];
    }
}
?>
