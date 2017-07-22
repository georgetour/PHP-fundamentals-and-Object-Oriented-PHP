<?php 

if(isset($_POST['submit'])){

	$upload_errors = array(
		
		UPLOAD_ERR_OK => "No error" , 
		UPLOAD_ERR_INI_SIZE => "Max size error" ,
		UPLOAD_ERR_FORM_SIZE => "Max file size directive error" ,
		UPLOAD_ERR_PARTIAL => "The upload file was partially downloaded" ,
		UPLOAD_ERR_NO_FILE => "No file uploaded" ,
		UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder" ,
		UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk" ,
		UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"

	);

	$temp_name = $_FILES['file_upload']['tmp_name'];
	$file_name = $_FILES['file_upload']['name'];
	$directory = "uploads";

	if(move_uploaded_file($temp_name, $directory ."/" . $file_name)){

			$the_message ="File uploaded";
	}else{

		$the_error = $_FILES['file_upload']['error'];

		$the_message = $upload_errors[$the_error];
	}
	



	

	print_r($_FILES['file_upload']);
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<form action="" enctype="multipart/form-data" method="post">
	<div>
		<?php 
		
		if(!empty($upload_errors)){
			echo $the_message; 
		}
		
		?>
	</div>  
    
    <input type="file" name="file_upload"><br>

	<input type="submit" name="submit">

</form>

</body>
</html>