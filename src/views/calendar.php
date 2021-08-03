<?php
    renderTitle('Agenda');
?>

<section class="content">
    <div class="container-fluid">

        <?php include(TEMPLATE_PATH . '/messages.php') ?>

        <!-- Modal Adicionar Evento -->
        <div class="modal fade" id="modal-adicionar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar um Evento</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" accept-charset="UTF-8">
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
                                        <input class="form-control" type="color" id="color" name="color" list="color"
                                               value="#FF0000">
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

        <?php if ($_SESSION['user']->admin): ?>

        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-adicionar">
            Novo Evento
        </button>

        <a href="event_list.php" class="btn btn-dark">
            Lista de Eventos
        </a>
        <?php endif; ?>

        <div class="card mt-3">
            <div id='calendar'></div>
        </div>
    </div>
</section>
