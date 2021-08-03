<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sisgafi | Cadastro</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="login.php" class="h1"><b>Sisgafi</b></a>
        </div>
        <div class="card-body">
            <?php include(TEMPLATE_PATH . '/messages.php') ?>
            <p class="login-box-msg">Criar uma nova conta</p>
            <form action="#" method="post">
                <input type="hidden" name="admin" value="0">
                <input type="hidden" name="ativo" value="1">
                <div class="input-group mb-3">
                    <input type="text" class="form-control <?= $errors['nome'] ? 'is-invalid' : '' ?>"
                           placeholder="Nome Completo" name="nome" value="<?= $nome ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= $errors['nome'] ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
                           placeholder="Email" name="email" value="<?= $email ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>"
                           placeholder="Senha" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= $errors['password'] ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>"
                           placeholder="Confirmação de Senha" name="confirm_password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= $errors['confirm_password'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <button class="btn btn-primary btn-block">Registrar</button>
                    </div>
                </div>
            </form>
            <a href="login.php" class="text-center">Já possui uma conta?</a>
        </div>
    </div>
</div>

<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
