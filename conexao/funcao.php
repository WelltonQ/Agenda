<?php
function inserir_novo_contato($id, $empresa_agenda, $CNPJCPF_agenda, $contato_agenda, $email_agenda, $fone1_agenda, $fone2_agenda, $fone3_agenda, $nbanco_agenda, $nomebanco_agenda, $agencia_agenda, $conta_agenda, $operacao_agenda, $observacao_agenda){
    $sql = "INSERT INTO agendas (usuario_id, empresa_agenda, CNPJCPF_agenda, contato_agenda, email_agenda, fone1_agenda, 
    fone2_agenda, fone3_agenda, nbanco_agenda, nomebanco_agenda, agencia_agenda, conta_agenda, operacao_agenda, 
    observacao_agenda) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = pdo ()->prepare($sql);
    $stmt->binValue(1,$id);
    $stmt->binValue(2,$empresa_agenda);
    $stmt->binValue(3,$CNPJCPF_agenda);
    $stmt->binValue(4,$contato_agenda);
    $stmt->binValue(5,$email_agenda);
    $stmt->binValue(6,$fone1_agenda);
    $stmt->binValue(7,$fone2_agenda);
    $stmt->binValue(8,$fone3_agenda);
    $stmt->binValue(9,$nbanco_agenda);
    $stmt->binValue(10,$nomebanco_agenda);
    $stmt->binValue(11,$agencia_agenda);
    $stmt->binValue(12,$conta_agenda);
    $stmt->binValue(13,$operacao_agenda);
    $stmt->binValue(14,$observacao_agenda);
    $stmt->execute();
    if ($stmt->rowCount()) {
		$_SESSION['menssagem'] = ' <p class="alert alert-success text-center"> Cadastrado com sucesso! </p>';
	} else {
		$_SESSION['menssagem'] = '<p class="alert alert-danger text-center">Erro, não foi possivel cadastrar!</p>';
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
    WHERE id_usuario = ? ";
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