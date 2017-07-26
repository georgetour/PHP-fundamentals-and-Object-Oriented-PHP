<?php


class User{

    protected static $db_table = "users";
    protected static $db_table_fields = array('username','password','first_name','last_name');
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


    public static function verify_user($username,$password){
        global $database;
        
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        $sql = "SELECT *  FROM users ";
        $sql .= "WHERE username = '{$username}' AND password = '{$password}' ";
        $sql .= "LIMIT 1";


        $the_result_array= self::find_this_query($sql);

        return !empty($the_result_array)? array_shift($the_result_array) :false;


    }


    //Getting all properties  if they have values
    public static function instantiation($the_record){

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

        //Gets the properties of the given object    
        $object_properties = get_object_vars($this);
        
        return array_key_exists($attribute,$object_properties);

    }


    protected function properties(){

       // return get_object_vars($this);

        $properties =array();
        foreach (self::$db_table_fields as $db_field) {
            
              //Check if property exists in this class and assign it to array called properties
              if(property_exists($this, $db_field)){

                    $properties[$db_field] = $this->$db_field;

              }

        }

        return $properties;



    }

    //var_dump($this->properties);


    //If data exists update else create
    public function save(){

        return isset($this->id)? $this->update(): $this->create();   

    }




    //Create User
    public function create(){
        global $database;

        $properties=$this->properties();


    //More cleaner way than the update user
    //$username   = $database->escape_string($this->username);
    //$password   = $database->escape_string($this->password);
    //$first_name = $database->escape_string($this->first_name);
    //$last_name  = $database->escape_string($this->last_name);
 
    //Implode returns a string of an array with glue string between and array_keys returns the keys of the array
    $sql = "INSERT INTO " .self::$db_table ."(" . implode(",",array_keys($properties)) .")";
    $sql .= "VALUES('". implode("','",array_values($properties))."')";
        
        //This is from the Database class so we insert id
        if($database->query($sql)){
            $this-> id = $database ->insert_id();    
            return true;

        }else{

            return false;

        }
    
    }


    //Update user
    public function update(){
        global $database;

         $sql = "UPDATE " .self::$db_table ." SET ";
         $sql .= "username= '". $database->escape_string($this->username)."', ";
         $sql .= "password= '". $database->escape_string($this->password). "', ";
         $sql .= "first_name= '". $database->escape_string($this->first_name) . "', ";
         $sql .= "last_name= '". $database->escape_string($this->last_name). "' " ;
         $sql .= " WHERE id=" .$database->escape_string($this->id);

         $database->query($sql);

         return (mysqli_affected_rows($database->connection) == 1) ? true : false;

    }


    //delete user
    public function delete(){

        global $database;

        $id = $database->escape_string($this->id);

        $sql = "DELETE FROM ".self::$db_table ." WHERE id = '$id' ";

        $database->query($sql);

        return (mysqli_affected_rows($database->connection) == 1) ? true : false;

    }




}//End of Class User



?>