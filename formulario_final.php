<?php 
require_once 'vendor/autoload.php';

if (isset($_POST['empresa_agenda'])){

    $id = ID_USER;
    $empresa_agenda = trim($_POST['empresa_agenda']);
    $CNPJCPF_agenda = trim($_POST['CNPJCPF_agenda']);
    $contato_agenda = trim($_POST['contato_agenda']);
    $email_agenda = trim($_POST['email_agenda']);
    $fone1_agenda = trim($_POST['fone1_agenda']);
    $fone2_agenda = trim($_POST['fone2_agenda']);
    $fone3_agenda = trim($_POST['fone3_agenda']);
    $nbanco_agenda = trim($_POST['nbanco_agenda']);
    $nomebanco_agenda = trim($_POST['nomebanco_agenda']);
    $agencia_agenda = trim($_POST['agencia_agenda']);
    $conta_agenda = trim($_POST['conta_agenda']);
    $operacao_agenda = trim($_POST['operacao_agenda']);
    $observacao_agenda = trim($_POST['observacao_agenda']);

    $resultado = inserir_novo_contato($id, $empresa_agenda, $CNPJCPF_agenda, $contato_agenda, $email_agenda, 
    $fone1_agenda, $fone2_agenda, $fone3_agenda, $nbanco_agenda, $nomebanco_agenda, $agencia_agenda, $conta_agenda, 
    $operacao_agenda, $observacao_agenda);
    
	if ($resultado) {
		header("location: admin.php");
		die();
	} else {
		header("location: admin.php");
		die();
	}

}

?>