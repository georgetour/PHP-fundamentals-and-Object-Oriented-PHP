<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>

                        <?php

                        $bobiras ="'s Hertogenbosch3";

                        $bobiras = $database->escape_string($bobiras);

                        $query = "UPDATE users ";
                        $query .= "SET username = '{$bobiras}' ";
                        $query .= "WHERE id = 1 ";
                        $result= $database->query($query);




                        if($result){
                            echo "succeded";
                        }else{
                            die("Database error").mysqli_error($test);
                        }






                        ?>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->