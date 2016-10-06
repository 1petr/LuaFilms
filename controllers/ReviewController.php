<?php

include_once ROOT. '/models/Films.php';

class ReviewController
{
     public function actionView($id)
    {
        
        if($id)
        {
            $filmItem = Film::getFilmsItemById($id);
        }
        require_once(ROOT. '/view/stranica.php');
        
        /*echo '<pre>';
        print_r($filmItem);
        echo '</pre>';*/
        
        return $filmItem['video'];
    }
    
     public function actionEcho()
    {
        echo 'Doing';
        return true;
    }
    
    
}