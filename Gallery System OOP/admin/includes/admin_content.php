<div class="container-fluid">


                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading2</small>
                        </h1>

                        


                        <?php 

                          // $users = User::find_all();
                          // foreach ($users as $user){

                          //   echo $user->username;

                          // }

                          
                          $user = new User();

                          $user->username= "bee";
                          $user->password="1234";
                          $user->first_name= "babis";
                          $user->last_name="flu";

                           $user->save();

                          //    $user = User::find_user_by_id(9);

                          //  $user->username = "patates";

                          //  $user->update();

                          // // $user->delete();
                          //  $a = 'hello';
                          //  $$a = 'world';

                          //  echo "$a $hello";



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

</div><!-- /.container-fluid -->