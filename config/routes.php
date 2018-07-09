<?php

//В массиве располагать пути в порядке от сложного к простому чтобы цикл
//В методе Router::run() не обрывался на более простом ложном пути
//Ссылки вида /film всегда идут от корня сайта!

return array(
    
    'review/([0-9]+)' => 'review/view/$1',
	
	'review/serials/([0-9]+)' => 'review/serials/$1',
    
	'about$' => 'film/about',
    
    'copyright$' => 'film/copyright',
    
    'contacts$' => 'film/contacts',
    
    'movies/genre/([a-z]+)' => 'movies/genre/$1',
    
    'movies/country/([a-z]+)' => 'movies/country/$1',
    
    'movies/year/(\d{4})' => 'movies/year/$1',
    
    'movies/new$' => 'movies/new',  
	
	'([1-8]{1}$)' => 'film/range/$1',
	
	'.+' => 'film/notfound',    //Любые непробельные символы
	
    '' => 'film/index',      
    
);