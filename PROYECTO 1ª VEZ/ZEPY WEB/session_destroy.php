<?php
// Mostramos la sesion
session_start();
//Destruimos la session
unset($_SESSION);
$_SESSION=array();
session_destroy();
header("Location:index.html");
?>
