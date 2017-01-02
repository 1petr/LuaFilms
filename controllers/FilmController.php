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
}