<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>El pepe vale arta verga</h1>
	<table>
		<form method="post" action="">
			<tr>
				<td>Usuario :</td>
				<td >
					<input type="text" value="" name="usuario">
				</td>
			</tr>
			<tr>
				<td align="middle">Contraseña :</td>
				<td>
					<input type="password" value="" name="contraseña">
				</td>			
			</tr>
			
			<tr>
				<td colspan="2" align="middle"><input type="submit" value="Guardar" name="boton""></td>
			</tr>
			<tr>
				<td>Cambio 1</td>
				<td>este es el cambio</td>
			</tr>
		</form>
	</table>

</body>
</html>
<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['contraseña']) ){

	$us = "admin";
	$con = "123";

	if($_POST['usuario'] == $us && $_POST['contraseña'] == $con){
		echo "Usuario y Contraseña correcta";
		setcookie("usuario", $_POST['usuario'],time()+3600*24*30);
		echo "<br>".$_COOKIE['usuario'];
		setcookie("clave", $_POST['contraseña'],time()+3600*24*30);
		echo "<br>".$_COOKIE['clave'];
		$_SESSION["USER"] = $_POST['usuario'];
		$_SESSION["PAS"] = $_POST['contraseña'];
		echo "<a target=_blank href= localhost/NTP/pr2.php>";
	}
	else
		echo "Usuario o Contraseña incorrecto";
}

?>