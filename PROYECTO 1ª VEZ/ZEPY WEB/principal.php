<html>
<head>
	<meta charset="UTF-8">
     <title>Pagina PRINCIPAL</title>
     <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="cajafuera">
<div class="pagprincipal">
	
<?php
include('conexion.php');
session_start();

if(isset($_SESSION['usuario']))
{
	$usuarioingresado = $_SESSION['usuario'];
	echo "<h1>Bienvenido: $usuarioingresado </h1>";
	echo "<center><img src='logo_bueno.png' /></center><br>";
	echo "<h2>RELLENE EL SIGUIENTE FORMULARIO Y SELECCIONA UNA DE LAS OPCIONES</h2></br>";
?>
	<form method="POST">
	<table background="white" align="center">
	<form action="impregistro.php" method="POST">
	<tr>
	<td>NOMBRE: </td><td><input type="text" name="nombre"><br/></td><td colspan='2' align="center"><input type="submit" value="Insertar datos" name="btninsertar"></td>
	</tr>
	<tr>
	<td>APELLIDO: </td><td><input type="text" name="apellido"><br/></td>
	</tr>
	<tr>
	<td>EXTENSION: </td><td><input type="number" name="extension"><br/></td><td colspan='2' align="center"><input type="submit" value="Modificar datos" name="btnmod"></td>
	</tr>
	<tr>
	<td>CORREO: </td><td><input type="text" name="email"><br/></td>
	</tr>
	<tr>
	<td>PUESTO: </td><td><input type="text" name="puesto"><br/></td><td colspan='2' align="center"><input type="submit" value="Borrar datos" name="btnborrar"></td>
	</tr>
	<tr>
	<td>USUARIO: </td><td><input type="text" name="usuario"><br/></td> <td colspan='2' align="center">
	</tr>
	<tr>
	<td>PASSWORD: </td><td><input type="password" name="password"><br/></td><td colspan='2' align="center"><input type="submit" value="Cerrar sesión" name="btncerrar"></td>
	</tr>
	</form>
	</table>
<?php
	$conexion2 = mysqli_connect('localhost','pedro',"root","zepybd")
	or die ('Error en la conexión');
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$extension = $_POST['extension'];
	$correo = $_POST['email'];
	$puesto = $_POST['puesto'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	$btninsertar = "INSERT INTO empleados(Nombre, Apellido, Extension, Email, Puesto, usu, pass) values ('$nombre','$apellido','$extension','$correo','$puesto','$usuario','$password')";
}
else
{
	header('location: index.html');
}
?>


<?php 

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.html');
}
	
?>

</div>

</div>
</body>
</html>