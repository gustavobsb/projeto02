<?php
renderTitle('Página Inicial');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>R$ <?= $totalReceitas ?></h3>
                        <p>Total de Receitas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <?php if ($_SESSION['user']->admin): ?>
                        <a href="revenue.php" class="small-box-footer">Detalhes<i class="fas fa-arrow-circle-right"></i></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>R$ <?= $totalDespesas ?></h3>
                        <p>Total de Despesas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-card"></i>
                    </div>
                    <?php if ($_SESSION['user']->admin): ?>
                        <a href="expense.php" class="small-box-footer">Detalhes<i class="fas fa-arrow-circle-right"></i></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>R$ <?= $saldoTotal ?></h3>
                        <p>Saldo Total</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-calculator"></i>
                    </div>
                    <?php if ($_SESSION['user']->admin): ?>
                        <a href="extract.php" class="small-box-footer">Detalhes<i class="fas fa-arrow-circle-right"></i></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3><?= $totalMembros ?></h3>
                        <p>Total de Membros</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <?php if ($_SESSION['user']->admin): ?>
                        <a href="members.php" class="small-box-footer">Detalhes<i class="fas fa-arrow-circle-right"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="col-lg-6 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Receitas por Categoria
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <canvas id="donutChart"
                                    style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </section>
            <section class="col-lg-6 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-money-bill mr-1"></i>
                            Despesas por Categoria
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <canvas id="barChart"
                                    style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <section class="col-lg connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-calendar mr-1"></i>
                            Aniversariantes do Mês
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Data</th>
                                        <th>Nome</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <? foreach ($aniversariantes as $aniversariante): ?>
                                        <tr>
                                            <td><?= $aniversariante->nascimento ?></td>
                                            <td><?= $aniversariante->nome ?></td>
                                        </tr>
                                    <? endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
