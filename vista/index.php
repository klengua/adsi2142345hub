<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>


</head>

<body>

    <h1>Formularios de validacion</h1>

    <!--primer formulario para registrar -->
    <div class="">

        <div class="container">
            <form action="../modelo/Conexion.php" method="POST">
                <h4>clave:</h4> <input type="text" name="txtClave"><br />
                <h4>Nombre:</h4>
                <input type="text" name="txtNombre"><br />
                <h4>sexo:</h4>
                <select name="cmbSexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <br>
                <input type="submit" value="Registrar" name="btnRegistrar">
        </div>
        </form>
    </div>
    <!--segundo formulario para eliminar-->
    <div class="container">
        <form action="../controlador/Eliminar.php" method="POST">
            <h4>clave:</h4><input type="text" name="txtClave"><br />

            <br>
            <input type="submit" value="Eliminar Registro" name="btnEliminar">
    </div>
    </form>

    <!--tercer formulario para actualizar -->
    <div class="container">
        <form action="../controlador/Actualizar.php" method="POST">
            <h4>clave:</h4><input type="text" name="txtClave"><br />
            <h4>Nombre:</h4><input type="text" name="txtNombre"><br />
            <br>
            <input type="submit" value="Actualizar Registro" name="btnActualizar">
    </div>
    </form>


    <!--cuarto formulario para ver los registros en la base de datos -->
    <div class="container">
        <form action="../modelo/Registros.php" method="POST">

            <input type="submit" value="Ver Registros" name="btnRegistros">
    </div>
    </form>


    </div>

</body>

</html>