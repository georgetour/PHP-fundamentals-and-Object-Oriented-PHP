<?php include("includes/header.php"); ?>

<?php 


$page = !empty($_GET['page']) ? (int)$_GET['page'] :1;


//Limiting how many items we will show
$items_per_page = 4;


//Total items
$items_total_count = Photo::count_all();





$paginate = new Paginate($page, $items_per_page, $items_total_count);


//Bring all photos, limit them and then show according to offset
$sql = "SELECT * FROM photos ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= " OFFSET {$paginate->offset()} ";

$photos = Photo::find_by_query($sql);


?>


        <div class="row">

            <!--Show all photos-->
            <div class="col-md-12">
				<div class="thumbnails">
				
					<?php foreach($photos as $photo) :?>

						
							<div class="col-xs-6 col-md-3">
							
								<a class="thumbnail" href="photo.php?id=<?php echo $photo->id; ?>">
									<img class="home_photos"  src="admin/<?php echo $photo->picture_path();?>" alt="">
								</a>
							
							</div>
						
					
					
					<?php endforeach ;?>
                
				</div>
            </div>
        </div>  

            <div class="row">

            	<div class="col-md-3"></div>
            	<div class="col-md-6">
	            	<ul class="pager">

		            	<?php 
		            		if($paginate->page_total() > 1){

		            			if($paginate->has_next()){

		            				echo "<li class='next'><a href='index.php?page={$paginate->next()}'>Next</a></li>";

		            			}

			            	for($i=1; $i <= $paginate->page_total(); $i++){

			            		if($i == $paginate->current_page){
			            			echo "<li class='active'><a href='index.php?page={$i}'>{$i}</a></li>";
			            		}else{

			            			echo "<li><a href='index.php?page={$i}'>{$i}</a></li>";
			            		}

			            	}


		            			if($paginate->has_previous()){

		            				echo "<li class='previous'><a href='index.php?page={$paginate->previous()}'>Previous</a></li>";

		            			}

		            		}

		            	?>

	            	</ul>
            	</div><!--End middle column-->
            	<div class="col-md-3"></div>
            </div>
        
        


            <!-- Blog Sidebar Widgets Column 
            <div class="col-md-4">

                 <?php // include("includes/sidebar.php"); ?>

            </div>
         /.row -->

        <?php include("includes/footer.php"); ?>
