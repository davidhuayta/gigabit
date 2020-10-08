<?php 
	include("../conexion.php");
	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/estilos.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>

<div class="header">
  <h1 >GIGABITS EDUCATION</h1>
</div>

<div class="topnav">
  <a href="../index.php">Main</a>
  <a href="../notas/notas.php">Notas</a>
  <a href="../cursos/cursos.php">Cursos</a>
  <a class="active" href="horario.php">Horarios</a>
  <!--botones de seccion(cerrarsecion, iniciar seccion...)  si hay un nombre en la session muestra cerrar seccion si no es asi muestra iniciar seccion-->
  <?php
	if(isset($_SESSION['username'])){
		?><a class="sec" href=../cerrarsession.php>Cerrar Session</a>
	<?php  
	}else{
		?><a class="sec" href=../iniciarsession.php>Iniciar Session</a>	
	<?php } ?>
   <a class="sec"href=../registrar.php>Registrarse</a>
</div>

<p><?php echo "Hola ".$_SESSION['username']; ?></p>
</body>
</html>


