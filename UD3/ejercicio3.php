<?php
$numAleatorio1 = rand(1, 10);
$numAleatorio2 = rand(1, 10);
$operador = ["+", "-", "*", "/"];
$operacion = $operador[rand(0, 3)];
$resultadoFinal = 0;
$error = false;
$msg = "";

if (isset($_POST['resultado'])) {
    $procesaFormulario = true;
} else {
    $procesaFormulario = false;
}

if ($procesaFormulario) {
    switch ($_POST['operacion']) {
        case '+':
            $resultadoFinal = $_POST['numAleatorio1'] + $_POST['numAleatorio2'];
            break;
        case '-':
            $resultadoFinal = $_POST['numAleatorio1'] - $_POST['numAleatorio2'];
            break;
        case '*':
            $resultadoFinal = $_POST['numAleatorio1'] * $_POST['numAleatorio2'];;
            break;
        case '/':
            $resultadoFinal = $_POST['numAleatorio1'] / $_POST['numAleatorio2'];;
            break;
    }
    if ($_POST['resultado'] != $resultadoFinal) {
        $error = true;
        $msg = "Operación realizada incorrectamente";
    } else {
        $msg = "Operación realizada correctamente";
}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio03 PHP</title>
</head>
<body>
    <header>
        <h1>DWES</h1>
        <h2>Ejercicio 03</h2>
        <p>Script que muestre un formulario con una operación aritmetica con dos numeros aleatorios y el usuario tenga que introducir la respuesta.</p>
    </header>
    <main>
        <form action="" method="post">
        <?php
            echo '<label>'.$numAleatorio1.' '.$operacion.' '.$numAleatorio2.' = ';
            echo '</label>';
        ?>
            <input type="number" name="resultado">
            <!--Type hidden -->
            <input type="hidden" name="numAleatorio1" value="<?php echo $numAleatorio1 ?>">
            <input type="hidden" name="numAleatorio2" value="<?php echo $numAleatorio2 ?>">
            <input type="hidden" name="operacion" value="<?php echo $operacion ?>">
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php
            if(isset($_POST['enviar'])){
                if($error){
                    echo '<p style= color:red; >'.$msg.'</p>';
                    echo '<p style= color:red; >'.$_POST['numAleatorio1'] .$_POST['operacion']. $_POST['numAleatorio2'] .'=' . $resultadoFinal .'</p>';
                }else{
                    echo '<p style= color:green;>'.$msg.'</p>';
                    echo '<p style= color:green; >'.$_POST['numAleatorio1'] .$_POST['operacion']. $_POST['numAleatorio2'] .'=' . $resultadoFinal .'</p>';
                }
            }
        ?>
    </main>
</body>
</html>
