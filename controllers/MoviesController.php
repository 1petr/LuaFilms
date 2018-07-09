<?php

include_once ROOT. '/models/Films.php';

class MoviesController
{
    public function actionGenre($sort)
    {
        $filmList = Film::getListFilmsGenre($sort);
		
		if(!$filmList)
		{
			require_once(ROOT . '/view/404.php');
		}
        else
		{
			$inct = ROOT . '/view/titles/sort_title.php'; //-----Подключенме заголовка-----
			$inc = ROOT . '/view/sort.php'; //-----Подключенме разметки-----
			require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
		}
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/

        return true;
    }
    
    public function actionCountry($sort)
    {
        $filmList = Film::getListFilmsCountry($sort);
        
        if(!$filmList)
		{
			require_once(ROOT . '/view/404.php');
		}
        else
		{
			$inct = ROOT . '/view/titles/sort_title.php'; //-----Подключенме заголовка-----
			$inc = ROOT . '/view/sort.php'; //-----Подключенме разметки-----
			require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
		}
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/

        return true;
    }
    
    public function actionYear($sort)
    {
        $filmList = Film::getListFilmsYear($sort);
        
		if(!$filmList)
		{
			require_once(ROOT . '/view/404.php');
		}
        else
		{
			$inct = ROOT . '/view/titles/sort_title.php'; //-----Подключенме заголовка-----
			$inc = ROOT . '/view/sort.php'; //-----Подключенме разметки-----
			require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
		}
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/

        return true;
    }
    
    public function actionNew()
    {
        $filmList = Film::getListFilmsNew();
        
        if(!$filmList)
		{
			require_once(ROOT . '/view/404.php');
		}
        else
		{
			$inct = ROOT . '/view/titles/sort_title.php'; //-----Подключенме заголовка-----
			$inc = ROOT . '/view/sort.php'; //-----Подключенме разметки-----
			require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
		}
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/

        return true;
    }
}