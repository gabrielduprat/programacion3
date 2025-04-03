<?php
// clases/Ave.php

abstract class Ave {
    protected $nombre; // Hacer que 'nombre' sea protegido para que sea accesible en las clases hijas
    protected $habilidades = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método para obtener el nombre del ave
    public function obtenerNombre() {
        return $this->nombre;
    }

    public function obtenerHabilidades() {
        return $this->habilidades;
    }

    public function mostrarHabilidades() {
        echo "Habilidades de {$this->nombre}: \n";
        foreach ($this->habilidades as $habilidad) {
            echo "- {$habilidad}\n";
        }
    }
}
?>
