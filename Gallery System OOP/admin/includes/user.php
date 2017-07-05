<?php


class User{

    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    //Getting all users
    public static function find_all_users(){

        return self::find_this_query("SELECT * FROM users");

    }


    //Getting result one user by id
    public static function find_user_by_id($id){

        $the_result_array= self::find_this_query("SELECT * FROM users WHERE id='$id' LIMIT 1");
        //$found_user = mysqli_fetch_array($user_by_id);
        
        /*if(!empty($the_result_array)){
            $first_item = array_shift($the_result_array);

            return $first_item;
        }else{
            return false;
        }*/

        return !empty($the_result_array)? array_shift($the_result_array) :false;


        




    }

    //Method that we use for queries and getting the result in array
    private function find_this_query($sql){
        global $database;

        $result_set = $database->query($sql);
        $the_object_array = array();

        // while($row = mysqli_fetch_array($result_set)){
        //         $the_oject_array[] = self::instatiation($row);
        // }

        //Passing the result to the array
        foreach($result_set as $result){
            $the_object_array[] = self::instatiation($result);

        }
        return $the_object_array;


    }


    //Getting all properties  if they have values
    public static function instatiation($the_record){

        $the_object = new User();


        //User Properties   
        /*$the_oject ->id = $found_user['id'];  
        $the_oject ->username = $found_user['username'];
        $the_oject ->password = $found_user['password'];
        $the_oject ->first_name = $found_user['first_name'];
        $the_oject ->last_name = $found_user['last_name'];
        */

        foreach ($the_record as $attribute => $value) {
            
            if($the_object->has_the_attribute($attribute)){

                $the_object->$attribute = $value;

            }    

        }


        return $the_object;

    }


    //Checking the objects properties/attributes
    private function has_the_attribute($attribute){

        $object_properties = get_object_vars($this);
        
        return array_key_exists($attribute,$object_properties);

    }






}



?>