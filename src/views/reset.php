<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sisgafi | Redefinição de Senha</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="login.php" class="h1"><b>Sisgafi</b></a>
        </div>
        <div class="card-body">
            <?php include(TEMPLATE_PATH . '/messages.php') ?>
            <p class="login-box-msg">Você está a apenas um passo de sua nova senha, recupere sua senha agora.</p>
            <form action="#" method="post" id="reset">
                <div class="input-group mb-3">
                    <input type="password" class="form-control" required
                           placeholder="Senha" name="password" id="password_reset">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" required
                           placeholder="Confirmação de Senha" name="confirm_password" id="confirm_password_reset">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block">Redefinir Senha</button>
                    </div>
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="login.php">Login</a>
            </p>
        </div>
    </div>
</div>

<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
