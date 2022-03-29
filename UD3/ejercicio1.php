<?php
$limiteMin = 0;
$limiteMax = 0;

if (isset($_POST['enviar'])) {
    $limiteMin = $_POST['limiteMin'];
    $limiteMax = $_POST['limiteMax'];

    // numero random entre el limite minimo y el limite maximo
    if ($limiteMin < $limiteMax) {
        $numeroRandom = rand($limiteMin, $limiteMax);
    } else {
        $numeroRandom = rand($limiteMax, $limiteMin);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01 PHP</title>
</head>
<body>
    <header>
        <h1>DWES</h1>
        <h2>Ejercicio 01</h2>
        <p>Script que muestre al usuario un número aleatorio entre los límites que él indique.</p>
    </header>
    <main>
        <form action="" method="post">
            <label for="limiteMin">Límite inferior:</label>
            <input type="number" name="limiteMin" id="limiteMin" value="<?php echo $limiteMin; ?>">
            <label for="limiteMax">Límite superior:</label>
            <input type="number" name="limiteMax" id="limiteMax" value="<?php echo $limiteMax; ?>">
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php
            if (isset($_POST['enviar'])) {
                echo '<p>El número aleatorio es: '.$numeroRandom.'</p>';
            }
        ?>
    </main>
</body>
</html>