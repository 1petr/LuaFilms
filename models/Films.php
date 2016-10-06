<?php

class Film
{
    public static function getFilmsItemById($id)
    {
       $id = intval($id);
       $db = Db::getConnection(); 
       $result = $db->query('SELECT * FROM films WHERE id='.$id);
       $result->setFetchMode(PDO::FETCH_ASSOC);
       $filmItem = $result->fetch();
           
       return $filmItem;
    }
    
    
    
    public static function getListFilms()
    {
       $filmList = array();
       $db = Db::getConnection();    
       $result = $db->query('SELECT * FROM films ORDER BY id ASC LIMIT 6');
         
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
    
    
    
    
    public static function getListFilmsRange($rate)
    {
       $number = 6;   //Количество строк
        
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