<?php
    renderTitle("Lista de Eventos");
?>

<section class="content">
    <div class="container-fluid">

        <a href="calendar.php" class="btn btn-dark">
            Voltar
        </a>

        <?php include(TEMPLATE_PATH . '/messages.php') ?>

        <!-- Modal Atualizar Evento -->
        <div class="modal fade" id="modal-atualizar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Atualizar evento</h4>
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
                                        <label class="form-group">Nome Evento:</label>
                                        <input class="form-control" type="text" name="title" id="title">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Data inicio evento:</label>

                                        <input class="form-control" type="datetime-local" id="start" name="start">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Data fim evento:</label>
                                        <input class="form-control" type="datetime-local" id="end" name="end">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="form-group">Cor:</label>

                                        <input class="form-control" type="color" id="color" name="color" list="color" value="#FF0000">
                                        <datalist id="color">
                                            <option value="#FF0000">Vermelho</option>
                                            <option value="#FFA500">Laranja</option>
                                            <option value="#FFFF00">Amarelo</option>
                                            <option value="#008000">Verde</option>
                                            <option value="#0000FF">Azul</option>
                                            <option value="#4B0082">Indigo</option>
                                            <option value="#EE82EE">Violeta</option>
                                        </datalist>

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

        <!-- Modal Excluir Evento -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Excluir Evento</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <div class="modal-body">
                            <p>Deseja realmente excluir o Evento selecionado? Esta ação não poderá ser revertida.</p>
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
                <table id="events" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Data Inicio</th>
                        <th>Data Fim</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($agendas as $agenda): ?>
                        <tr>
                            <td><?= $agenda->id ?></td>
                            <td><?= $agenda->title ?></td>
                            <td><?= $agenda->start ?></td>
                            <td><?= $agenda->end ?></td>

                            <td>
                                <button type="button" class="btn btn-warning upagenda" data-toggle="modal" data-target="#modal-atualizar">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger delagenda" data-toggle="modal" data-target="#modal-default">
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
    </div>
</section>

