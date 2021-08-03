<?php

require_once(realpath(EMAIL_PATH . '/PHPMailer.php'));
require_once(realpath(EMAIL_PATH . '/SMTP.php'));
require_once(realpath(EMAIL_PATH . '/Exception.php'));

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$recuperacao = null;
$dados = [];
$envPath = realpath(dirname(__FILE__) . '/../env.ini');
$env = parse_ini_file($envPath);

$smtpEmail = $env['email'];
$smtpPass = $env['senha'];

if (count($_POST) > 0) {
    $email = $_POST['email'];
    try {
        $dbMembro = Membro::getOne(['email' => $email]);
        if ($dbMembro) {
            // Dados de recuperação
            $dados['email'] = $email;
            $dados['token'] = sha1(uniqid(mt_rand(), true));
            $recuperacao = new Recuperacao($dados);
            $recuperacao->insert();
            $link = "http://localhost/reset.php?email=$recuperacao->email&token=$recuperacao->token";

            // Configuração do Servidor
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = $smtpEmail;
            $mail->Password = $smtpPass;
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';

            //Corpo do EMAIL
            $mail->setFrom($smtpEmail, "Sisgafi");
            $mail->addAddress($dbMembro->email);
            $mail->isHTML(true);
            $mail->Subject = "Redefinir Senha";
            $mail->Body = "<p>Olá, <strong>{$dbMembro->nome}</strong>!</p>" .
                "<p>Uma redefinição de senha foi solicitada para sua conta.</p>" .
                "<p>Clique no link abaixo para criar uma nova senha.<br><br>" .
                "<a href='{$link}'>Redefinir senha</a></p>";
            $mail->AltBody = "Clique no link para criar uma nova senha: " . $link;

            if ($mail->send()) {
                addSuccessMsg("Email de recuperação enviado.");
                header( "Refresh:3; url=http://localhost/login.php", true, 303);
            } else {
                echo "Email não enviado";
            }
        } else {
            addErrorMsg("Email não encontrado.");
        }
    } catch (Exception $e) {
        echo "Erro ao enviar email: {$mail->ErrorInfo}";
    }
}

loadView('forgot-password');