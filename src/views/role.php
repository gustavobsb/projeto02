<?php
renderTitle('Cargos');
?>

<section class="content">
    <div class="container-fluid">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-adicionar">
            Novo Cargo
        </button>

        <?php include(TEMPLATE_PATH . '/messages.php') ?>

        <!-- Modal Adicionar Cargo -->
        <div class="modal fade" id="modal-adicionar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar novo Cargo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" accept-charset="UTF-8">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Nome Cargo:</label>
                                        <input class="form-control" type="text" name="nome_cargo">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Descrição:</label>
                                        <input class="form-control" type="text" name="descricao">
                                    </div>
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

        <!-- Modal Atualizar Cargo -->
        <div class="modal fade" id="modal-atualizar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Atualizar Cargo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" accept-charset="UTF-8">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Nome Cargo:</label>
                                        <input class="form-control" type="text" name="nome_cargo" id="nome_cargo">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Descrição:</label>
                                        <input class="form-control" type="text" name="descricao" id="descricao">
                                    </div>
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

        <!-- Modal Excluir Cargo -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Excluir Cargo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <div class="modal-body">
                            <p>Deseja realmente excluir o cargo selecionado? Esta ação não poderá ser revertida.</p>
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
                <table id="role" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome Cargo</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($cargos as $cargo): ?>
                        <tr>
                            <td><?= $cargo->id ?></td>
                            <td><?= $cargo->nome_cargo ?></td>
                            <td><?= $cargo->descricao ?></td>
                            <td>
                                <button type="button" class="btn btn-warning upcargo" data-toggle="modal" data-target="#modal-atualizar">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger delcargo" data-toggle="modal" data-target="#modal-default">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
