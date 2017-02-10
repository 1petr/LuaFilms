<?php

class Router
{
    //Переменная для хранения маршрутов
    private $routes;

    //Конструктор класса
    public function __construct()
    {
        //Записываем в переменную путь к файлу маршрутов
        $routesPath = ROOT . '/config/routes.php';
        
        //Записываем в переменную $routes файл маршрутов
        $this->routes = include($routesPath);
    }

    //Функция получения строки запроса
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {

       // Получить строку запроса(все что после bootstrap)
       $uri = $this->getURI();
 
        // Проверить наличие такого запроса в routes.php         'contacts' => 'film/contacts'
        foreach ($this->routes as $uriPattern => $path) {

            // Сравниваем 'contacts' и строку запроса  
            if (preg_match("~$uriPattern~", $uri))
            {
                //Сравниваем строку запроса ('review/43') с регулярным выражением ('review/([0-9]+)'), в случае совпадения
                //Подставляем параметры в строку $path и передаем в переменную
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                                
                //Делим строку на 2 части в месте / и помещаем в массив
                $segments = explode('/', $internalRoute);
                
                //Вырезаем первый элемент из массива, добавляем к нему Controller и присваиваем
                $controllerName = array_shift($segments) . 'Controller';
                
                //Делаем первую букву заглавной
                $controllerName = ucfirst($controllerName);
                
                //Вырезаем первый элемент из массива, добавляем к нему action и присваиваем, делая первую букву заглавной
                $actionName = 'action' . ucfirst(array_shift($segments));
                             
                //оставшиеся элементы массива присваиваем параметрам
                $parameters = $segments;
                
                //Получаем путь к файлу котроллера, который будем подключать
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                //Подключаем файл контроллера, проверяя, существует ли он на диске
                if (file_exists($controllerFile))
                {
                    include_once($controllerFile);
                }

                //Создаем объект класса контроллера
                $controllerObject = new $controllerName;
                
                //Вызываем метод котроллера, передаем ему параметры и помещаем результат вызова в логическую переменную
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                //При успешном вызове метода котроллера выходим из цикла и функции run()
                if($result != null)
                {
                    break;
                }
            }
        }
    }
}