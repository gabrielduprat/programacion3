<!DOCTYPE html> <!--Indica que es un documento HTML5.-->
<html lang="en"> <!--Define el idioma del documento como inglés.-->
<head>
    <meta charset="UTF-8"> <!--Permite usar caracteres especiales como tildes y ñ.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Hace que la página sea responsive en dispositivos móviles.-->
    <link rel="stylesheet" href="style.css"> <!--Incluye un archivo CSS.-->
    <title>Mi Primer Form</title> <!--Define el título de la pestaña del navegador.-->
</head>
<body> <!--Aquí debería ir el contenido visible, pero en este caso está vacío porque el contenido se generará dinámicamente con PHP.-->
    
</body>
</html>

<?php

if(isset($_POST['nombre'])){ /*Verifica si el formulario ha sido enviado y si la variable nombre existe en $_POST. $_POST['nombre']: Captura el valor ingresado en el campo name="nombre".*/
    echo "</br><h1>Hola ".$_POST['nombre']."</h1>"; /*Muestra un mensaje de saludo con el nombre ingresado.*/ 
}else{
    ?>
    <!--Formulario HTML dentro de PHP.-->
    <form action="index.php" method="post"> <!--Envia los datos al mismo archivo index.php usando el método POST.-->
        Ingresa tu nombre: <input type="text" name="nombre" id=""> <!--Campo de texto donde el usuario escribe su nombre.-->
        <br> <!--Nueva línea.-->
        <input type="submit" value="Enviar"> <!--Botón para enviar el formulario.-->
    </form>
    <?php
};
?>

<?php
/*codigo php para mostrar numeros primos entre 1 y 100*/
$i=1;
while($i<=100){
    if(isPrime($i)){
        echo $i."<br>";
    }
    $i++;
}
function isPrime($n){
    if($n==1){
        return false;
    }
    for($i=2;$i<$n;$i++){
        if($n%$i==0){
            return false;
        }
    }
    return true;
}
?>
<!--<h1>Hola Mundo</h1>