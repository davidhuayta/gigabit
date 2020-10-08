<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
	 <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="css/index.css" th:href="@{/css/index.css}">
</head>
<body>
<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="imagenes/user4.png" th:src="@{/imagenes/user.png}"/>
                </div>
				<form class="col-12" action="validarregistro.php" method="post">
					<TABLE  class="col-12" width="400" height="200" border="0">
						<tr>
							
							<td><input type="text" name="nombre" class="form-control" placeholder="NOMBRE"/></td>
						</tr>
						<tr>
							
							<td><input type="text" name="user" class="form-control" placeholder="USUARIO"/></td>
						</tr>
						<tr>
							
							<td><input type="PASSWORD" name="pw" class="form-control" placeholder="CONTRASEÑA"/></td>
						</tr>
						<tr>
			
							<td><input type="PASSWORD" name="pw2" class="form-control" placeholder="CONFIRMAR CONTRASEÑA"/></td>
						</tr>
						<tr>
							<button type="submit" class="btn btn-primary" name="Ingresar"><i class="fas fa-sign-in-alt"></i>  Registrarse </button>
						</tr>
					</TABLE>
				</form>
            </div>
        </div>
    </div>
	
</body>
</html>