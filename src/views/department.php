<?php
    renderTitle("Departamentos");
?>

<section class="content">
    <div class="container-fluid">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-adicionar">
            Novo Departamento
        </button>

        <?php include(TEMPLATE_PATH . '/messages.php') ?>

        <!-- Modal Adicionar Departamento -->
        <div class="modal fade" id="modal-adicionar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar novo departamento</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" accept-charset="UTF-8">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Nome Departamento:</label>
                                        <input class="form-control" type="text" name="nome_departamento">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Descrição:</label>
                                        <input class="form-control" type="text" name="descricao">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Líder:</label>
                                        <select class="form-control select2-blue" name="id_lider">
                                            <option selected></option>
                                            <?php
                                            foreach ($membros as $membro) {
                                                echo "<option value='{$membro->id}'>{$membro->nome}</option>";
                                            }
                                            ?>
                                        </select>
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

        <!-- Modal Atualizar Departamento -->
        <div class="modal fade" id="modal-atualizar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Atualizar departamento</h4>
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
                                        <label class="form-group">Nome Departamento:</label>
                                        <input class="form-control" type="text" name="nome_departamento" id="nome_departamento">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Descrição:</label>
                                        <input class="form-control" type="text" name="descricao" id="descricao">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Líder:</label>
                                        <select class="form-control select2-blue" name="id_lider" id="id_lider">
                                            <?php
                                            foreach ($membros as $membro) {
                                                echo "<option value='{$membro->id}'>{$membro->nome}</option>";
                                            }
                                            ?>
                                        </select>
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

        <!-- Modal Excluir Departamento -->
        <div class="modal fade" id="modal-excluir">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Excluir Departamento</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <div class="modal-body">
                            <p>Deseja realmente excluir o departamento selecionado? Esta ação não poderá ser revertida.</p>
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
                <table id="department" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome Departamento</th>
                            <th>Descrição</th>
                            <th>Líder</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($departamentos as $departamento): ?>
                            <tr>
                                <td><?= $departamento->id ?></td>
                                <td><?= $departamento->nome_departamento ?></td>
                                <td><?= $departamento->descricao ?></td>
                                <td><?= $departamento->id_lider ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning updepto" data-toggle="modal" data-target="#modal-atualizar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger deldepto" data-toggle="modal" data-target="#modal-excluir">
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
