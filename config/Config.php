<?php
session_start();
ob_start();
define('URL', 'http://localhost/celkelogin/');

define('CONTROLER', 'home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'celke');

function __autoload($Class) {
    $dirName = array(
        'controllers',
        'models',
        'adm/models/helper',
        'views',
        'config'
    );
    foreach ($dirName as $diretorios) {
        if (file_exists("{$diretorios}/{$Class}.php")):
            require("{$diretorios}/{$Class}.php");        
        endif;
    }
    
}
