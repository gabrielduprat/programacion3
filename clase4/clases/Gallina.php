<?php
// clases/Gallina.php
require_once 'Ave.php';

class Gallina extends Ave {
    public function __construct() {
        parent::__construct("Gallina");
        $this->habilidades = ["Pone huevos", "Vuela cortas distancias", "Canta al amanecer"];
    }
}
?>
