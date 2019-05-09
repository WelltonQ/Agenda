<?php 
require_once './template/header.php';
esta_logado();
?>
<div class="container-fluid">
    <div class="main-content">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form action="formulario_final.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6" for="empresa_agenda">
                                <input type="text" class="form-control" name="empresa_agenda" placeholder="Empresa">
                            </div>
                            <div class="form-group col-md-6" for="CNPJCPF_agenda">
                                <input type="text" class="form-control" name="CNPJCPF_agenda" placeholder="CNPJ/CPF">
                            </div>
                            <div class="form-group col-md-6" for="contato_agenda">
                                <input type="text" class="form-control" name="contato_agenda" placeholder="Contato">
                            </div>
                            <div class="form-group col-md-6" for="email_agenda">
                                <input type="email" class="form-control" name="email_agenda" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4" for="fone1_agenda">
                                <input type="tel" class="form-control" name="fone1_agenda" placeholder="Fone1">
                            </div>
                            <div class="form-group col-md-4" for="fone2_agenda">
                                <input type="tel" class="form-control" name="fone2_agenda" placeholder="Fone2">
                            </div>
                            <div class="form-group col-md-4" for="fone3_agenda">
                                <input type="tel" class="form-control" name="fone3_agenda" placeholder="Fone3">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2" for="nbanco_agenda">
                                <input type="text" class="form-control" name="nbanco_agenda" placeholder="Nº Banco">
                            </div>

                            <div class="form-group col-md-4" for="nomebanco_agenda">
                                <select  class="form-control" name="nomebanco_agenda">
                                    <option value="0" selected>BANCO DO BRASIL</option>
                                    <option value="1">BRADESCO</option>
                                    <option value="2">CAIXA ECONÔMICA FEDERAL</option>
                                    <option value="3">SANTANDER</option>
                                    <option value="4">BANCO COOPERATIVO SICREDI S. A</option>
                                    <option value="5">BANCO DO NORDESTE</option>
                                    <option value="6">ITAU</option>
                                    <option value="7">OUTRO</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2" for="agencia_agenda">
                                <input type="text" class="form-control" name="agencia_agenda" placeholder="Agência">
                            </div>

                            <div class="form-group col-md-2" for="conta_agenda">
                                <input type="text" class="form-control" name="conta_agenda" placeholder="Conta">
                            </div>

                            <div class="form-group col-md-2" for="operacao_agenda">
                                <input type="text" class="form-control" name="operacao_agenda" placeholder="Operação">
                            </div>
                        </div>

                        <div class="form-group col-md-12" for="observacao_agenda">
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
require_once './template/footer.php'; 
?>