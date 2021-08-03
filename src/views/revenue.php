<?php
renderTitle("Receitas");
?>

<section class="content">
    <div class="container-fluid">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-adicionar">
            Nova Receita
        </button>

        <?php include(TEMPLATE_PATH . '/messages.php') ?>

        <!-- Modal Adicionar Receita -->
        <div class="modal fade" id="modal-adicionar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar nova receita</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" accept-charset="UTF-8">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-group">Categoria:</label>
                                        <select class="form-control select2-blue" name="categoria">
                                            <option selected></option>
                                            <option>Dízimo</option>
                                            <option>Oferta</option>
                                            <option>Doação</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-group">Data da Entrada:</label>
                                        <input type="date" class="form-control" name="entrada">
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label class="form-group">Membro:</label>
                                        <select class="form-control select2-blue" name="id_membro">
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
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Origem:</label>
                                        <select class="form-control select2-blue" name="origem">
                                            <option selected></option>
                                            <option>Bazar</option>
                                            <option>Cantina</option>
                                            <option>Culto</option>
                                            <option>Evento</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Valor:</label>
                                        <input type="text" class="form-control" name="valor" id="money">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Forma de Pagamento:</label>
                                        <select class="form-control select2-blue" name="forma_pagamento">
                                            <option selected></option>
                                            <option>Dinheiro</option>
                                            <option>Cartão</option>
                                            <option>Depósito</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Status:</label>
                                        <select class="form-control select2-blue" name="status">
                                            <option selected></option>
                                            <option>Confirmado</option>
                                            <option>Cancelado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Atualizar Receita -->
        <div class="modal fade" id="modal-atualizar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Atualizar receita</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" accept-charset="UTF-8">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-group">Categoria:</label>
                                        <select class="form-control select2-blue" name="categoria" id="categoria">
                                            <option selected></option>
                                            <option>Dízimo</option>
                                            <option>Oferta</option>
                                            <option>Doação</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-group">Data da Entrada:</label>
                                        <input type="date" class="form-control" name="entrada" id="data">
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label class="form-group">Membro:</label>
                                        <select class="form-control select2-blue" name="id_membro" id="id_membro">
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
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Origem:</label>
                                        <select class="form-control select2-blue" name="origem" id="origem">
                                            <option selected></option>
                                            <option>Bazar</option>
                                            <option>Cantina</option>
                                            <option>Culto</option>
                                            <option>Evento</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Valor:</label>
                                        <input type="text" class="form-control" name="valor" id="valor">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Forma de Pagamento:</label>
                                        <select class="form-control select2-blue" name="forma_pagamento" id="forma_pagamento">
                                            <option selected></option>
                                            <option>Dinheiro</option>
                                            <option>Cartão</option>
                                            <option>Depósito</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Status:</label>
                                        <select class="form-control select2-blue" name="status" id="status">
                                            <option selected></option>
                                            <option>Confirmado</option>
                                            <option>Cancelado</option>
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

        <!-- Modal Excluir Receita -->
        <div class="modal fade" id="modal-excluir">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Excluir Receita</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <div class="modal-body">
                            <p>Deseja realmente excluir a receita selecionada? Esta ação não poderá ser revertida.</p>
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
                <table id="revenue" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Categoria</th>
                        <th>Origem</th>
                        <th>Membro</th>
                        <th>Data da Entrada</th>
                        <th>Valor</th>
                        <th>Forma de Pagamento</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($receitas as $receita): ?>
                        <tr>
                            <td><?= $receita->id ?></td>
                            <td><?= $receita->categoria ?></td>
                            <td><?= $receita->origem ?></td>
                            <td><?= $receita->id_membro ?></td>
                            <td><?= $receita->entrada ?></td>
                            <td><?= $receita->valor ?></td>
                            <td><?= $receita->forma_pagamento ?></td>
                            <td><?= $receita->status ?></td>
                            <td>
                                <button type="button" class="btn btn-warning upreceita" data-toggle="modal" data-target="#modal-atualizar">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger delreceita" data-toggle="modal" data-target="#modal-excluir">
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

