<?php
// Incluir todas las clases necesarias
require_once 'clases/Gorrion.php';  // Asegúrate de que la clase "Gorrion" también esté sin tilde
require_once 'clases/Avestruz.php';
require_once 'clases/Gallina.php';
require_once 'clases/PatitoDeGoma.php';
require_once 'clases/Paloma.php';

// Función para seleccionar el tipo de ave
function seleccionarAve($opcion) {
    switch($opcion) {
        case 1:
            return new Gorrion();
        case 2:
            return new Avestruz();
        case 3:
            return new Gallina();
        case 4:
            return new PatitoDeGoma();
        case 5:
            return new Paloma();
        default:
            echo "Opción no válida.\n";
            return null;
    }
}

// Mostrar el formulario si no se ha seleccionado una ave aún
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['volver'])) {
    // Si se selecciona una ave, mostramos sus habilidades
    if (isset($_POST['ave'])) {
        $opcion = $_POST['ave'];
        $aveSeleccionada = seleccionarAve($opcion);

        if ($aveSeleccionada !== null) {
            // Mostrar las habilidades
            echo '<h2>Habilidades de ' . $aveSeleccionada->obtenerNombre() . ':</h2>';
            $aveSeleccionada->mostrarHabilidades();

            // Mostrar el botón para volver
            echo '<br><br><form method="POST" action="">
                    <input type="submit" name="volver" value="Volver a elegir otra ave">
                  </form>';
        }
    }
} else {
    // Mostrar el formulario para seleccionar una ave
    echo '<h2>Selecciona un tipo de ave:</h2>';
    echo '<form method="POST" action="">
            <label for="ave">Elige una ave:</label><br>
            <select name="ave" id="ave">
                <option value="1">Gorrion</option>
                <option value="2">Avestruz</option>
                <option value="3">Gallina</option>
                <option value="4">Patito de Goma</option>
                <option value="5">Paloma</option>
            </select><br><br>
            <input type="submit" value="Ver habilidades">
          </form>';
}
?>
