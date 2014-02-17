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
	return $link;
    }
    
    function close_db_connection($link)
    {
    mysqli_close($link);
    }
    
    static function query_db($query) {
        $link = open_db_connect();
        $result = mysqli_query($link, $query);
        return $result;
    }
    
}
