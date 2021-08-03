<?php
renderTitle('Receitas por Categoria');
?>

<section class="content">
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-body">
                <table id="revenue-report" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($receitas as $receita): ?>
                            <tr>
                                <td><?= $receita['categoria'] ?></td>
                                <td>R$ <?= $receita['total'] ?></td>
                            </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>