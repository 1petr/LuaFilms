<?php

include_once ROOT. '/models/Films.php';

class FilmController
{
    public function actionIndex()
    {
        $filmList = array();
        $filmList = Film::getListFilms();
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
        require_once(ROOT . '/view/view.php');
        return true;
    }
    
    public function actionRange($rate)
    {
        $filmList = array();
        $filmList = Film::getListFilmsRange($rate);
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
        require_once(ROOT . '/view/view.php');
        return true;
    }
}