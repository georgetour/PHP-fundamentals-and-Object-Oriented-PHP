<?php 

//Commonly used methods
class Db_object{

	//Getting all records
    public static function find_all(){

        return self::find_this_query("SELECT * FROM " .self::$db_table. " ");

    }


    //Getting one result by id
    public static function find_by_id($id){

        $the_result_array= self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE id='$id' LIMIT 1");
        
        return !empty($the_result_array)? array_shift($the_result_array) :false;

    }




}










?>