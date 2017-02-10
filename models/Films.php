<?php

class Film
{
    //Выборка одного фильма по id
    public static function getFilmsItemById($id)
    {
       $id = intval($id);
       $db = Db::getConnection(); 
       $result = $db->query('SELECT * FROM films WHERE id='.$id);
       $result->setFetchMode(PDO::FETCH_ASSOC);
       $filmItem = $result->fetch();
           
       return $filmItem;
    }
    
    //Выборка фильмов для главной страницы
    public static function getListFilms()
    {
       $filmList = array();
       $db = Db::getConnection();    
       $result = $db->query('SELECT * FROM films ORDER BY id ASC LIMIT 12');
         
       $i = 0;
       while($row = $result->fetch())
       {
           $filmList[$i]['id'] = $row['id'];
           $filmList[$i]['name'] = $row['name'];
           $filmList[$i]['country'] = $row['country'];
           $filmList[$i]['year'] = $row['year'];
           $filmList[$i]['genre'] = $row['genre'];
           $filmList[$i]['image'] = $row['image'];
           $filmList[$i]['video'] = $row['video'];
           $filmList[$i]['description'] = $row['description'];
           $i++;
       }
        
        /*echo '<pre>';
        print_r($filmList);
        echo '</pre>';*/
        
       return $filmList;
    }
    
    //Выборка фильмов по конкретному жанру
    public static function getListFilmsGenre($sort)
    {
        //Перевод параметра на русский
        $sort = TranslateGenreOnRus($sort);
        
       //Подключаемся к бд
       $db = Db::getConnection();
        
        //Выбираем все из бд
       $result = $db->query('SELECT * FROM films');
         
       //Обнуляем счетчик
       $i = 0;
        
       //Перемещаем в нормальный массив
       while($row = $result->fetch())
       {
           $filmListSort[$i]['id'] = $row['id'];
           $filmListSort[$i]['name'] = $row['name'];
           $filmListSort[$i]['country'] = $row['country'];
           $filmListSort[$i]['year'] = $row['year'];
           $filmListSort[$i]['genre'] = $row['genre'];
           $filmListSort[$i]['image'] = $row['image'];
           $filmListSort[$i]['video'] = $row['video'];
           $filmListSort[$i]['description'] = $row['description'];
           /*echo '<pre>';
            print_r($filmListGenre[$i]['id']);
            echo '</pre>';*/
           $i++;
       }
        
        //Создаем массив для отсортированного
        $filmList = array();
        
        $i = $i - 1;  //-1 для 0 элемента массива
        
        //Сортируем
        while($i != -1)
        {
            /*echo '<pre>';
            print_r($filmListGenre[$i]['id']);
            echo '</pre>';*/
            if($filmListSort[$i]['genre'] == $sort)   
            {
                array_push($filmList, $filmListSort[$i]);
            }
            $i--;
        }
        
        //Выводим
        return $filmList;
    }
    
    //Выборка фильмов по конкретной стране
    public static function getListFilmsCountry($sort)
    {
        //Перевод параметра на русский
        $sort = TranslateCountryOnRus($sort);
        
       //Подключаемся к бд
       $db = Db::getConnection();
        
        //Выбираем все из бд
       $result = $db->query('SELECT * FROM films');
         
       //Обнуляем счетчик
       $i = 0;
        
       //Перемещаем в нормальный массив
       while($row = $result->fetch())
       {
           $filmListSort[$i]['id'] = $row['id'];
           $filmListSort[$i]['name'] = $row['name'];
           $filmListSort[$i]['country'] = $row['country'];
           $filmListSort[$i]['year'] = $row['year'];
           $filmListSort[$i]['genre'] = $row['genre'];
           $filmListSort[$i]['image'] = $row['image'];
           $filmListSort[$i]['video'] = $row['video'];
           $filmListSort[$i]['description'] = $row['description'];
           /*echo '<pre>';
            print_r($filmListGenre[$i]['id']);
            echo '</pre>';*/
           $i++;
       }
        
        //Создаем массив для отсортированного
        $filmList = array();
        
        $i = $i - 1;  //-1 для 0 элемента массива
        
        //Сортируем
        while($i != -1)
        {
            /*echo '<pre>';
            print_r($filmListGenre[$i]['id']);
            echo '</pre>';*/
            if($filmListSort[$i]['country'] == $sort)   
            {
                array_push($filmList, $filmListSort[$i]);
            }
            $i--;
        }
        
        //Выводим
        return $filmList;
    }
    
