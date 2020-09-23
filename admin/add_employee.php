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
             $title_page="Add Employee";
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
          <script src="functions/js/jquery.js"></script>
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
                                <h4 class="m-b-0 text-white">Employee Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" method="post">
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
                                                <div class="form-group required ">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name">
                                                       <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name">
                                                       <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label class="control-label">Gender</label>
                                                    <select id="gender" name="gender" class="form-control custom-select selector_image">
                                                        <option class="male" value="assets/images/users/male.png">Male</option>
                                                        <option class="female" value="assets/images/users/female.png">Female</option>
                                                    </select>
                                                    <small class="form-control-feedback"> Select your gender </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label class="control-label">Position</label>
                                                    <select id="position" name="position" class="form-control custom-select selector_image">
                                                        <option value="Marketing"> Marketing Staff</option>
                                                        <option value="Marketing"> Tagasigaw</option>
                                                        <option value="Marketing"> Tagagulo </option>
                                                    </select>
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input id="date_ofb" name="date_ofb" type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Gcash</label>
                                                    <input type="text" id="gcash" name="gcash" class="form-control " placeholder="1233465849843" >
                                                </div>
                                            <!--/span-->
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email ">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label class="control-label">UserName</label>
                                                    <input type="text" id="username" name="username" class="form-control form-control-danger" placeholder="User Name">
                                                    <small class="form-control-feedback"> Make it Unique. </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label class="control-label">Password</label>
                                                    <input type="text" id="password" name="password" class="form-control" placeholder="Password">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label class="control-label">Confirm Password</label>
                                                    <input type="text" id="conpassword" name="conpassword" class="form-control form-control-danger" placeholder="Confirm Password">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <!--span-->
                                            
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group required ">
                                                    <label>Street</label>
                                                    <input id="street" name="street" type="text" class="form-control">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label>Baranggay</label>
                                                    <input id="brgy" name="brgy" type="text"  class="form-control">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label>City</label>
                                                    <input id="city" name="city" type="text" class="form-control">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                       
                                    </div>

                                    <div class="form-actions text-right">
                                        <button type="button" id="sa-warning"class="btn btn-inverse">Cancel</button>
                                        <button type="button" id="sas-success" class="btn btn-success" > <i class="fa fa-check" ></i> Submit</button>
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

       
          <script src="functions/js/user.js"></script>
           
            
        <?php
        
            include 'include/footer.php';
        ?>