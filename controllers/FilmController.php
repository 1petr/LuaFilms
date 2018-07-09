<?php

include_once ROOT. '/models/Films.php';

class FilmController
{
    public function actionIndex()
    {
        $filmList = array();
        $filmList = Film::getListFilms();
		
		$inct = ROOT . '/view/titles/main_title.php'; //-----Подключенме разметки-----  
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
        
		$inct = ROOT . '/view/titles/main_title.php'; //-----Подключенме разметки-----  
        $inc = ROOT . '/view/main.php';           //-----Подключенме разметки-----
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
    }
    
	public function actionAbout()
	{
		$inct = ROOT . '/view/titles/about_title.php'; //-----Подключенме разметки-----  
	    $inc = ROOT . '/view/about.php'; //-----Подключенме разметки-----

        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
	}
    
    public function actionCopyright()
	{
		$inct = ROOT . '/view/titles/copyright_title.php'; //-----Подключенме разметки-----
	    $inc = ROOT . '/view/copyright.php'; //-----Подключенме разметки-----

        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
	}
    
    public function actionContacts()
	{
		$inct = ROOT . '/view/titles/contacts_title.php'; //-----Подключенме разметки-----
	    $inc = ROOT . '/view/contacts.php'; //-----Подключенме разметки-----

        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
	}
	
	
	public function actionNotfound()
	{
	    require_once(ROOT . '/view/404.php');
        return true;
	}
}