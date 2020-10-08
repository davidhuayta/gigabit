<?php 
session_start();
include("conexion.php");
if(isset($_POST['user']) && !empty($_POST['user']) &&
	isset($_POST['pw']) && !empty($_POST['pw']))
{
$con= mysql_connect($host,$user,$pw)or die("problemas con el servidor");
mysql_select_db($db,$con)or die("problema con DB");
$sel=mysql_query("SELECT USER, PASSWORD FROM alumno WHERE USER='$_POST[user]'",$con);
$sesion=mysql_fetch_array($sel);

if($_POST['pw'] == $sesion['PASSWORD']){
	$_SESSION['username'] = $_POST['user'];
	echo "session iniciada exitosamente";
}else {
	echo "combinacion de errores";
}

}else{
	echo "debes llenar ambos campos";
}
 ?>

<html>
<head>
<title>Redirigir al navegador a otra URL</title>
<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.php">
</head>
<body>
</body>
</html>
