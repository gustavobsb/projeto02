<?php
renderTitle('Extrato');
?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table id="extract" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Categoria</th>
                        <th>Tipo</th>
                        <th>Valor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($extratos as $extrato): ?>
                        <tr>
                            <td><?= $extrato->entrada ?></td>
                            <td><?= $extrato->categoria ?></td>
                            <td><?= $extrato->tipo ?></td>
                            <td class="bg-<?= ($extrato->tipo == 'Receita') ? 'success' : 'danger' ?>"><?= $extrato->valor ?></td>
                        </tr>
                    <? endforeach; ?>
                </table>
            </div>
            <div class="card-footer">
                <table class="table table-bordered table-hover">
                    <tr class="bg-primary text-white">
                        <td class="bg-success">Total de Receitas: R$ <?= $receita ?></td>
                        <td class="bg-danger">Total de Despesas: R$ <?= $despesa ?></td>
                        <td>Saldo Total: R$ <?= $saldo ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
