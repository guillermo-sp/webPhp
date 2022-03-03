<?php
session_start();
require './vendor/autoload.php';
$manager = new MongoDB\Client("mongodb://localhost:27017");
//var_dump($manager);
if (isset($_POST['Nombre']) && isset($_POST['Apellido']) && isset($_POST['Telefono']) && isset($_POST['Mail']) && isset($_POST['Direccion']) && isset($_POST['Localidad'])) {
    require './config/configMongo.php';
    $query = $manager->mydb->users->insertOne([
        'Nombre' => $_POST['Nombre'],
        'Apellido' => $_POST['Apellido'],
        'Telefono' => $_POST['Telefono'],
        'Mail' => $_POST['Mail'],
        'Direccion' => $_POST['Direccion'],
        'Localidad' => $_POST['Localidad'],

    ]);
    if ($query) {
        $_SESSION['action'] = 'Create PersonID:<b>' . $query->getInsertedId() . '</b> Successfully';
        $_SESSION['display'] = 1;
        return header('Location: ./misPages/MongoDB-data.php');
    }
}
?>
<!DOCTYPE html>
<html lang="es-CL">

<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="col-md-6">
            <h4 class="text-center mb-3">Formulario <span><a href="./sign_in.php" class="btn btn-primary">Nuevo Registro</a></span></h4>
            <form action="" method="post">
                <div class="form-goup mb-2">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" maxlength="60" required>
                </div>
                <div class="form-goup mb-2">
                    <label for="Apellido">Apellido</label>
                    <input type="text" class="form-control" id="Apellido" name="Apellido" maxlength="60" required>
                </div>
                <div class="form-goup mb-2">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="Teléfono" name="Telefono" maxlength="60" required>
                </div>
                <div class="form-goup mb-2">
                    <label for="Mail">Mail</label>
                    <input type="text" class="form-control" id="Mail" name="Mail" maxlength="60" required>
                </div>
                <div class="form-goup mb-2">
                    <label for="Direccion">Dirección</label>
                    <input type="text" class="form-control" id="Direccion" name="Direccion" maxlength="60" required>
                </div>
                <div class="form-goup mb-2">
                    <label for="Localidad">Localidad</label>
                    <input type="text" class="form-control" id="Localidad" name="Localidad" maxlength="60" required>
                </div>
                <button class="btn btn-success">Guardar Datos</button>
            </form>
        </div>
    </div>
</body>

</html>