    //Выборка фильмов по конкретному году
    public static function getListFilmsYear($sort)
    {
       //Подключаемся к бд
       $db = Db::getConnection();
        
        //Выбираем все из бд
       $result = $db->query('SELECT * FROM films');
         
       //Обнуляем счетчик
       $i = 0;
        
       //Перемещаем в нормальный массив
       while($row = $result->fetch())
       {
           $filmListSort[$i]['id'] = $row['id'];
           $filmListSort[$i]['name'] = $row['name'];
           $filmListSort[$i]['country'] = $row['country'];
           $filmListSort[$i]['year'] = $row['year'];
           $filmListSort[$i]['genre'] = $row['genre'];
           $filmListSort[$i]['image'] = $row['image'];
           $filmListSort[$i]['video'] = $row['video'];
           $filmListSort[$i]['description'] = $row['description'];
           /*echo '<pre>';
            print_r($filmListGenre[$i]['id']);
            echo '</pre>';*/
           $i++;
       }
        
        //Создаем массив для отсортированного
        $filmList = array();
        
        $i = $i - 1;  //-1 для 0 элемента массива
        
        //Сортируем
        while($i != -1)
        {
            /*echo '<pre>';
            print_r($filmListGenre[$i]['id']);
            echo '</pre>';*/
            if($filmListSort[$i]['year'] == $sort)   
            {
                array_push($filmList, $filmListSort[$i]);
            }
            $i--;
        }
        
        //Выводим
        return $filmList;
    }
    
    //Выборка новых фильмов
    public static function getListFilmsNew()
    {
       //Определяем год фильмов
       $sort = 2016;
        
       //Подключаемся к бд
       $db = Db::getConnection();
        
       //Выбираем все из бд
       $result = $db->query('SELECT * FROM films');
         
       //Обнуляем счетчик
       $i = 0;
        
       //Перемещаем в нормальный массив
       while($row = $result->fetch())
       {
           $filmListSort[$i]['id'] = $row['id'];
           $filmListSort[$i]['name'] = $row['name'];
           $filmListSort[$i]['country'] = $row['country'];
           $filmListSort[$i]['year'] = $row['year'];
           $filmListSort[$i]['genre'] = $row['genre'];
           $filmListSort[$i]['image'] = $row['image'];
           $filmListSort[$i]['video'] = $row['video'];
           $filmListSort[$i]['description'] = $row['description'];
           /*echo '<pre>';
            print_r($filmListGenre[$i]['id']);
            echo '</pre>';*/
           $i++;
       }
        
        //Создаем массив для отсортированного
        $filmList = array();
        
        $i = $i - 1;  //-1 для 0 элемента массива
        
        //Сортируем
        while($i != -1)
        {
            /*echo '<pre>';
            print_r($filmListGenre[$i]['id']);
            echo '</pre>';*/
            if($filmListSort[$i]['year'] == $sort)   
            {
                array_push($filmList, $filmListSort[$i]);
            }
            $i--;
        }
        
        //Выводим
        return $filmList;
    }
    
    //Выборка для одной страницы фильмов 
    public static function getListFilmsRange($rate)
    {
       $number = 12;   //Количество строк
        
       $quantity = $number*$rate;     //Верхняя граница
        
       $rate = ($rate - 1)*$number + 1;   //Нижняя граница 
        
       $filmList = array();
       $db = Db::getConnection();    
       $result = $db->prepare('SELECT * FROM films WHERE id BETWEEN :rate AND :quantity');
       $result->execute(array('rate' => $rate,
                              'quantity' => $quantity));
         
       $i = 0;
       while($row = $result->fetch())
       {
           $filmList[$i]['id'] = $row['id'];
           $filmList[$i]['name'] = $row['name'];
           $filmList[$i]['country'] = $row['country'];
           $filmList[$i]['year'] = $row['year'];
           $filmList[$i]['genre'] = $row['genre'];
           $filmList[$i]['image'] = $row['image'];
           $filmList[$i]['video'] = $row['video'];
           $filmList[$i]['description'] = $row['description'];
           $i++;
       }
        
        /*echo '<pre>';
        print_r($quantity);
        print_r($rate);
        print_r($row);
        echo '</pre>';*/
        
       return $filmList;
    }
}