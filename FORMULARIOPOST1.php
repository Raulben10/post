
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de captura de datos</title>
</head>
<body>
	<h1>Formulario POST 01 | Ingreso de datos 📝</h1>

<form method="POST" action="FORMULARIOPOST2.PHP">
	<table>
		<tr>
			<td>
				<label>Nombre</label>	
			</td>
			<td>
				<input type="text" name="nombre">
			</td>
		</tr>
		<tr>
			<td>
				<label>Apellido</label>	
			</td>
			<td>
<input type="text" name="apellido">
			</td>
		</tr>
		<tr>
			<td>
				<label>Edad</label>	
			</td>
			<td>
				<input type="number" name="edad">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="Enviar">
			</td>
		</tr>
	</table>

	<table>
		<tr>
			<td>
				<label>Seccion</label>	
			</td>
			<td>
				<input type="text" name="Seccion">
			</td>
		</tr>
	</table>


	<table>
		<tr>
			<td>
				<label>N° de lista</label>	
			</td>
			<td>
				<input type="text" name="N°delista">
			</td>
		</tr>
	</table>
</form>
</body>
</html>