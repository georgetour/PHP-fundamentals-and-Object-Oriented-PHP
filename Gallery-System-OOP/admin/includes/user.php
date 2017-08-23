<?php


class User extends Db_object{

    protected static $db_table = "users";
    protected static $db_table_fields = array('username','password','first_name','last_name' ,'user_image');
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
	public $user_image;
	public $upload_directory = "images";
	public $image_placeholder = "http://via.placeholder.com/65x65&text=65 x 65" ;
	
	
	
	//Save file info to database and the file
	public function upload_user_image(){
		
			if(!empty($this->errors)){
				return false;
			}
			
			if(empty($this->user_image)||empty($this->tmp_path)){
				$this->errors[] = "the file isn't available";
				return false;
				
			}
			
			$target_path = SITE_ROOT. DS. 'admin'. DS. $this->upload_directory .DS. $this->user_image ;
			
			if(file_exists($target_path)){
				$this->errors[] = "The file {$target_path} exists";
				return false;
			}
			
			//PHP function that will that takes user_image tmp path and the destination
			if(move_uploaded_file($this->tmp_path,$target_path)){
				
					unset($this->tmp_path);
					return true;

				
			}else{
				
				$this->errors[]=" Problem with the folder permissions ";
				return false;
			}
			
			
			$this->create();
			
		}


	
	
	//If image exists return image else placegholder
    public function image_path_and_placeholder(){
		
		return empty($this->user_image) ? $this->image_placeholder : $this->upload_directory .DS. $this->user_image;
		
	}




    public static function verify_user($username,$password){
        global $database;
        
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        $sql = "SELECT *  FROM " .self::$db_table;
        $sql .= " WHERE username = '{$username}' AND password = '{$password}' ";
        $sql .= "LIMIT 1";


        $the_result_array= self::find_by_query($sql);

        return !empty($the_result_array)? array_shift($the_result_array) :false;


    }
	
	




}//End of Class User



?>