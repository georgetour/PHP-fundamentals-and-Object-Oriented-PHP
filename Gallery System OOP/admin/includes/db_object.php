<?php 

//*********Commonly used methods***********
class Db_object{

	  //Getting all records
    public static function find_all(){

        return static::find_this_query("SELECT * FROM " .self::$db_table. " ");

    }
    
    







}

?>