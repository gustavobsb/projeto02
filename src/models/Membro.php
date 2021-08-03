<?php

class Membro extends Model
{
    protected static $tableName = 'membro';
    protected static $columns = [
        'id',
        'nome',
        'nascimento',
        'sexo',
        'celular',
        'telefone',
        'profissao',
        'escolaridade',
        'estado_civil',
        'email',
        'password',
        'admin',
        'ativo',
        'id_departamento',
        'id_cargo'
    ];

    public function insert()
    {
        $this->validate();
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::insert();
    }

    public function update()
    {
        if (!$this->nascimento) {
            throw new AppException("Data de Nascimento é um campo obrigatório.");
        }

        if (!$this->nome) {
            throw new AppException("Nome é um campo obrigatório.");
        }

        if (!$this->password) {
            throw new AppException("Senha é um campo obrigatório.");
        }

        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        parent::update();
    }

    private function validate() {
        $errors = [];

        if (!$this->nome) {
            $errors['nome'] = "Nome é um campo obrigatório.";
        }

        if (!$this->email) {
            $errors['email'] = "Email é um campo obrigatório.";
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "O email informado é inválido.";
        }

        if (!$this->password) {
            $errors['password'] = "Senha é um campo obrigatório.";
        }

        if (!$this->confirm_password) {
            $errors['confirm_password'] = "Confirmação de senha é um campo obrigatório";
        }

        if ($this->password && $this->confirm_password && $this->password !== $this->confirm_password) {
            $errors['password'] = "As senhas informadas não são iguais.";
            $errors['confirm_password'] = "As senhas informadas não são iguais.";
        }

        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }

    public static function updatePassword($password, $email)
    {
        $sql = "UPDATE " . static::$tableName . " SET password = '{$password}' WHERE email = '{$email}'";
        Database::executeSQL($sql);
    }

    public static function desativar($id)
    {
        $sql = "UPDATE " . static::$tableName . " SET ativo = 0 WHERE id = '{$id}'";
        Database::executeSQL($sql);
        header("Location: logout.php");
    }

    public static function getBirthdays()
    {
        $sql = "SELECT * from membro where month(nascimento) = month(curdate()) order by day(nascimento)";

        $result = Database::getResultFromQuery($sql);

        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($data, new Membro($row));
            }
        }
        return $data;
    }

    public static function getContribution($idMembro)
    {
        $sql = "select m.nome as 'nome', r.valor as 'valor', r.categoria as 'tipo', DATE_FORMAT(r.entrada,'%d/%m/%Y') as 'data'
                from membro m
                inner join receita r
                on m.id = r.id_membro
                where m.id = {$idMembro}
                order by 4";

        $result = Database::getResultFromQuery($sql);

        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
        }
        return $data;
    }
}