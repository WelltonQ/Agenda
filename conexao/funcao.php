<?php


function edita($empresa, $CNPJCPF, $contato, $email, $fone1, 
$fone2, $fone3, $nbanco, $nomebanco, $agencia, $conta, $operacao, 
$observacao, $id) {
    $sql = "UPDATE agendas SET empresa_agenda = ?, CNPJCPF_agenda = ?, contato_agenda = ?, email_agenda = ?, fone1_agenda = ?, 
    fone2_agenda = ?, fone3_agenda = ?, nbanco_agenda = ?, nomebanco_agenda = ?, agencia_agenda = ?, conta_agenda = ?, operacao_agenda = ?, 
    observacao_agenda = ? WHERE id_agenda = ?";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1, $empresa);
    $stmt->bindValue(2, $CNPJCPF);
    $stmt->bindValue(3, $contato);
    $stmt->bindValue(4, $email);
    $stmt->bindValue(5, $fone1);
    $stmt->bindValue(6, $fone2);
    $stmt->bindValue(7, $fone3);
    $stmt->bindValue(8, $nbanco);
    $stmt->bindValue(9, $nomebanco);
    $stmt->bindValue(10, $agencia);
    $stmt->bindValue(11, $conta);
    $stmt->bindValue(12, $operacao);
    $stmt->bindValue(13, $observacao);
    $stmt->bindValue(14, $id);

    if ($stmt->execute()) {
		return true;
	} else {
		return false;
	}
}

function select_id($id) {
	$sql = "SELECT * FROM agendas WHERE id_agenda = ?";
	$stmt = pdo()->prepare($sql);
	$stmt->bindValue(1, $id);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		return $stmt->fetch(\PDO::FETCH_OBJ);
	} else {
		return false;
	}
}

function delete($id) {
	$sql = "DELETE FROM agendas WHERE id_agenda = ?";
	$stmt = pdo()->prepare($sql);
	$stmt->bindValue(1, $id);
	$stmt->execute();
}


function inserir_novo_contato($id, $empresa_agenda, $CNPJCPF_agenda, $contato_agenda, $email_agenda, $fone1_agenda, 
$fone2_agenda, $fone3_agenda, $nbanco_agenda, $nomebanco_agenda, $agencia_agenda, $conta_agenda, $operacao_agenda, 
$observacao_agenda){
    $sql = "INSERT INTO agendas (usuario_id, empresa_agenda, CNPJCPF_agenda, contato_agenda, email_agenda, fone1_agenda, 
    fone2_agenda, fone3_agenda, nbanco_agenda, nomebanco_agenda, agencia_agenda, conta_agenda, operacao_agenda, 
    observacao_agenda) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1,$id);
    $stmt->bindValue(2,$empresa_agenda);
    $stmt->bindValue(3,$CNPJCPF_agenda);
    $stmt->bindValue(4,$contato_agenda);
    $stmt->bindValue(5,$email_agenda);
    $stmt->bindValue(6,$fone1_agenda);
    $stmt->bindValue(7,$fone2_agenda);
    $stmt->bindValue(8,$fone3_agenda);
    $stmt->bindValue(9,$nbanco_agenda);
    $stmt->bindValue(10,$nomebanco_agenda);
    $stmt->bindValue(11,$agencia_agenda);
    $stmt->bindValue(12,$conta_agenda);
    $stmt->bindValue(13,$operacao_agenda);
    $stmt->bindValue(14,$observacao_agenda);
    $stmt->execute();
    if ($stmt->rowCount()) {
		$_SESSION['menssagem'] = ' <p class="alert alert-success text-center"> Cadastrado com sucesso! </p>';
	} else {
		$_SESSION['menssagem'] = '<p class="alert alert-danger text-center">Erro, não foi possível cadastrar!</p>';
	}

}

function seleciona_tudo() {
    $sql = "SELECT * FROM agendas";
    $stmt = pdo()->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(\PDO::FETCH_OBJ);
    return $resultado;
}

function seleciona_agenda($idUser) {
    $sql = "SELECT * FROM agendas
    join usuarios
    on usuarios.id_usuario = agendas.usuario_id
    WHERE id_usuario = ? ORDER BY empresa_agenda ASC";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1, $idUser);
    $stmt->execute();
    $resultado = $stmt->fetchAll(\PDO::FETCH_OBJ);
    return $resultado;
}

function login($email, $senha){
    $sql = "SELECT * FROM usuarios WHERE email_usuario=? AND senha_usuario=?";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(1, $email);
    $stmt->bindValue(2, $senha);
    $stmt->execute();
    $resultado = $stmt->fetch(\PDO::FETCH_OBJ);
    return $resultado;
}