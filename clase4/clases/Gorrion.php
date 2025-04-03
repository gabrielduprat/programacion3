<?php
// clases/Gorrión.php
require_once 'Ave.php';

class Gorrion extends Ave {
    public function __construct() {
        parent::__construct("Gorrión");
        $this->habilidades = ["Volar", "Cantar", "Construir nidos pequeños"];
    }
}
?>
