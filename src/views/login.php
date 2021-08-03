<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sisgafi | Login</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Sisgafi</b></a>
        </div>
        <div class="card-body">
            <?php include(TEMPLATE_PATH . '/messages.php') ?>
            <p class="login-box-msg">Faça login para iniciar sua sessão</p>
            <form action="#" method="post">
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
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <button class="btn btn-primary btn-block">Acessar</button>
                    </div>
                </div>
            </form>

            <p class="mb-1">
                <a href="forgot-password.php">Esqueci minha senha</a>
            </p>
            <p class="mb-0">
                <a href="register.php" class="text-center">Criar uma nova conta</a>
            </p>
        </div>
    </div>
</div>

<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
