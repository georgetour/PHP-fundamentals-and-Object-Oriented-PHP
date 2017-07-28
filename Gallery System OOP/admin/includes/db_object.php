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

    
    //Method that we use for queries and getting the result in array
    private static function find_this_query($sql){
        global $database;

        $result_set = $database->query($sql);
        $the_object_array = array();

        // while($row = mysqli_fetch_array($result_set)){
        //         $the_oject_array[] = self::instatiation($row);
        // }

        //Passing the result to the array
        foreach($result_set as $result){
            $the_object_array[] = self::instantiation($result);

        }
        return $the_object_array;


    }




}










?>