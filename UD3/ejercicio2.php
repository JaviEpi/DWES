<?php
$passwd1 = "";
$passwd2 = "";
$error = false;
$msgError = "Las contraseñas no coinciden.";
$msg = "Contraseñas correctas.";

if(isset($_POST['enviar'])){
    $passwd1 = $_POST['passwd1'];
    $passwd2 = $_POST['passwd2'];
    
    if($passwd1 != $passwd2){
        $error = true;
    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio02 PHP</title>
</head>
<body>
    <header>
        <h1>DWES</h1>
        <h2>Ejercicio 02</h2>
        <p>Script que muestra un formulario con dos inputs de tipo passwd y verifique que las contraseñas coincieden.</p>
    </header>
    <main>
        <form action="" method="post">
            <!-- 2 input tipo password -->
            <label for="passwd1">Contraseña:</label>
            <input type="password" name="passwd1" id="passwd1" value="<?php echo $passwd1; ?>">
            <label for="passwd2">Repetir contraseña:</label>
            <input type="password" name="passwd2" id="passwd2" value="<?php echo $passwd2; ?>">
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php
            if(isset($_POST['enviar'])){
                if($error){
                    echo '<p style= color:red; >'.$msgError.'</p>';
                }else{
                    echo '<p style= color:green;>'.$msg.'</p>';
                }
            }
        ?>
    </main>
</body>
</html>