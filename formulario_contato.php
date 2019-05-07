<?php 
require_once './template/header.php';
esta_logado();
?>
<div class="container-fluid">
    <div class="main-content">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form action="formulario_contato.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="empresa_agenda" placeholder="Empresa">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="CNPJCPF_agenda" placeholder="CNPJ/CPF">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="contato_agenda" placeholder="Contato">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email_agenda" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="tel" class="form-control" name="fone1_agenda" placeholder="Fone1">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="tel" class="form-control" name="fone2_agenda" placeholder="Fone2">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="tel" class="form-control" name="fone3_agenda" placeholder="Fone3">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <input type="text" class="form-control" name="nbanco_agenda" placeholder="Nº Banco">
                            </div>

                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control" name="nomebanco_agenda">
                                    <option selected>BANCO DO BRASIL</option>
                                    <option>BRADESCO</option>
                                    <option>CAIXA ECONÔMICA FEDERAL</option>
                                    <option>SANTANDER</option>
                                    <option>BANCO COOPERATIVO SICREDI S. A</option>
                                    <option>BANCO DO NORDESTE</option>
                                    <option>ITAU</option>
                                    <option>OUTRO</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <input type="text" class="form-control" name="agencia_agenda" placeholder="Agência">
                            </div>

                            <div class="form-group col-md-2">
                                <input type="text" class="form-control" name="conta_agenda" placeholder="Conta">
                            </div>

                            <div class="form-group col-md-2">
                                <input type="text" class="form-control" name="operacao_agenda" placeholder="Operação">
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="observacao_agenda" placeholder="Observação">
                        </div>

                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-success">cadastrar</button>
                        </div>

                        <?php
                        if (isset($_SESSION['menssagem'])) {
                            echo $_SESSION['menssagem'];
                            unset($_SESSION['menssagem']);
                        }
                        ?>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['empresa_agenda']) && !empty($_POST['empresa_agenda'])) {
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
        header("location: formulario_contato.php");
    } else {
        header("location: formulario_contato.php");
    }
}


require_once './template/footer.php'; 
?>