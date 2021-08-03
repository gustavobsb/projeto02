<?php
renderTitle('Membros');
?>

<section class="content">
    <div class="container-fluid">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-adicionar">
            Novo Membro
        </button>

        <?php include(TEMPLATE_PATH . '/messages.php') ?>

        <!-- Modal Adicionar Membro -->
        <div class="modal fade" id="modal-adicionar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar novo membro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" accept-charset="UTF-8">
                        <div class="modal-body">
                            <div class="row">
                                <p class="login-box-msg">Criar uma nova conta</p>
                                <input type="hidden" name="ativo" value="1">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nome Completo" name="nome">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Senha" name="password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Confirmação de Senha"
                                           name="confirm_password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-group">Administrador</label>
                                    <input type="checkbox" name="admin" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Excluir Membro -->
        <div class="modal fade" id="modal-excluir">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Excluir Membro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <div class="modal-body">
                            <p>Deseja realmente excluir o membro selecionado? Esta ação não poderá ser revertida.</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary">Excluir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <table id="members" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Celular</th>
                        <th>Telefone fixo</th>
                        <th>E-mail</th>
                        <th>Estado Civil</th>
                        <th>Sexo</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($membros as $membro): ?>
                        <tr>
                            <td><?= $membro->id ?></td>
                            <td><?= $membro->nome ?></td>
                            <td><?= $membro->celular ?></td>
                            <td><?= $membro->telefone ?></td>
                            <td><?= $membro->email ?></td>
                            <td><?= $membro->estado_civil ?></td>
                            <td><?= $membro->sexo ?></td>
                            <td>
                                <button type="button" class="btn btn-danger delmembro" data-toggle="modal" data-target="#modal-excluir">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</section>
