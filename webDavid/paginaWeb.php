<!DOCTYPE html>
<html lang="es-CL">
  <head>
  
    <?php 
    	require_once("head.php");
    ?>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
  <body>
  	<div class="navbar-inverse navbar-fixed-top">
	  <?php 
	  	require_once("nav.php");
	  ?>
	  <?php
	  if(isset($_COOKIE['contador'])){
		  setcookie("contador",$_COOKIE['contador']+1, time()+365*24*60*60);
		  echo "Numero de visitaS :".$_COOKIE['contador'];

	  }else {
		  setcookie("contador", 1, time()+365*24*60*60);
		  echo "Bienvenido por primera vez a la pagina";
	  }


	  ?>
	</div>
	<div class="container">
		<h2>Bienvenidos a la aplicación realizada con MongoDB y PHP</h2>
		<p class="text-info">En esta app podremos listar, agregar, modificar y eliminar Datos.</p><br><br>
		<a href="./formGuille.php">form mongo</a>
		<form class="form-horizontal" action="add_libro.php" method="post">
		  	<div class="control-group">

		    
		  	</div>


		    	</div>
		  

		</form>

		<h3>Base de datos almacenados</h3>
		<table class="table-striped table-bordered">

			<tbody>



			</tbody>
		</table>

		<footer>
		  <p>Desarrollado por @Guillermo.Sanchez</p>
		</footer>
	</div> <!-- /container -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>