<?php
 include 'include/header.php';
?>


<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
         <?php
          include 'include/topbar.php';
         ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
         <?php
             $title_page="User Account";
             include 'include/sidebar.php';
         ?>
        
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
                
        <?php
            include 'include/titlepage.php';
        ?>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
             
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">User Account Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class= "col-md-12">
                                                <div class="user-profiler">
                                                    <div class="profile-img"    > <img class="change_img" src="assets/images/users/male.png" alt="user">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" id="lastName" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control custom-select selector_image">
                                                        <option class="male" value="assets/images/users/male.png">Male</option>
                                                        <option class="female" value="assets/images/users/female.png">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" id="firstName" class="form-control" placeholder="Email ">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">UserName</label>
                                                    <input type="text" id="lastName" class="form-control" placeholder="User Name">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40" id="pass_tog"><a href="#">Change Password?</a></h3>
                                        <hr>
                                        <div class="row p-t-20 ">
                                            <div class="col-md-4 pass_toge">
                                                <div class="form-group">
                                                    <label class="control-label">Old Password</label>
                                                    <input type="text" id="password" class="form-control" placeholder="Old Password">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4 pass_toge">
                                                <div class="form-group ">
                                                    <label class="control-label">New Password</label>
                                                    <input type="text" id="conpassword" class="form-control form-control-danger" placeholder="New Password">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4 pass_toge">
                                                <div class="form-group ">
                                                    <label class="control-label">Confirm Password</label>
                                                    <input type="text" id="conpassword" class="form-control form-control-danger" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <!--/row-->
                                       
                                    </div>

                                    <div class="form-actions text-right">
                                        <button type="button" id="sa-warning"class="btn btn-inverse">Cancel</button>
                                        <button type="button" id="sa-success" class="btn btn-success" > <i class="fa fa-check" ></i> Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
        <?php
            include 'include/footer.php';
        ?>