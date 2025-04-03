<?php
// clases/PatitoDeGoma.php
require_once 'Ave.php';

class PatitoDeGoma extends Ave {
    public function __construct() {
        parent::__construct("Patito de Goma");
        $this->habilidades = ["Flotar en el agua", "No puede volar", "No respira"];
    }
}
?>
