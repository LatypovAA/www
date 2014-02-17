<?php

class Db
{
    function open_db_connect()
    {
        $host = "localhost";
	$dbName="guests";
	$user="root";
	$password="";
	$link=mysqli_connect($host,$user,$password,$dbName);
        if (!$link) 
        {
        die('Ошибка соединения: ' . mysqli_connect_errno());
        }
	return $link;
    }
    
    function close_db_connection($link)
    {
    mysqli_close($link);
    }
    
    static function query_db($query) {
        $db = new Db();
        $link = $db->open_db_connect();
        if (!mysqli_query($link, "SET a=1"))
        {
            echo "Errorcode: ", mysqli_errno($link);
        }
        else
        {
          $result = mysqli_query($link, $query);  
          return $result;
        }
        
        
    }
    
}
