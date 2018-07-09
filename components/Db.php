<?php

class Db
{ 
	public $isConn;
	protected $datab;
	
	public function __construct()
    {
        try
		{
			//Подключение параметров подключения в бд
			$paramsPath = ROOT . '/config/db_params.php';
			$params = include($paramsPath);	
        	$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}; charset=utf8";
			
			//Подключение к бд
        	$datab = new PDO($dsn, $params['user'], $params['password']);
			
			//Выбор функции вывода ошибок
			$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			//Режим вывода ошибок подключения
			$datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			
			//Подключение есть
		    $isConn = TRUE;
			
			return $datab;
		}
		
		//Cоздание сообщения об ошибке
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}   
    }
	
    public static function getConnection()
    {
        try
		{
			//Подключение параметров подключения в бд
			$paramsPath = ROOT . '/config/db_params.php';
			$params = include($paramsPath);	
        	$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}; charset=utf8";
			
			//Подключение к бд
        	$datab = new PDO($dsn, $params['user'], $params['password']);
			
			//Выбор функции вывода ошибок
			$datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			//Режим вывода ошибок подключения
			$datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			
			//Подключение есть
		    $isConn = TRUE;
			
			return $datab;
		}
		
		//Cоздание сообщения об ошибке
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}   
    }
	
	public static function Disconnect()
	{
		$this->datab = NULL;
		$this->isConn = FALSE;
	}
	
	public static function getRow($query, $params = [])
	{
		try
		{
			$stmt = $this->$datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetch();
		}
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}
	}
	
	public static function getRows($query, $params = [])
	{
		try
		{
			$stmt = $this->$datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetchAll();
		}
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}
	}
	
	public static function insertRow($query, $params = [])
	{
		try
		{
			$stmt = $this->$datab->prepare($query);
			$stmt->execute($params);
			return TRUE;
		}
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}
	}
	
	public static function updateRow($query, $params = [])
	{
		try
		{
			$stmt = $this->$datab->prepare($query);
			$stmt->execute($params);
			return TRUE;
		}
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}
	}
	
	public static function deleteRow($query, $params = [])
	{
		try
		{
			$stmt = $this->$datab->prepare($query);
			$stmt->execute($params);
			return TRUE;
		}
		catch(PDOException $e)
		{
			throw new Exception($e->getMessage());
		}
	}
	
}