<?php session_start();

$usuarioMaster = array('email_master' => 'felipe@teste.com', 'senha_master' => '123');
$usuarioAutenticado = false;



if($_POST['email'] === $usuarioMaster['email_master'] && $_POST['senha'] === $usuarioMaster['senha_master']) {
	$usuarioAutenticado = true;
}



if ($usuarioAutenticado) {
	$_SESSION['usuarioAutenticado'] = 'SIM';
	header('Location: ./Paginas/home.php');
} else {
	$_SESSION['usuarioAutenticado'] = 'NÃO';
	header('Location: index.html?msg=Erro de Login');
}

?>