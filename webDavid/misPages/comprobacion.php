<?php
session_start();
?>
<html>

<head>
    <title>Comprobacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <?php
        if ($_SESSION['numeroaleatorio'] == $_REQUEST['numero']) {
            echo "Ingresó el valor correcto";
            echo "<br/>";
            echo "<a href='./formulario.php' class='btn btn-danger'>Registrame</a>";
        } else {
            echo "Incorrecto";
        }
        ?>
    </div>

</body>

</html>