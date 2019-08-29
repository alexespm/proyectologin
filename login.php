
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/49234e04c2.js"></script>
</head>
<body>
	<div id="contenedor">	
		<div id="imagen">
			<img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png">
		</div>
		<div id="formulario">
			<form action="controlar.php" method="post" >
			  <div class="form-group">
			  	<h1>Login</h1>
			  </div>
			  <div class="form-group input-group">
			    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-user"></i></span>
                </div>	
			    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Ingresa Usuario" required="True">
			  </div>
			  <div id="usuario" class="form-group input-group">
			    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
			    <input type="password" name="password" class="form-control" placeholder="Ingresa Password" required="True">
			  </div>
			  <div id="rol" class="form-group input-group">
			    <select name="rol" class="form-control" required="True">
					<option value="Selecciona rol">Selecciona Rol</option>
					<option value="Administrador">Administrador</option>
					<option value="Maestro">Maestro</option>
					<option value="Alumno">Alumno</option>
				</select>
			  </div>

			  <div id="boton">
			  	<button type="submit" class="btn btn-primary">Ingresar</button>
			  </div>
			  
			</form>
		</div>
	</div>
	

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>