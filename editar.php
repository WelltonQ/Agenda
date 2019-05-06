<?php require_once './template/header.php'; 
esta_logado();


if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = $_GET['id'];
    $agenda = select_id($id);
    

} else {
	header("location: admin.php");
}
?>

<div class="container-fluid">
    <div class="main-content">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form action="editar_final.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <input type="hidden" name="id_agenda" value="<?php echo $agenda->id_agenda; ?>">
                                <input value="<?php echo $agenda->empresa_agenda; ?>" type="text" class="form-control" name="empresa_agenda" placeholder="Empresa">
                            </div>
                            <div class="form-group col-md-6">
                                <input value="<?php echo $agenda->CNPJCPF_agenda; ?>" type="text" class="form-control" name="CNPJCPF_agenda" placeholder="CNPJ/CPF">
                            </div>
                            <div class="form-group col-md-6">
                                <input value="<?php echo $agenda->contato_agenda; ?>" type="text" class="form-control" name="contato_agenda" placeholder="Contato">
                            </div>
                            <div class="form-group col-md-6">
                                <input value="<?php echo $agenda->email_agenda; ?>" type="email" class="form-control" name="email_agenda" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input value="<?php echo $agenda->fone1_agenda; ?>" type="tel" class="form-control" name="fone1_agenda" placeholder="Fone1">
                            </div>
                            <div class="form-group col-md-4">
                                <input value="<?php echo $agenda->fone2_agenda; ?>" type="tel" class="form-control" name="fone2_agenda" placeholder="Fone2">
                            </div>
                            <div class="form-group col-md-4">
                                <input value="<?php echo $agenda->fone3_agenda; ?>" type="tel" class="form-control" name="fone3_agenda" placeholder="Fone3">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <input type="text" class="form-control" name="nbanco_agenda" placeholder="Nº Banco">
                            </div>

                            <div class="form-group col-md-4">
                                <select class="form-control" name="nomebanco_agenda">
                                    <option value="0" <?php echo ($agenda->nomebanco_agenda == 0) ? 'selected' : ''; ?> >BANCO DO BRASIL</option>
                                    <option value="1" <?php echo ($agenda->nomebanco_agenda == 1) ? 'selected' : ''; ?>>BRADESCO</option>
                                    <option value="2" <?php echo ($agenda->nomebanco_agenda == 2) ? 'selected' : ''; ?>>CAIXA ECONÔMICA FEDERAL</option>
                                    <option value="3" <?php echo ($agenda->nomebanco_agenda == 3) ? 'selected' : ''; ?>>SANTANDER</option>
                                    <option value="4" <?php echo ($agenda->nomebanco_agenda == 4) ? 'selected' : ''; ?>>BANCO COOPERATIVO SICREDI S. A</option>
                                    <option value="5" <?php echo ($agenda->nomebanco_agenda == 5) ? 'selected' : ''; ?>>BANCO DO NORDESTE</option>
                                    <option value="6" <?php echo ($agenda->nomebanco_agenda == 6) ? 'selected' : ''; ?>>ITAU</option>
                                    <option value="7" <?php echo ($agenda->nomebanco_agenda == 7) ? 'selected' : ''; ?>>OUTRO</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <input value="<?php echo $agenda->agencia_agenda; ?>" type="text" class="form-control" name="agencia_agenda" placeholder="Agência">
                            </div>

                            <div class="form-group col-md-2">
                                <input value="<?php echo $agenda->conta_agenda; ?>" type="text" class="form-control" name="conta_agenda" placeholder="Conta">
                            </div>

                            <div class="form-group col-md-2">
                                <input value="<?php echo $agenda->operacao_agenda; ?>" type="text" class="form-control" name="operacao_agenda" placeholder="Operação">
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <input value="<?php echo $agenda->observacao_agenda; ?>" type="text" class="form-control" name="observacao_agenda" placeholder="Observação">
                        </div>

                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-success">Editar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require_once './template/footer.php'; ?>