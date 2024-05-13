<?php session_start();

if (!isset($_SESSION['usuarioAutenticado']) || $_SESSION['usuarioAutenticado'] != 'SIM') {
	header('Location: ../index.html');
}

?>