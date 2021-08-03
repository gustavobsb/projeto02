<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo -->
    <a href="home.php" class="brand-link">
        <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SisGAFI</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="profile.php" class="d-block">  <?= $_SESSION['user']->nome ?> </a>
            </div>
        </div>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Página Inicial
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">TESOURARIA</li>
                    <?php if ($_SESSION['user']->admin): ?>
                    <li class="nav-item">
                        <a href="revenue.php" class="nav-link">
                            <i class="nav-icon fas fa-money-check-alt"></i>
                            <p>
                                Receitas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="expense.php" class="nav-link">
                            <i class="nav-icon fas fa-money-check"></i>
                            <p>
                                Despesas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="extract.php" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Extrato
                            </p>
                        </a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-chart-bar"></i>
                            <p>
                                Relatórios
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="annual-report.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contribuições</p>
                                </a>
                            </li>
                            <?php if ($_SESSION['user']->admin): ?>
                            <li class="nav-item">
                                <a href="tithe.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dízimos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="revenue-report.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Receitas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="expense-report.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Despesas</p>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="nav-header">SECRETARIA</li>
                    <?php if ($_SESSION['user']->admin): ?>
                    <li class="nav-item">
                        <a href="members.php" class="nav-link">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Membros
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="department.php" class="nav-link">
                            <i class="nav-icon far fa-building"></i>
                            <p>
                                Departamentos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="role.php" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Cargos
                            </p>
                        </a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a href="calendar.php" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Agenda
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-file"></i>
                            <p>
                                Documentos
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="letter.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Carta de Recomendação</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="wallet.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Carteirinha de Membro</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
</aside>
<div class="content-wrapper">