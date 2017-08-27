<?php include("includes/header.php"); ?>

<?php 

require_once("admin/includes/init.php");

//Getting photo by id according to url
$photo = Photo::find_by_id($_GET['id']);

if(empty($_GET['id'])){
	
	redirect("index.php");
	
}


if(isset($_POST['submit'])){
	
	$author = trim($_POST['author']);
	$body = trim($_POST['body']);
	$photo_id = $photo->id;
	
	$new_comment = Comment::create_comment($photo_id,$author,$body);
	
	if($new_comment && $new_comment->save()){
		
		
		redirect("photo.php?id={$photo->id}");
		
	}else{
		
		$message = "There was a problem saving";
		

	}
	
	
}else{
		
		$author = "";
		$body = "";
		
		
}

	//Bring the comments from database
	$comments = Comment::find_the_comments($photo->id);
	
?>




    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="row">
				<div class="col-lg-12">

					<!-- Blog Post -->

					<!-- Title -->
					<h1><?php echo $photo->title; ?></h1>

					<!-- Author -->
					<p class="lead">
						by <a href="#">Start Bootstrap</a>
					</p>

					<hr>

					<!-- Date/Time -->
					<p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

					<hr>

					<!-- Preview Image -->
					<img class="img-responsive" src="admin/<?php echo $photo->picture_path() ;?>" alt="">

					<hr>

					<!-- Post Content -->
					<p class="lead"> <?php echo $photo->caption ?></p>
					<p><?php echo $photo->description;?></p>

					<hr>

					<!-- Blog Comments -->

					<!-- Comments Form -->
					<div class="well">
						<h4>Leave a Comment:</h4>
						<form role="form" method="post">
							<div class="form-group">
								<label for="author" >Author</label>
								<input id="author "type="text" name="author" class="form-control">
							   
							</div>
							<div class="form-group">
								<textarea name="body" class="form-control" rows="3"></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>

					<hr>

					<!-- Posted Comments -->

					<!-- Comment -->
					
					<?php foreach($comments as $comment) {  ?>
					
					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/64x64" alt="">
						</a>
						<div class="media-body">
							
						
							<h4 class="media-heading"><?php echo $comment->author; ?>
								<small>August 25, 2014 at 9:30 PM</small>
							</h4>
							<?php echo $comment->body; ?>
						</div>
					</div>
					
					<?php }  ?>

               
				</div>
            </div>

            <!-- Blog Sidebar Widgets Column-->
			<!--<div class="col-md-4">-->
			
			  <?php //include("includes/sidebar.php"); ?>

            <!--</div> -->
        <!-- /.row -->

        <?php include("includes/footer.php"); ?>


                
