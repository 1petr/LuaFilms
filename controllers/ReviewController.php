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
        $inc = ROOT . '/view/review.php';           //-----Подключенме разметки-----
        require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
        
        /*echo '<pre>';
        print_r($filmItem);
        echo '</pre>';*/
        
        return $filmItem['video'];
    }    
}