<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()){redirect("login.php"); }  ?>

        
            <!--Top navabar-->
            <?php include("includes/top_nav.php"); ?>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/sidebar.php"); ?>
        </nav>

        <div id="page-wrapper">

            <?php include("includes/admin_content.php"); ?>
            
          

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>