<?php

function esta_logado() {
	if (!isset($_SESSION['usuario_logado']) && empty($_SESSION['usuario_logado'])) {
		header("location: /");
	}
}

function base_url($args=null){
    $base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).$args;
    return $base_url;
}