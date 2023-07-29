<?php

//Verificar SI me han enviado las variables	

// && = Y
// || = O

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad'])) {

	//Capturando valores enviados por método GET
	$nombreUsuario=$_POST['nombre'];
	$apellidoUsuario=$_POST['apellido'];
	$edadUsuario=$_POST['edad'];

} else {
	
	echo "<h1>Ingreso no autorizado 🙁</h1>";
	$nombreUsuario="";
	$apellidoUsuario="";
	$edadUsuario="";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página para mostrar datos</title>
</head>
<body>
	<h1>Formulario POST 02 | Verificación de datos 🔎</h1>
	<table>
		<tr>
			<td>
				<label>Nombre</label>	
			</td>
			<td>
				<?php echo $nombreUsuario;
				?>
			</td>
		</tr>
		<tr>
			<td>
				<label>Apellido</label>	
			</td>
			<td>
					<?php echo $apellidoUsuario;
				?>
			</td>
		</tr>
		<tr>
			<td>
				<label>Edad</label>	
			</td>
			<td>
					<?php echo $edadUsuario;
				?>
			</td>
		</tr>
	</table>
</body>
</html>