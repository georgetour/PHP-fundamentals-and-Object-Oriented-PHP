<?php include("includes/header.php"); ?>


<?php if(!$session->is_signed_in()){redirect("login.php"); }  ?>



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
                           Upload
                            <small>Subheading</small>
                        </h1>
						
						<div class="col-md-3">
							<form action="" method="post" enctype="multipart/form-data">
							
								<div class="form-group">
									<label for="title"> Picture title : </label>
									<input id="title" type="text" name="title" class="form-control">
								</div>

								<div class="form-group">
									<label for="file_upload"> File_upload : </label>
									<input id="file_upload" type="file" name="file_upload" class="form-control">
								</div>
								
								<input type="submit" name="submit">
								
							
							</form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>