<?php include("includes/init.php"); ?>
<?php if(!$session->is_signed_in()){redirect("login.php"); }  ?>

<?php 

//Return back if id is empty 
if(empty($_GET['id'])){

    redirect("comments.php");

}

$comment = Comment::find_by_id($_GET['id']);

//If we find comment delete it 
if($comment){

    $comment->delete();
    $session->message("The comment with id {$comment->id} has been deleted");
	redirect("comments.php");

}else{

    redirect("comments.php");

}


?>