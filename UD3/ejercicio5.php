<?php
/**
 * Script que muestre una figura geometrica utilizando el formato svg y mostrara un formulario radio button que permita elegir la figura que se desea dibujar.
 * 
 * @author Javier Epifanio López
 */

$figuras = ['Cuadrado', 'Triángulo', 'Circulo'];
$procesaFormulario = false;
$color = '#000000';

if(isset($_POST['figura'])){
    $procesaFormulario = true;
}

?>  

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio05 PHP</title>
</head>
<body>
    <header>
        <h1>DWES</h1>
        <h2>Ejercicio 05</h2>
        <p>Script que muestre una figura geometrica utilizando el formato svg y mostrara un formulario radio button que permita elegir la figura que se desea dibujar.</p>
    </header>
    <main>
        <form action="" method="post" name="dibFigura">
            <?php
                // recorrer el array de figuras
                foreach ($figuras as $figura) {
                    // crear el radio button
                    echo '<input type="radio" name="figura" value="' . $figura . '">' . $figura . '<br>';
                }
            ?>
            
            <input type="color" name="color" value="">
            <input type="submit" name="dibujar" value="Dibujar">
        </form>
    </main>
</body>
</html>