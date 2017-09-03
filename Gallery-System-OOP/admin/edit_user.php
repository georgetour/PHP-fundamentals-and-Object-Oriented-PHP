<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()){redirect("login.php"); }  ?>



<?php    

		//Error message
		$message = "";
		
		if(empty($_GET['id'])){
		
			//Protect if we don't have id
			redirect("users.php");
	
		}
			
		//Getting user by id
		$user_id = $_GET['id'];
		$user = User::find_by_id($user_id);
		
		//Update user in database and the image 
		if(isset($_POST['update_user'])){
			
				if($user){
					$user -> username = $_POST['username'];
					$user -> first_name = $_POST['first_name'];
					$user -> last_name = $_POST['last_name'];
					$user -> password = $_POST['password'];
				
					if(empty($_FILES['user_image'])){
						
						$user->save();
						$session->message("The user has been updated");
						redirect("users.php");
						
					
					}else{
						
						//$user->set_file($_FILES['user_image']);
						$user->save();
						$user->upload_user_image();
						$message = "User updated successfully";
						$session->message("The user has been updated");
						redirect("users.php");
						
					}
		
		
				}else{
					
					$message = join('<br>',$user->errors);
				}
				
		}
		


							
							
?>

<?php 

//Photo modal 
include("includes/photo_modal.php"); 

?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!--Top navabar-->
            <?php include("includes/top_nav.php"); ?>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/sidebar.php"); ?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Edit User
                            <small><?php echo $user->username?></small>
                        </h1>
                        
                    </div>
					
						<form action="" method="post" enctype="multipart/form-data">
							<div class="col-md-6">
								<div class="form-group user_image_box">
									<a data-toggle="modal" data-target="#photo-modal" href="#">
										<img class="img-responsive" src="<?php echo $user->image_path_and_placeholder();?>" >
									</a>
								</div>
							</div>	
									
							<div class="col-md-6">
								<div class="form-group ">
								
									<label for="user_image">Photo Upload</label>
									<input id="user_image" name="user_image" type="file" class="form-control" >
								
								</div>
							
								<div class="form-group">
								
									<label for="username">Username</label>
									<input id="username" name="username" type="text" class="form-control" value="<?php echo $user->username; ?>">
								
								</div>
								
								<div class="form-group">
								
									<label for="first_name">First Name</label>
									<input id="first_name" name="first_name" type="text" class="form-control" value="<?php echo $user->first_name; ?>">
								
								</div>
								
								<div class="form-group">
								
									<label for="last_name">Last Name</label>
									<input id="last_name" name="last_name" type="text" class="form-control" value="<?php echo $user->last_name; ?>" >
								
								</div>
								
								<div class="form-group">
								
									<label for="password">Password</label>
									<input id="password" name="password" type="password" class="form-control" value="<?php echo $user->password; ?>">
								
								</div>
								
								<?php if($message){ ?>
									<div class="alert alert-success">
										<?php echo $message;?>
									</div>
							
								<?php } ?>
								
								<div class="info-box-delete pull-left">
										<a  id="user-id" href="delete_user.php?id=<?php echo $user->id; ?>" class="btn btn-danger btn-lg ">Delete</a>   
								</div>
								
								<div class="form-group">
									<input type="submit" name="update_user" value="Update" class="btn btn-primary btn-lg pull-right">
								</div>
							</div>
						</form><!--End form-->
							
							
						
						
						
					
					
					
					
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>