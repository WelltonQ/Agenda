<?php require_once './template/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body no-padding">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Empresa</th>
                                <th>Contato</th>
                                <th class="text-center" width="11%">Telefones</th>
                                <th class="text-center">Banco</th>
                                <th class="text-center">Ag./Conta/Op.</th>
                                <th width="20%">Observação</th>
                                <th class="text-center" width="13%">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (seleciona_agenda(ID_USER) as $v) : ?>
                                <tr>
                                    <td><?= $v->empresa_agenda ?> <br> <?= $v->CNPJCPF_agenda ?></td>
                                    <td><?= $v->contato_agenda ?> <br> <?= $v->email_agenda ?></td>
                                    <td class="text-center"><?= $v->fone1_agenda ?><br><?= $v->fone2_agenda ?><br><?= $v->fone3_agenda ?></td>
                                    <td><?= $v->nbanco_agenda ?> - <?= $v->nomebanco_agenda ?></td>
                                    <td><?= $v->agencia_agenda ?> / <?= $v->conta_agenda ?> / <?= $v->operacao_agenda ?></td>
                                    <td><?= $v->observacao_agenda ?></td>



                                    <!-- PRECISA EDITAR (BOTÕES DE EDITAR E EXCLUIR DA TABELA)-->
                                    <td class="text-center">
                                        <form method="post" class="label" action="editar" name="loginform">
                                            <input type="hidden" name="id" value="233">
                                            <button type="submit" class="btn btn-primary btn-sm" data-context="info" data-position="top-right">
                                                <span class="glyphicon glyphicon-pencil">
                                                </span>
                                            </button>
                                        </form>

                                        <form method="post" class="label" action="excluir" name="loginform">
                                            <input type="hidden" name="id" value="233">
                                            <button type="submit" class="btn btn-danger btn-sm" data-context="info" data-position="top-right">
                                                <span class="glyphicon glyphicon-trash">
                                                </span>
                                            </button>
                                        </form>
                                    </td>



                                </tr>

                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once './template/footer.php'; ?>