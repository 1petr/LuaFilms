<?php

include_once ROOT. '/models/Films.php';

class MoviesController
{
    public function actionGenre($sort)
    {
        $filmList = Film::getListFilmsGenre($sort);
        
        $inc = ROOT . '/view/sort.php'; //-----Подключенме разметки-----
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
    }
    
    public function actionCountry($sort)
    {
        $filmList = Film::getListFilmsCountry($sort);
        
        $inc = ROOT . '/view/sort.php'; //-----Подключенме разметки-----
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
    }
    
    public function actionYear($sort)
    {
        $filmList = Film::getListFilmsYear($sort);
        
        $inc = ROOT . '/view/sort.php'; //-----Подключенме разметки-----
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
    }
    
    public function actionNew()
    {
        $filmList = Film::getListFilmsNew();
        
        $inc = ROOT . '/view/sort.php'; //-----Подключенме разметки-----
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        return true;
    }
}