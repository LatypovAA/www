<?php
require_once 'model_db.php';
class Model_main extends Model 
{
    public function get_data() {

            $query = "SELECT * FROM message ORDER BY date DESC";
            Db::query_db($query);
            $posts = array();
            while ($row = mysqli_fetch_assoc($result))
            {
                $posts[] = $row;                 
            }
            return $posts;

    }
}