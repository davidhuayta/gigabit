<?php 
include("conexion.php");//conexion con el otro archivo.php
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['user']) && !empty($_POST['user']) 		&&
	isset($_POST['pw']) && !empty($_POST['pw']) &&
	isset($_POST['pw2']) && !empty($_POST['pw2']) &&
	$_POST['pw'] == $_POST['pw2'])
{
	$con = mysql_connect($host,$user,$pw)or die("problemas al conectar server");//conectar con el servidor
	mysql_select_db($db,$con)or die("problemas con la conexion a la BD");//seleccionar BD
	mysql_query("INSERT INTO alumno (NOMBREA,USER,PASSWORD) VALUES ('$_POST[nombre]','$_POST[user]','$_POST[pw]')",$con);	//hacer consultas
	echo "datos insertados<BR>";
	echo "Nombre:".$_POST['nombre']."<BR>";
	echo "Usuario:".$_POST['user']."<BR>";
	echo "Password:".$_POST['pw']."<BR>";
	 ?><html>
	<head>
	<title>Redirigir al navegador a otra URL</title>
	<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=main.php">
	</head>
	<body>
	</body>
	</html>
	<?php
}else{
echo "verifica que llenaste los campos y los password coinciden";

 ?><html>
<head>
<title>Redirigir al navegador a otra URL</title>
<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=registrar.php">
</head>
<body>
</body>
</html>
<?php 
}
 ?>