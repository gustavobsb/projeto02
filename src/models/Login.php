<?php

class Login extends Model
{

    public function validate()
    {
        $errors = [];

        if (!$this->email) {
            $errors['email'] = 'E-mail é um campo obrigatório.';
        }

        if (!$this->password) {
            $errors['password'] = 'Por favor, informe a senha.';
        }

        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }

    public function checkLogin()
    {
        $this->validate();
        $user = Membro::getOne(['email' => $this->email]);
        if ($user) {
            if (!$user->ativo) {
                throw new AppException("Conta desativada.");
            }
            if (password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new AppException("Usuário e Senha inválidos.");
    }
}