<?php
// clases/Paloma.php
require_once 'Ave.php';

class Paloma extends Ave {
    public function __construct() {
        parent::__construct("Paloma");
        $this->habilidades = ["Volar largas distancias", "Comunicarse con otras palomas", "Sobrevivir en ambientes urbanos"];
    }
}
?>
