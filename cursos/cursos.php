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
<div class="header">
  <h1 >GIGABITS EDUCATION</h1>
</div>
<body><!--MENU SUPERIOR-->
<div class="topnav">
  <a href="../index.php">Main</a>
  <a href="../notas/notas.php">Notas</a>
  <a class="active" href="cursos.php">Cursos</a>
  <a href="../horarios/horario.php">Horarios</a>
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

<?php 


$con = mysql_connect($host,$user,$pw)or die("problemas con la conexion a la BD");//conectar con el servidor
mysql_select_db($db,$con)or die("problemas cn la conexion a la BD");//seleccionar BD
$reg2=mysql_query("SELECT * FROM alumno WHERE NOMBREA = '$_SESSION[username]'")or die("F".mysql_error());
$reg22=mysql_fetch_array($reg2);
$registro = mysql_query("SElECT  * FROM  alumno_curso WHERE alumno_curso.idalumno = '$reg22[idalumno]'") or die ("problemas de consulta: ".mysql_error());
?>

<ul class="ull">
<?php  $i=0; 
while($reg=mysql_fetch_array($registro)){ ?>
    <?php $reg3=mysql_query("SELECT * FROM curso WHERE idcurso= '$reg[idcurso]'")or die("F".mysql_error());
$reg33=mysql_fetch_array($reg3); ?>
    <li><a href=<?php $regi= $reg33['NOMBREC']?>><?php echo $reg33['NOMBREC']?></a></li>
<?php $i++; 
} 
 ?>

</ul>


<div style="margin-left:25%;padding:1px 16px;height:100px;">
  <h2><?php echo "Hola ".$_SESSION['username']; ?></h2>
  <h3><?php echo $regi= $reg33['NOMBREC']?></h3>
  <h3>Introduccion</h3>
  <p>En este curso aprendera la metodologia de programacion necesaria para programar un videjuego</p>
  <p>bla bla bla...</p>
  <p>bla bla bla...</p>
  <p>bla bla bla...</p>
  <p>bla bla bla...</p>

</div>

</body>
<script src="..script/scrips.js"></script>
</html>
