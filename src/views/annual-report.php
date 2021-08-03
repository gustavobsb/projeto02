<?php
renderTitle("Relatório de Contribuição");
?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <?php if ($_SESSION['user']->admin): ?>
                <form action="#" method="post">
                    <div class="input-group">
                        <select name="membro" class="form-control">
                            <option value="">Selecione o Membro...</option>
                            <?php
                            foreach ($membros as $membro) {
                                echo "<option value='{$membro->id}'>{$membro->nome}</option>";
                            }
                            ?>
                        </select>
                        <button class="btn btn-primary ml-2">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <br/>
                <?php endif; ?>
                <?php if ($contribuicoes): ?>
                <table id="contribution" class="table table-bordered table-striped table-hover my-2">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th>Data</th>
                    </tr>
                    </thead>
                    <tbody>
                        <? foreach ($contribuicoes as $contribuicao): ?>
                            <tr>
                                <td><?= $contribuicao['nome'] ?></td>
                                <td>R$ <?= $contribuicao['valor'] ?></td>
                                <td><?= $contribuicao['tipo'] ?></td>
                                <td><?= $contribuicao['data'] ?></td>
                            </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
                <?php if (empty($contribuicoes)): ?>
                    <br/>
                    <h3>Sem contribuições até o momento.</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
