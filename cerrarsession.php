<?php 
session_start();



session_destroy();
echo "has cerrado sesion";
 ?>

 <html>
<head>
<title>Redirigir al navegador a otra URL</title>
<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=main.php">
</head>
<body>
</body>
</html>