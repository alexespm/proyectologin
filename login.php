
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
	<form action="controlar.php" method="post" >
	  <div class="form-group">
	    <label>Usuario:</label>	
	    <input type="text" name="usuario" class="form-control" aria-describedby="emailHelp" placeholder="Ingresa Usuario" required="True">
	    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	  	<label>Password:</label>
	    <input type="password" name="password" class="form-control" placeholder="Ingresa Password" required="True">
	  </div>
	  <div class="form-group form-check">
	    <label class="form-check-label" for="exampleCheck1">Rol</label>
	    <select name="rol" required="True">
			<option value=""></option>
			<option value="Administrador">Administrador</option>
			<option value="Maestro">Maestro</option>
			<option value="Alumno">Alumno</option>
		</select>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>