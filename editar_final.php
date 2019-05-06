<?php require_once 'vendor/autoload.php';

if (isset($_POST['empresa_agenda'])) {
    echo "<pre>";
    print_r($_POST);
    $empresa = trim($_POST['empresa_agenda']);
    $CNPJCPF = trim($_POST['CNPJCPF_agenda']);
    $contato = trim($_POST['contato_agenda']);
    $email = trim($_POST['email_agenda']);
    $fone1 = trim($_POST['fone1_agenda']);
    $fone2 = trim($_POST['fone2_agenda']);
    $fone3 = trim($_POST['fone3_agenda']);
    $nbanco = trim($_POST['nbanco_agenda']);
    $nomebanco = trim($_POST['nomebanco_agenda']);
    $agencia = trim($_POST['agencia_agenda']);
    $conta = trim($_POST['conta_agenda']);
    $operacao = trim($_POST['operacao_agenda']);
    $observacao = trim($_POST['observacao_agenda']);
    $id = trim($_POST['id_agenda']);

    $resultado = edita($empresa_agenda, $CNPJCPF_agenda, $contato_agenda, $email_agenda, 
    $fone1_agenda, $fone2_agenda, $fone3_agenda, $nbanco_agenda, $nomebanco_agenda, $agencia_agenda, $conta_agenda, 
    $operacao_agenda, $observacao_agenda, $id);
    
	if ($resultado) {
		$_SESSION['menssagem'] = ' <p class="alert alert-success text-center"> Editado com sucesso! </p>';
		header("location: admin.php");
		die();
	} else {
		$_SESSION['menssagem'] = '<p class="alert alert-danger text-center">Erro, não foi possivel editar!</p>';
		header("location: admin.php");
		die();
	}

}

?>