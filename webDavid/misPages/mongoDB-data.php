<?php
session_start();
include('./config/configMongo.php');
require './vendor/autoload.php';
$manager = new MongoDB\Client("mongodb://localhost:27017");
$collection = $manager->selectDatabase("db_datos")->selectCollection("datos");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data MongoDB</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        td,os
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 ALIGN="center">PHP CRUD MONGODB <a class="btn btn-success" href="./paginaWeb.php">Pagina de inicio</a></h2>
        <?php
        $m = new MongoDB\Client("mongodb://localhost:27017");
        // select a database
        $db = $m->db_datos;
        //echo "Database mydb selected<br/>";
        $collection = $m->db_datos->datos;
        //echo "Collection selected succsessfully<br/>";
        $cursor = $collection->find();
        function updateDB()
        {
            // connect to mongodb
             $m = new MongoDB\Client("mongodb://localhost:27017");

            // // select a database
            // $db = $m->mydb;
            // echo "Database mydb selected";
            // $collection = $m->mydb->selectCollection("users");
            // echo "Collection selected succsessfully";
            // // now update the document
            // $collection->update(
            //     array("title" => "MongoDB"),
            //     array('$set' => array("title" => "MongoDB Tutorial"))
            // );
            // echo "Document updated successfully";

            // // now display the updated document
            // $cursor = $collection->find();

            // // iterate cursor to display title of documents
            // echo "Updated document";

            // foreach ($cursor as $document) {
            //     echo $document["title"] . "\n";
            // }
        }
        function deleteDB()
        {
        }
        // iterate cursor to display title of documents

        // foreach ($cursor as $document) {
        //     echo $document["Nombre"] . "\n";
        // }
        $query = $collection->find();

        echo "<table>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Mail</th>
                <th>Direccion</th>
                <th>Localidad</th>
                <th>Actions</th>
            </tr>";
        $i = 1;
        foreach ($query as $current) {
            echo "
                <tr>
                    <th>" . $i . "</th>
                    <td>" . $current["Nombre"] . "</td>
                    <td>" . $current["Apellido"] . "</td>
                    <td>" . $current["Telefono"] . "</td>
                    <td>" . $current["Mail"] . "</td>
                    <td>" . $current["Direccion"] . "</td>
                    <td>" . $current["Localidad"] . "</td>
                    <td>
                        <a class='btn btn-warning'>" . updateDB() . "Update</a>
                        <a class='btn btn-danger'>" . deleteDB() . "Delete</a>
                    </td>
                </tr>";
            $i++;
        }

        echo "</table>";


        ?>
    </div>

</body>

</html>