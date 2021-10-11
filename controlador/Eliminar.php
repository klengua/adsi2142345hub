<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $server = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "portafolio";
    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
        or die("eroor");
    $clave = $_POST['txtClave'];

    mysqli_query($conexion, "DELETE from datos where clave='$clave'")
        or die("error al eliminar");

    mysqli_close($conexion);
    echo "Datos eliminados";

    ?>
</body>

</html>