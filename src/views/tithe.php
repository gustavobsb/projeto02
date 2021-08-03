<?php
    renderTitle("Dízimos");
?>

<section class="content">
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-body">
                <table id="tithe" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Membro</th>
                            <th>Valor</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($dizimos as $dizimo): ?>
                            <tr>
                                <td><?= $dizimo['nome'] ?></td>
                                <td><?= $dizimo['valor'] ?></td>
                                <td><?= $dizimo['data'] ?></td>
                            </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
