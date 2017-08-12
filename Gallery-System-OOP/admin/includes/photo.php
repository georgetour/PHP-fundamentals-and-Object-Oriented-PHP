<?php



class Photo extends Db_object{

	//table and fields
	protected static $db_table = "photos";
    protected static $db_table_fields = array('id','title','description','filename','type','size');
    public $id;
    public $title;
    public $description;
    public $filename;
    public $type;
    public $size;

    public $tmp_path;
    public $upload_directory = "images";
    public $errors = array();


    //Check upload for errors
    public $upload_errors = array(
		
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
			$this->type = $file['type'];
		
		}
		
		
		
	}
	
	//Save file info to database
	public function save(){
		
		if($this->id){
			$this->update();
		}
		
		else{
			
			if(!empty($this->errors)){
				return false;
			}
			
			if(empty($this->filename)||empty($this->tmp_path)){
				$this->errors[] = "the file isn't available";
				return false;
				
			}
			
			$target_path = SITE_ROOT . DS . $this->upload_directory . DS . $this->filename ;
			
			if(file_exists($target_path)){
				$this->errors[] = "The file{} exists";
				return false;
			}
			
			//PHP function that will that takes filename tmp path and the destination
			if(move_uploaded_file($this->tmp_path,$target_path)){
				
				if($this->create()){
					unset($this->tmp_path);
					return true;
				}

				
			}else{
				
				$this->errors[]=" Problem with the folder permissions ";
				return false;
			}
			
			
			$this->create();
			
		}
		
		
		
	}
	
	




}


?>