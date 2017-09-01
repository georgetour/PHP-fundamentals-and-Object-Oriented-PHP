<?php 

//*********Commonly used methods***********
class Db_object{
	
	
	public $errors = array();
	//Check upload for errors
    public $upload_errors_array = array(
		
		UPLOAD_ERR_OK => "No error" , 
		UPLOAD_ERR_INI_SIZE => "Max size error" ,
		UPLOAD_ERR_FORM_SIZE => "Max file size directive error" ,
		UPLOAD_ERR_PARTIAL => "The upload file was partially downloaded" ,
		UPLOAD_ERR_NO_FILE => "No file uploaded" ,
		UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder" ,
		UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk" ,
		UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"

	);
	
	
	
	
	//This is passing $_FILES['uploaded_file'] as an argument
	public function set_file($file){
		
		if(empty($file)|| !$file|| !is_array($file)){
			
			$this->errors[] = "There was no file uploaded here";
			return false;
		
		}elseif($file['error'] != 0){
			$this->errors[] = $this->upload_errors_array[$file['error']];
			
			return false;
			
		}else{
		
			$this->filename = basename($file['name']);
			$this->tmp_path = $file['tmp_name'];
			$this->size = $file['size'];
			$this->type = $file['type'];


		
		}
		
		
	}
	

	  //Getting all records
    public static function find_all(){

        return static::find_by_query("SELECT * FROM " .static::$db_table. " ");

    }


    //Getting one result by id
    public static function find_by_id($id){
        global $database;
        $the_result_array= static::find_by_query("SELECT * FROM " .static::$db_table. " WHERE id='$id' LIMIT 1");
        
        return !empty($the_result_array)? array_shift($the_result_array) :false;

    }


    //Method that we use for queries and getting the result in array
    public static function find_by_query($sql){
        global $database;

        $result_set = $database->query($sql);
        $the_object_array = array();

        // while($row = mysqli_fetch_array($result_set)){
        //         $the_oject_array[] = static::instatiation($row);
        // }

        //Passing the result to the array
        foreach($result_set as $result){
            $the_object_array[] = static::instantiation($result);

        }
        return $the_object_array;


    }

    //Getting all properties  if they have values
    public static function instantiation($the_record){

        $calling_class = get_called_class();

        $the_object = new $calling_class;


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
    

    //Checking the object's properties/attributes
    private function has_the_attribute($attribute){

        //Gets the properties of the given object    
        $object_properties = get_object_vars($this);
        
        return array_key_exists($attribute,$object_properties);

    }

   

    //Getting all properties of current class according to $db_table_fields
    protected function properties(){

       // return get_object_vars($this);

        $properties =array();
        foreach (static::$db_table_fields as $db_field) {
            
              //Check if property exists in this class and assign it to array called properties
              if(property_exists($this, $db_field)){

                    $properties[$db_field] = $this->$db_field;

              }

        }

        return $properties;

    }



    //Escape string properties to array
    protected function clean_properties(){
        global $database;

        $clean_properties = array();

        foreach ($this->properties() as $key => $value) {
            
            $clean_properties[$key] = $database->escape_string($value);

        }

        return $clean_properties;

    }


     //If data exists update else create
    public function save(){

        return isset($this->id)? $this->update(): $this->create();   

    }





    //Create nerw data for database
    public function create(){
        global $database;

        $properties=$this->clean_properties();


    //More cleaner way than the update user
    //$username   = $database->escape_string($this->username);
    //$password   = $database->escape_string($this->password);
    //$first_name = $database->escape_string($this->first_name);
    //$last_name  = $database->escape_string($this->last_name);
 
    //Implode returns a string of an array with glue string between and array_keys returns the keys of the array
    $sql = "INSERT INTO " .static::$db_table ."(" . implode(",",array_keys($properties)) .")";
    $sql .= "VALUES('". implode("','",array_values($properties))."')";
        
        //This is from the Database class so we insert id
        if($database->query($sql)){
            $this-> id = $database ->insert_id();    
            return true;

        }else{

            return false;

        }
    
    }


    //Update data from database
    public function update(){
        global $database;

        $properties =$this->clean_properties();

        $properties_pairs = array();

        foreach ($properties as $key => $value) {

            $properties_pairs[] = "{$key}='{$value}' ";

        }


         $sql = "UPDATE " .static::$db_table ." SET ";
         $sql .= implode(", ", $properties_pairs);
         $sql .= " WHERE id = " . $database->escape_string($this->id) ;

         $database->query($sql);

         return (mysqli_affected_rows($database->connection) == 1) ? true : false;

    }


    //delete data from database
    public function delete(){

        global $database;

        
        $id = $database->escape_string($this->id);

        $sql = "DELETE FROM ".static::$db_table ." WHERE id = '$id' ";

        $database->query($sql);

        return (mysqli_affected_rows($database->connection) == 1) ? true : false;

    }
	
	
	//Count how many we have in database
	public static function count_all(){
		
		global $database;
		
		$sql = "SELECT COUNT(*) FROM " .static::$db_table;
		$result_set = $database->query($sql);
		$row = mysqli_fetch_array($result_set);
		
		return array_shift($row);
		
		
		
	}
	
	
	



    







}

?>