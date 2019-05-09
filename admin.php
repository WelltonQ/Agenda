<?php require_once './template/header.php'; ?>
<?php
esta_logado();
?>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body no-padding">
                        <a class="btn btn-primary btn=-sm" href="<?= base_url('formulario_contato.php'); ?>">Novo contato</a>
                        <hr>
                        <?php
                        if (isset($_SESSION['menssagem'])) {
                            echo $_SESSION['menssagem'];
                            unset($_SESSION['menssagem']);
                        }
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Empresa</th>
                                    <th>Contato</th>
                                    <th class="text-center" width="11%">Telefones</th>
                                    <th class="text-center">Banco</th>
                                    <th class="text-center">Ag./Conta/Op.</th>
                                    <th width="20%">Observação</th>
                                    <th class="text-center" width="8%">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (seleciona_agenda(ID_USER) as $v): ?>
                                    <tr>
                                        <td><b><?= $v->empresa_agenda ?></b> <br> <?= $v->CNPJCPF_agenda ?></td>
                                        <td><b><?= $v->contato_agenda ?></b> <br> <?= $v->email_agenda ?></td>
                                        <td class="text-center"><?= $v->fone1_agenda ?><br><?= $v->fone2_agenda ?><br><?= $v->fone3_agenda ?></td>
                                        <td class="<?php if ($v->nomebanco_agenda == 0) {echo "banco_brasil";} 
                                        else if ($v->nomebanco_agenda == 1) {echo "banco_bradesco";}
                                        else if ($v->nomebanco_agenda == 2) {echo "banco_caixa";}
                                        else if ($v->nomebanco_agenda == 3) {echo "banco_santander";}
                                        else if ($v->nomebanco_agenda == 4) {echo "banco_sicredi";}
                                        else if ($v->nomebanco_agenda == 5) {echo "banco_nordeste";}
                                        else if ($v->nomebanco_agenda == 6) {echo "banco_itau";}
                                        else if ($v->nomebanco_agenda == 7) {echo "banco_outro";} ?>">
                                        <?= $v->nbanco_agenda ?> - <?= $v->nomebanco_agenda ?></td>
                                        <td><?= $v->agencia_agenda ?> / <?= $v->conta_agenda ?> / <?= $v->operacao_agenda ?></td>
                                        <td><?= $v->observacao_agenda ?></td>


                                        <td class="text-center">
                                            <a href="./editar.php?id=<?= $v->id_agenda ?>">
                                                <button type="submit" class="btn btn-primary btn-sm" data-context="info" data-position="top-right">
                                                    <span class="glyphicon glyphicon-pencil">
                                                    </span>
                                                </button>
                                            </a>

                                            <a href="./deletar.php?id=<?= $v->id_agenda ?>">
                                                <button type="submit" class="btn btn-danger btn-sm" data-context="info" data-position="top-right">
                                                    <span class="glyphicon glyphicon-trash">
                                                    </span>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once './template/footer.php'; ?>