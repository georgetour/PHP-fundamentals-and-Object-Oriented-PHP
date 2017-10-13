<?php include("includes/init.php"); ?>
<?php if(!$session->is_signed_in()){redirect("login.php"); }  ?>

<?php 

//Return user back if id is empty 
if(empty($_GET['id'])){

    redirect("users.php");

}

$user = User::find_by_id($_GET['id']);

//If we find photo delete it 
if($user){

    //$user->delete();
    $user->delete_photo();
	redirect("users.php");
	$session->message("The user {$user->username} has been deleted");
						

}else{

    redirect("users.php");

}


?>