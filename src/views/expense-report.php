<?php
renderTitle("Depesas por Categoria");
?>

<section class="content">
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-body">
                <table id="expense-report" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Valor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($despesas as $despesa): ?>
                        <tr>
                            <td><?= $despesa['categoria'] ?></td>
                            <td>R$ <?= $despesa['total'] ?></td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
