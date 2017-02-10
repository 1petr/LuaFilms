<?php

include_once ROOT. '/models/Films.php';

class FilmController
{
    public function actionIndex()
    {
        $filmList = array();
        $filmList = Film::getListFilms();
        
         $inc = ROOT . '/view/main.php'; //-----Подключенме разметки-----
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        
        //В методах контроллеров всегда возвращать true, иначе цикл в Router::run() не прервется и будет ошибка 
        return true; 
    }
    
    public function actionRange($rate)
    {
        $filmList = array();
        $filmList = Film::getListFilmsRange($rate);
        
         $inc = ROOT . '/view/main.php';           //-----Подключенме разметки-----
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
         require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
    }
    
	public function actionAbout()
	{
	    $inc = ROOT . '/view/about.php'; //-----Подключенме разметки-----

        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
	}
    
    public function actionCopyright()
	{
	    $inc = ROOT . '/view/copyright.php'; //-----Подключенме разметки-----

        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
	}
    
    public function actionContacts()
	{
	    $inc = ROOT . '/view/contacts.php'; //-----Подключенме разметки-----

        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
	}
	
	
	public function actionNotfound()
	{
	    echo "Неверный url адрес!";
        return true;
	}
}