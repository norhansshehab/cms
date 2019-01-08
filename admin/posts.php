<?php
include 'admin-inc/admin_header.php';
?>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">


        <?php
          include 'admin-inc/admin_topNav.php';
          ?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <?php
            include 'admin-inc/admin_sideNav.php';
            ?>

                <!-- /.navbar-collapse -->

    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome To Paradise
                        <small>Shehab</small>
                    </h1>
                </div>



                    <?php
                if(isset($_GET['source'])) {
                  $source = $_GET['source'];
                } else {
                  $source = "";
                }
                switch ($source) {
                  case 'add_post':
                    include 'admin-inc/posts/add_post.php';
                    break;

                case 'edit_post':
                    include 'admin-inc/posts/edit_post.php';
                    break;
                        
                  default:
                  include 'admin-inc/posts/view_all_posts.php';
                    break;
                }
                ?>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


    <?php
include 'admin-inc/admin_footer.php';
?>
