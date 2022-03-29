<?php
$max = 0;
$min = 0;
$contador = 0;
$suma = 0;
if (isset($_POST['enviar'])) {
for ($i = 1; $i <= 10; $i++) {
    $valor = $_POST['item' . $i];
    if ($valor > $max) {
        $max = $valor;
    }
    if ($valor < $min) {
        $min = $valor;
    }
    $suma += $valor;
    $contador++;
}
$media = $suma / $contador;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio04 PHP</title>
</head>
<body>
    <header>
        <h1>DWES</h1>
        <h2>Ejercicio 04</h2>
        <p>Script que muestre un formulario que permita la valoración de una calificación (1-5) y que muestre la mayor calificación. </p>
    </header> 
    <main>
        <form action="" method="post">
            <!--Valoracion de 10 items de 1 a 5-->
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<label for='$i'>Valoración $i</label>";
                // radio button de 1 a 5
                for ($j = 1; $j <= 5; $j++) {
                    echo "<input type='radio' name='item$i' value='$j'>$j";
                }
                echo "<br>";
            }
            ?>
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php
        if (isset($_POST['enviar'])) {
            echo "La calificación más alta es $max <br>";
            echo "La media de las calificaciones es " . $media;
        }
        ?>
    </main>
</body>
</html>