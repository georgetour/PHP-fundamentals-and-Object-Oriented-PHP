<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()){redirect("login.php"); }  ?>



<?php    

		//Error message
		$message = "";


		$user = new User();
		
		//Create user in database and add the image 
		if(isset($_POST['create_user'])){
			
			if($user){
				
					$user -> username = $_POST['username'];
					$user -> first_name = $_POST['first_name'];
					$user -> last_name = $_POST['last_name'];
					$user -> password = $_POST['password'];
					
					$user->set_file($_FILES['user_image']);

					
					if(empty($_FILES['user_image'])){
							
							$user->save();
							$message = "User created successfully";
					}
					else{
							
							
							$user->save();
							$user->upload_user_image();
							$message = "User created successfully";
					}
		
			}else{
					$message = join('<br>',$user->errors);
			}
				
		}
		
		

							
							
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
                           Users
                            <small>Add User</small>
                        </h1>
                        
                    </div>
					<div class="col-md-4">
						<form action="" method="post" enctype="multipart/form-data">
						
						
								
								<div class="form-group">
								
									<label for="user_image">Photo Upload</label>
									<input id="user_image" name="user_image" type="file" class="form-control" >
								
								</div>
							
								<div class="form-group">
								
									<label for="username">Username</label>
									<input id="username" name="username" type="text" class="form-control" >
								
								</div>
								
								
								
								<div class="form-group">
								
									<label for="first_name">First Name</label>
									<input id="first_name" name="first_name" type="text" class="form-control" >
								
								</div>
								
								<div class="form-group">
								
									<label for="last_name">Last Name</label>
									<input id="last_name" name="last_name" type="text" class="form-control" >
								
								</div>
								
								<div class="form-group">
								
									<label for="password">Password</label>
									<input id="password" name="password" type="password" class="form-control" >
								
								</div>
								
								<div class="form-group">
									<input type="submit" name="create_user" value="Add User" class="btn btn-primary btn-lg pull-right">
								</div>
							</form><!--End form-->
							<div><?php echo $message;?></div>
						</div>
						
						
					
					
					
					
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>