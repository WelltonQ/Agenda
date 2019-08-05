<?php 
require_once 'vendor/autoload.php';

if (isset($_POST['email_usuario']) && !empty($_POST['email_usuario'])){

    $email_usuario = trim($_POST['email_usuario']);
	$senha_usuario = trim($_POST['senha_usuario']);
	$conf_senha_usuario = trim($_POST['conf_senha_usuario']);

		if (($senha_usuario) == ($conf_senha_usuario)) {
			header("location: index.php");
			$resultado = cadastrar_novo_usuario($email_usuario, $senha_usuario, $conf_senha_usuario);
			die();
		} else if (($conf_senha_usuario) != ($senha_usuario)) {
			$_SESSION['menssagem'] = ' <p class="alert alert-danger text-center">As senhas não correspondem.</p>';
			header("location: cadastrar.php");
			die();
		}else {
			header("location: index.php");
			die();
		}

}else{
	$_SESSION['menssagem'] = ' <p class="alert alert-danger text-center">Por favor, coloque um email válido.</p>';
	header("location: index.php");
}
?>