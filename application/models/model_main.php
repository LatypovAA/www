<?php
require_once 'model_db.php';
class Model_main extends Model 
{
    public function get_data() 
    {
    $query = "SELECT * FROM message ORDER BY date DESC";
    $result = Db::query_db($query);
    $posts = array();
    while ($row = mysqli_fetch_assoc($result))
    {
        $posts[] = $row;                 
    }
    return $posts;
    }

    function ajax_response()
    {
       $username=$_POST['name'];
        $msg=$_POST['text']; 
        $arrNameText=array
        (
            "username"=>$username,
            "msg"=>$msg,
        );
        echo json_encode($arrNameText);
 
    }
}



class Validation
{
    function validate_username($username)
    {
        if ((mb_strlen($username)>=3) and (mb_strlen($username)<=10)) 
        {
        return true;
        }

    return false;
    }
    
    function  validate_msg($msg)
    {
        if(!empty($msg)&& (strlen($msg)<400))
        {
            return true;
        }
        return false;
    }
    
    function escape ($link, $v)
    {
        return mysqli_real_escape_string($link, $v);
    }
}