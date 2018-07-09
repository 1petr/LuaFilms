<?php


include_once ROOT. '/controllers/FilmController.php';

function request_url()  //Получение полного URL
{
    $result = ''; // Пока результат пуст
    $default_port = 80; // Порт по-умолчанию
 
    // А не в защищенном-ли мы соединении?
    if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on'))
    {
        // В защищенном! Добавим протокол...
        $result .= 'https://';
        // ...и переназначим значение порта по-умолчанию
        $default_port = 443;
    }
    
    else
    {
        // Обычное соединение, обычный протокол
        $result .= 'http://';
    }
    
    // Имя сервера, напр. site.com или www.site.com
    $result .= $_SERVER['SERVER_NAME'];
 
    // А порт у нас по-умолчанию?
    if ($_SERVER['SERVER_PORT'] != $default_port)
    {
        
        // Если нет, то добавим порт в URL
        $result .= ':'.$_SERVER['SERVER_PORT'];
        
    }
    
    // Последняя часть запроса (путь и GET-параметры).
    $result .= $_SERVER['REQUEST_URI'];
    
    // Уфф, вроде получилось!
    return $result;
}

function Navigation_Down()
{
    if(request_url()=='https://luafilm.ru/')
    {
        return;
    } 
    elseif(trim($_SERVER['REQUEST_URI'], '/')==1)
    {
        return;
    }
    else
    {
        return (int)(trim($_SERVER['REQUEST_URI'], '/')-1);
    }
}
    
function Navigation_Up()
{
    if(request_url()=='https://luafilm.ru/')
    {
        return (int)(trim($_SERVER['REQUEST_URI'], '/')+1);
    } 
    elseif(trim($_SERVER['REQUEST_URI'], '/')==8)
    {
        return;
    }
    else
    {
        return (int)(trim($_SERVER['REQUEST_URI'], '/')+1);
    }
}

function TranslateGenreOnEng($genre)
{
    switch($genre)
    {
        case 'Боевик':
            $genre = 'actions';
            break;
        case 'Драма':
            $genre = 'drama';
            break;
        case 'Фэнтези':
            $genre = 'fantasy';
            break;
        case 'Ужасы':
            $genre = 'horror';
            break;
        case 'Мелодрама':
            $genre = 'romance';
            break;
        case 'Комедия':
            $genre = 'comedy';
            break;
        case 'Фантастика':
            $genre = 'fiction';
            break;
        case 'Триллер':
            $genre = 'thriller';
            break;
        case 'Приключения':
            $genre = 'adventure';
            break;
        case 'Спорт':
            $genre = 'sport';
            break;
        case 'Сериал':
            $genre = 'series';
            break;
        case 'Мультфильм':
            $genre = 'cartoon';
            break;
    }
    return $genre;
}


function TranslateGenreOnRus($genre)
{
    switch($genre)
    {
        case 'actions':
            $genre = 'Боевик';
            break;
        case 'drama':
            $genre = 'Драма';
            break;
        case 'fantasy':
            $genre = 'Фэнтези';
            break;
        case 'horror':
            $genre = 'Ужасы';
            break;
        case 'romance':
            $genre = 'Мелодрама';
            break;
        case 'comedy':
            $genre = 'Комедия';
            break;
        case 'fiction':
            $genre = 'Фантастика';
            break;
        case 'thriller':
            $genre = 'Триллер';
            break;
        case 'adventure':
            $genre = 'Приключения';
            break;
        case 'sport':
            $genre = 'Спорт';
            break;
        case 'series':
            $genre = 'Сериал';
            break;
        case 'cartoon':
            $genre = 'Мультфильм';
            break;
    }
    return $genre;
}

function TranslateCountryOnEng($country)
{
    switch($country)
    {
        case 'Россия':
            $country = 'russia';
            break;
        case 'США':
            $country = 'usa';
            break;
        case 'Франция':
            $country = 'france';
            break;
        case 'Великобритания':
            $country = 'united_kingdom';
            break;
        case 'Мексика':
            $country = 'mexico';
            break;
        case 'ЮАР':
            $country = 'south_africa';
            break;
        case 'Ирландия':
            $country = 'ireland';
            break;
        case 'Дания':
            $country = 'denmark';
            break;
    }
    return $country;
}

function TranslateCountryOnRus($country)
{
    switch($country)
    {
        case 'russia':
            $country = 'Россия';
            break;
        case 'usa':
            $country = 'США';
            break;
        case 'france':
            $country = 'Франция';
            break;
        case 'united_kingdom':
            $country = 'Великобритания';
            break;
        case 'mexico':
            $country = 'Мексика';
            break;
        case 'south_africa':
            $country = 'ЮАР';
            break;
        case 'ireland':
            $country = 'Ирландия';
            break;
        case 'denmark':
            $country = 'Дания';
            break;
    }
    return $country;
}

function CompareFilms($filmList)
{
	if(count($filmList) >= 3)
	{
       if(($filmList[0]['genre']==$filmList[1]['genre'])&&($filmList[1]['genre']==$filmList[2]['genre']))
	   {
	   	   return $filmList[0]['genre'];
	   }
	
       if(($filmList[0]['country']==$filmList[1]['country'])&&($filmList[1]['country']==$filmList[2]['country']))
	   {
		   return $filmList[0]['country'];
	   }
	
       if(($filmList[0]['year']==$filmList[1]['year'])&&($filmList[1]['year']==$filmList[2]['year']))
	   {
		   return $filmList[0]['year'];
	   }
    }
	
	elseif(count($filmList) == 2)
	{
		if($filmList[0]['genre']==$filmList[1]['genre'])
		{
			return $filmList[0]['genre'];
		}
		if($filmList[0]['country']==$filmList[1]['country'])
		{
			return $filmList[0]['country'];
		}
		if($filmList[0]['year']==$filmList[1]['year'])
		{
			return $filmList[0]['year'];
		}
	}
	
	else
		return $filmList[0]['name'];
}

function TransponireISO8601($s)
{
	
	$segm = explode(":", $s);
	
	$str = 'PT$segm[0]H$segm[1]M$segm[2]S';
	
	eval("\$str = \"$str\";");
	
	return $str;
}

function TransponireInSeconds($s)
{
	
	$segm = explode(":", $s);
	
	$int = $segm[0]*3600 + $segm[1]*60 + $segm[2];
	
	return $int;
}


?>
	