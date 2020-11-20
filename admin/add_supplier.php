<?php
 include 'include/header.php';
?>
 <script src="functions/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="functions/js/dropzone.css">
<script type="text/javascript" src="functions/js/dropzone.js"></script>
<body class="fix-header fix-sidebar card-no-border" onload="load_chk_btns()">
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
             $title_page="Add Supplier";
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
                                <h4 class="m-b-0 text-white">Supplier Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Supplier ID</label>
                                                    <input type="text" id="sup_Id" class="form-control" value="001" readonly="">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Supplier Name</label>
                                                    <input type="text" id="sup_name" class="form-control "  required="">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Contact Number</label>
                                                    <input type="tel" id="sup_contact" class="form-control "  required="">
                                                </div>
                                            </div>
                                            <!--/span-->
                                         <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="control-label">Email</label>
                                                          <input type="text" id="sup_email" name="quantity" min="1" max="300" class="form-control">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                            <!--/span-->
                                        </div>

                                         <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group required ">
                                                    <label>Street</label>
                                                    <input id="sup_street" name="street" type="text" class="form-control">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label>Baranggay</label>
                                                    <input id="sup_brgy" name="brgy" type="text"  class="form-control">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group required ">
                                                    <label>City</label>
                                                    <input id="sup_city" name="city" type="text" class="form-control">
                                                    <small class="form-control-feedback rr hidden_r"> required. </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        
                                        <!--/row-->
                                        <h4 class="box-title m-t-40" style="margin-top: -10px;">Item Selling by Category</h4>
                                        <div class="row" style="margin-left: .2rem; margin-top: 15px;">
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px;">
                                            <input id="checkbox-flowers" type="checkbox" class="chk">
                                            <label for="checkbox-flowers"> Flowers </label>
                                            </div>
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px;">
                                                <input id="checkbox-Cactus" type="checkbox" class="chk">
                                                <label for="checkbox-Cactus"> Cactus</label>
                                            </div>
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px;">
                                                <input id="checkbox-Soil" type="checkbox" class="chk">
                                                <label for="checkbox-Soil"> Soil </label>
                                            </div>
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px;">
                                                <input id="checkbox-Pot" type="checkbox" class="chk">
                                                <label for="checkbox-Pot"> Pot </label>
                                            </div>
                                            <input type="hidden" id="sup_selling" name="">
                                        </div>
                                        
                                    </div>

                                    <div class="form-actions text-right " style="margin-top: 10px">
                                        <button type="button" id="sa-warning"class="btn btn-inverse">Cancel</button>
                                        <button type="button" id="sar-success" class="btn btn-success" > <i class="fa fa-check" ></i> Submit</button>
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
            
            <script src="functions/js/supplier.js"></script>
        <?php
            include 'include/footer.php';
        ?>

