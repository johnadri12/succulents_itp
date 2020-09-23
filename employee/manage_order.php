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
             $title_page="Manage Orders";
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
                
                <!-- Search Filter Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                         <h4 class="m-b-0 text-white">Filter Search</h4>
                                    </div>
                                    <div class="col-md-6 text-right">
                                          <button class="btn btn-danger waves-effect waves-light" type="button"><span class="btn-label"><i class="mdi mdi-apps"></i></span>Filter</button>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="card-body">
                               <div class="row">
                                    <div class="col-md-4"></div>
                                  <!-- Filter -->
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                        <select class="form-control custom-select ">
                                            <option class="all" >All</option>
                                            <option class="active" >Active</option>
                                            <option class="inactive" >Inactive</option>
                                        </select>
                                        <small class="form-control-feedback"> Please Select Filter </small> </div>
                                        </div>
                                  <!-- Filter -->
                                    <div class="col-md-4"></div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Filter Row -->
                <!-- ============================================================== -->
                <!-- Employee List -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6 ">
                                         <h4 class="m-b-0 text-white">Order List</h4>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text" id="btnGroupAddon2"><i class="ti-search"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Search " aria-label="Input group example" aria-describedby="btnGroupAddon2">
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                               <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped borderas">
                                        <thead>
                                            <tr>
                                                <th>Item Id</th>
                                                <th>Item Name</th>
                                                <th>Type </th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    001
                                                </td>
                                                <td>
                                                   Korean Succulents
                                                </td>
                                                <td>
                                                   Succulents Flower
                                                </td>
                                                <td>100</td>
                                                <td>20.00</td>
                                                <td>2,000.00</td>
                                                <td><button type="button" class="btn btn-maliit waves-effect waves-light btn-warning">Pending</button></td>
                                                <td  class="text-nowrap">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_ordr"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" id="sa-warning"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    002
                                                </td>
                                                <td>
                                                   King Pot
                                                </td>
                                                <td>
                                                    Pot
                                                </td>
                                                <td>40</td>
                                                <td>20.00</td>
                                                <td>800.00</td>
                                                <td><button type="button" class="btn btn-maliit waves-effect waves-light btn-info">Processing</button></td>
                                                <td  class="text-nowrap">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-eye text-inverse m-r-10"data-toggle="modal" data-target="#view_ordr"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" id="sa-warning"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    003
                                                </td>
                                                <td>
                                                    Masitera White
                                                </td>
                                                <td>
                                                   Soil
                                                </td>
                                                <td>10</td>
                                                <td>20.00</td>
                                                <td>800.00</td>
                                                <td><button type="button" class="btn btn-maliit waves-effect waves-light btn-success">Successful</button></td>
                                                <td  class="text-nowrap">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-eye text-inverse m-r-10"data-toggle="modal" data-target="#view_ordr"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" id="sa-warning"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- All Modal -->
                <!-- ============================================================== -->
                <!-- Edit Item Modal -->
                <!-- ============================================================== -->
                    <div id="edit_ordr" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Edit Order </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-4">
                                            
                                        </div>
                                        <div class= "col-md-4">
                                            <div class="item-profiler">
                                                <div class="profile-img" style="margin-bottom: 5px;"> <img class="change_img" src="assets/images/products/korean.jpg" alt="user">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                    <table class="table table-striped">
                                        <thead>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Order ID</td>
                                                <td>
                                                   001
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Item Name</td>
                                                <td>
                                                   Korean Succulents    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Type</td>
                                                <td>
                                                   Marketing Staff
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Quantity
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price </td>
                                                <td>
                                                  20.00
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Total </td>
                                                <td>
                                                   2,000.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status </td>
                                                <td>
                                                  <select class="form-control custom-select ">
                                                    <option class="active" >Succulent Flower</option>
                                                    <option class="inactive" >Succulent Cactus</option>
                                                    <option class="inactive" >Soil</option>
                                                    <option class="inactive" >Pots</option>
                                                </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" id="sa-success" class="btn btn-success" > <i class="fa fa-check" ></i> Submit</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <!-- ============================================================== -->
                
                <!-- View Emplyee Modal -->
                    <div id="view_ordr" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Employee Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class= "col-md-12">
                                             <div class="item-profiler">
                                                <div class="profile-img" style="margin-bottom: 5px;"> <img class="change_img" src="assets/images/products/korean.jpg" alt="user">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <table class="table table-striped">
                                        <thead>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Order ID</td>
                                                <td>
                                                   001
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Item Name</td>
                                                <td>
                                                   Korean Succulents    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Type</td>
                                                <td>
                                                   Marketing Staff
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Quantity
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price </td>
                                                <td>
                                                  20.00
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Total </td>
                                                <td>
                                                   2,000.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status </td>
                                                <td>
                                                  <button type="button" class="btn btn-maliit waves-effect waves-light btn-info">Processing</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                

                <!-- ============================================================== -->
                <!-- /.End modal -->
                <!-- ============================================================== -->
                <!-- End Employee List -->
                <!-- ============================================================== -->
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