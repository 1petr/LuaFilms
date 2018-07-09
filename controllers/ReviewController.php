<?php

include_once ROOT. '/models/Films.php';

class ReviewController
{
    public function actionView($id)
    {
		$filmItem = Film::getFilmsItemById($id);
		 
		if($filmItem['genre'] == 'Сериал')
		{
			$name = $filmItem['name'];
			
			$filmList = Film::getSeral($name);
			
			if(!$filmList)
			{
				require_once(ROOT . '/view/404.php');
			}
			else
			{
				$inct = ROOT . '/view/titles/review_title.php';
				$inc = ROOT . '/view/review_serials.php';           //-----Подключенме разметки-----
				require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
			}
		}
		else
		{
			$filmItem = Film::getFilmsItemById($id);

			if(!$filmItem)
			{
				require_once(ROOT . '/view/404.php');
			}
			else
			{
				$inct = ROOT . '/view/titles/review_title.php';
				$inc = ROOT . '/view/review.php';           //-----Подключенме разметки-----
				require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
			}
		}
        
        
        /*echo '<pre>';
        print_r($filmItem);
        echo '</pre>';*/		 
		 
        return $filmItem['video'];
    }
	
	public function actionSerials($id)
	{	
			$filmItem = Film::getSerialsItemById($id);	
			
	        if(!$filmItem)
		    {
				require_once(ROOT . '/view/404.php');
			}
			else
			{
				
				$inct = ROOT . '/view/titles/review_title.php';
				$inc = ROOT . '/view/review_serials.php';       //-----Подключенме разметки-----
				require_once(ROOT . '/view/css-js.php');    //-----Подключение разметки  head + script --------------------
			}
			return $filmItem;
	}
	
}