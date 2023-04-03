<?php

include('conexion.php');

$nombre = $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];

//Para iniciar sesión
if(isset($_POST["btnloginx"]))
{

$queryusuario = mysqli_query($conn,"SELECT * FROM admin WHERE usu = '$nombre'");
$nr 		= mysqli_num_rows($queryusuario); 
$mostrar	= mysqli_fetch_array($queryusuario); 
	
if (($nr == 1) && ((md5($pass) == $mostrar['pass'])) )
	{ 
		session_start();
		$_SESSION['usuario']=$nombre;
		header("Location: principal.php");
	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.html' </script>";
	}
}

//Para registrar
if(isset($_POST["btnregistrarx"]))
{

$queryusuario 	= mysqli_query($conn,"SELECT * FROM admin WHERE usu = '$nombre'");
$nr 			= mysqli_num_rows($queryusuario); 

if ($nr == 0)
{
	$pass_fuerte = md5($pass);
	$queryregistrar = "INSERT INTO admin(usu, pass) values ('$nombre','$pass_fuerte')";
	

if(mysqli_query($conn,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $nombre');window.location= 'index.html' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
}

}else
{
		echo "<script> alert('No puedes registrar a este usuario: $nombre');window.location= 'index.html' </script>";
}

} 

?>