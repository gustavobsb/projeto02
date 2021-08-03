<?php
renderTitle('Despesas');
?>

<section class="content">
    <div class="container-fluid">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-adicionar">
            Nova Despesa
        </button>

        <?php include(TEMPLATE_PATH . '/messages.php') ?>

        <!-- Modal Adicionar Despesa -->
        <div class="modal fade" id="modal-adicionar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar nova despesa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" accept-charset="UTF-8">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Categoria:</label>
                                        <select class="form-control select2-blue" name="categoria">
                                            <option selected></option>
                                            <option>Alimentação</option>
                                            <option>Aluguel</option>
                                            <option>Assistência</option>
                                            <option>Combustível</option>
                                            <option>Condomínio</option>
                                            <option>Doação</option>
                                            <option>Lazer</option>
                                            <option>Manutenção</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Data da Entrada:</label>
                                        <input type="date" class="form-control" name="entrada">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Centro de Custo:</label>
                                        <select class="form-control select2-blue" name="centro_custo">
                                            <option selected></option>
                                            <option>Administração</option>
                                            <option>Batismo</option>
                                            <option>Culto</option>
                                            <option>Departamento</option>
                                            <option>Evangelismo</option>
                                            <option>Missões</option>
                                            <option>Secretaria</option>
                                            <option>Tesouraria</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-group">Tipo:</label>
                                        <select class="form-control select2-blue" name="tipo">
                                            <option selected></option>
                                            <option>Fixa</option>
                                            <option>Variável</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-group">Valor:</label>
                                        <input type="text" class="form-control" name="valor" id="money">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Descrição:</label>
                                        <input type="text" class="form-control" name="descricao">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Status:</label>
                                        <select class="form-control select2-blue" name="status">
                                            <option selected></option>
                                            <option>Em aberto</option>
                                            <option>Pago</option>
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

        <!-- Modal Atualizar Despesa -->
        <div class="modal fade" id="modal-atualizar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Atualizar despesa</h4>
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
                                        <label class="form-group">Categoria:</label>
                                        <select class="form-control select2-blue" name="categoria" id="categoria">
                                            <option selected></option>
                                            <option>Alimentação</option>
                                            <option>Aluguel</option>
                                            <option>Assistência</option>
                                            <option>Combustível</option>
                                            <option>Condomínio</option>
                                            <option>Doação</option>
                                            <option>Lazer</option>
                                            <option>Manutenção</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Data da Entrada:</label>
                                        <input type="date" class="form-control" name="entrada" id="entrada">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Centro de Custo:</label>
                                        <select class="form-control select2-blue" name="centro_custo" id="centro_custo">
                                            <option selected></option>
                                            <option>Administração</option>
                                            <option>Batismo</option>
                                            <option>Culto</option>
                                            <option>Departamento</option>
                                            <option>Evangelismo</option>
                                            <option>Missões</option>
                                            <option>Secretaria</option>
                                            <option>Tesouraria</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-group">Tipo:</label>
                                        <select class="form-control select2-blue" name="tipo" id="tipo">
                                            <option selected></option>
                                            <option>Fixa</option>
                                            <option>Variável</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-group">Valor:</label>
                                        <input type="text" class="form-control" name="valor" id="valor">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Descrição:</label>
                                        <input type="text" class="form-control" name="descricao" id="descricao">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Status:</label>
                                        <select class="form-control select2-blue" name="status" id="status">
                                            <option selected></option>
                                            <option>Em aberto</option>
                                            <option>Pago</option>
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

        <!-- Modal Excluir Despesa -->
        <div class="modal fade" id="modal-excluir">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Excluir Despesa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <div class="modal-body">
                            <p>Deseja realmente excluir a despesa selecionada? Esta ação não poderá ser revertida.</p>
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
                <table id="expense" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Categoria</th>
                            <th>Data da Entrada</th>
                            <th>Descrição</th>
                            <th>Tipo</th>
                            <th>Centro de Custo</th>
                            <th>Valor</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                            <? foreach ($despesas as $despesa): ?>
                                <tr>
                                    <td><?= $despesa->id ?></td>
                                    <td><?= $despesa->categoria ?></td>
                                    <td><?= $despesa->entrada ?></td>
                                    <td><?= $despesa->descricao ?></td>
                                    <td><?= $despesa->tipo ?></td>
                                    <td><?= $despesa->centro_custo ?></td>
                                    <td><?= $despesa->valor ?></td>
                                    <td><?= $despesa->status ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning updespesa" data-toggle="modal" data-target="#modal-atualizar">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger deldespesa" data-toggle="modal" data-target="#modal-excluir">
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
