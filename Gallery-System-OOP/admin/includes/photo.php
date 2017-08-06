<?php



class Photo extends Db_object{

	//table and fields
	protected static $db_table = "photos";
    protected static $db_table_fields = array('photo_id','title','description','filename','type','size');
    public $photo_id;
    public $title;
    public $description;
    public $filename;
    public $type;
    public $size;

    public $tmp_path;
    public $upload_directory = "images";
    public $custom_errors = array();


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













}


?>