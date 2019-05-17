<?php 
require_once 'vendor/autoload.php';

if (isset($_POST['email_usuario'])){

    $email_usuario = trim($_POST['email_usuario']);
    $senha_usuario = trim($_POST['senha_usuario']);

    $resultado = cadastrar_novo_usuario($email_usuario, $senha_usuario);
    
	if ($resultado) {
		header("location: index.php");
		die();
	} else {
		header("location: index.php");
		die();
	}

}

?>