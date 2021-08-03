<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'Brazil' , 'pt_BR.utf-8');
mb_internal_encoding('UTF-8');
header('Content-Type: text/html; charset=utf-8');

//Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));
define('EMAIL_PATH', realpath(dirname(__FILE__) . '/../mail'));


//Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(dirname(__FILE__) . '/utils.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(MODEL_PATH . '/Membro.php'));
require_once(realpath(MODEL_PATH . '/Login.php'));
require_once(realpath(MODEL_PATH . '/Receita.php'));
require_once(realpath(MODEL_PATH . '/Despesa.php'));
require_once(realpath(MODEL_PATH . '/Agenda.php'));
require_once(realpath(MODEL_PATH . '/Extrato.php'));
require_once(realpath(MODEL_PATH . '/Departamento.php'));
require_once(realpath(MODEL_PATH . '/Cargo.php'));
require_once(realpath(MODEL_PATH . '/Recuperacao.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));

