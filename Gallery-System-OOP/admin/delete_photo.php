<?php include("includes/init.php"); ?>
<?php if(!$session->is_signed_in()){redirect("login.php"); }  ?>

<?php 

//Return user back if id is empty 
if(empty($_GET['id'])){

    redirect("photos.php");

}

$photo = Photo::find_by_id($_GET['id']);

//If we find photo delete it 
if($photo){

    $photo->delete_photo();
	redirect("photos.php");

}else{

    redirect("photos.php");

}


?>