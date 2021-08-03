<?php
renderTitle('Minha Conta');
?>

<section class="content">
    <div class="container-fluid">

        <?php include(TEMPLATE_PATH . '/messages.php') ?>

        <!-- Desativar Conta -->
        <div class="modal fade" id="modal-excluir">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Desativar Conta</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post">
                        <input type="hidden" name="desativar" value="<?= $membro->id ?>">
                        <div class="modal-body">
                            <p>Deseja realmente desativar a conta? Esta ação não poderá ser revertida.</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary">Excluir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <form action="#" method="post">
            <input type="hidden" name="id" value="<?= $membro->id ?>">
            <input type="hidden" name="admin" value="<?= $membro->admin ?>">
            <input type="hidden" name="ativo" value="<?= $membro->ativo ?>">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome Completo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nome Completo" name="nome"
                                           value="<?= $membro->nome ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sexo</label>
                                <select class="form-control select2" style="width: 100%;" name="sexo">
                                    <option <?= ($membro->sexo == 'Selecione') ? 'selected' : '' ?> >Selecione</option>
                                    <option <?= ($membro->sexo == 'Masculino') ? 'selected' : '' ?> >Masculino</option>
                                    <option <?= ($membro->sexo == 'Feminino') ? 'selected' : '' ?> >Feminino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Celular" name="celular"
                                           value="<?= $membro->celular ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telefone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Telefone" name="telefone"
                                           value="<?= $membro->telefone ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Profissão</label>
                                <input type="text" class="form-control" placeholder="Profissão" name="profissao"
                                       value="<?= $membro->profissao ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Escolaridade</label>
                                <input type="text" class="form-control" placeholder="Escolaridade" name="escolaridade"
                                       value="<?= $membro->escolaridade ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estado Civil</label>
                                <input type="text" class="form-control" placeholder="Estado Civil" name="estado_civil"
                                       value="<?= $membro->estado_civil ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data de Nascimento</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="Data de Nascimento"
                                           name="nascimento"
                                           value="<?= $membro->nascimento ?>">
                                </div>
                            </div>
                        </div>
                    </div>               
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Departamento</label>
                                <select class="form-control select2-blue" name="id_departamento">
                                    <option selected></option>
                                    <?php
                                        foreach ($departamentos as $departamento) {
                                                echo "<option value='{$departamento->id}'>{$departamento->nome_departamento}</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label>Cargo</label>
                                <select class="form-control select2-blue" name="id_cargo">
                                    <option selected></option>
                                    <?php
                                        foreach ($cargos as $cargo) {
                                                echo "<option value='{$cargo->id}'>{$cargo->nome_cargo}</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email" name="email"
                                           value="<?= $membro->email ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Senha</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Senha" name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                        <button class="btn btn-dark">Alterar Dados</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-excluir">
                            Desativar Conta
                        </button>
                </div>
            </div>
        </form>
    </div>
</section>

