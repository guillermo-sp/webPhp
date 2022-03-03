<?php
include('conexion.php');
$username=$_POST['username'];
$password=$_POST['pass'];

session_start();
$_SESSION['username']=$username;


$conexion=mysqli_connect("localhost","root","","db");


$consulta="SELECT*FROM usuarios where username='$username' and pass='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:paginaWeb.php");

}else{
    ?>
    <?php
    include("inicio.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>