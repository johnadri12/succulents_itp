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
             $title_page="Sales";
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
                                            <option class="active" >Pending</option>
                                            <option class="inactive" >Successful</option>
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
                <!-- Order List -->
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
                                                <th>Customer Id</th>
                                                <th>Customer Name</th>
                                                <th>Contact No. </th>
                                                <th>Order QTY </th>
                                                <th>Transaction Date</th>
                                                <th>Employee </th>
                                                <th>Revenue </th>
                                                <th class="text-nowrap text-center">Status</th>
                                                <th class="text-nowrap text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- ============================================================== -->
                                            <!-- Pending -->
                                            <!-- ============================================================== -->
                                            <tr>
                                                <td>01</td>
                                                <td>
                                                   Jean Grey
                                                </td>
                                                <td>
                                                   0922-555-5555
                                                </td>
                                                <td>60</td>
                                                <td>06-28-20</td>  
                                                <td>Justine Capili</td>
                                                <td> 3,000.00</td>
                                                <td  class="text-nowrap text-center"><button type="button" class="btn btn-maliit waves-effect waves-light btn-warning">Pending</button></td>
                                                <td  class="text-nowrap text-center">
                                                     <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_ordr"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="View" > <i class="fa fa-eye text-inverse m-r-10"  data-toggle="modal" data-target="#view_ordr"></i> </a>
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
                 <!-- Edit Status Modal -->
                    <div id="edit_ordr" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Customer Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-lola">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <b>Customer ID</b>
                                                    </div>
                                                    <div class="col-6">
                                                        01
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Customer Name</b>
                                                    </div>
                                                    <div class="col-6">
                                                        Jear Grey
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="container-lolo">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b> Contact Number </b>
                                                    </div>
                                                    <div class="col-6">
                                                        0922-555-5555
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Order QTY</b>
                                                    </div>
                                                    <div class="col-6">
                                                        50 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-lola">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Order Date</b>
                                                    </div>
                                                    <div class="col-6">
                                                        06-28-20
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Employee Name </b>
                                                    </div>
                                                    <div class="col-6">
                                                       Justine Ann Capili
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="container-lolo">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Employee Revenue</b>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="text-red">300.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Total Revenue </b>
                                                    </div>
                                                    <div class="col-6">
                                                       <h5 class="text-green"> 2,700.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="container-lola">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-3">
                                                       <b> Customer Address  </b>
                                                    </div>
                                                    <div class="col-9">
                                                        36G Paz St Malabon City, Metro Manila Philippines
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-lolo">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6" style="padding-top: 7px;">
                                                       <b>Gcash Transcac No.</b>
                                                    </div>
                                                    <div class="col-6">
                                                            <input type="text" id="firstName" class="form-control" placeholder="6655811581245">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-3" style="padding-top: 7px;">
                                                       <b>Status  </b>
                                                    </div>
                                                    <div class="col-9" >
                                                        <select class="form-control custom-select ">
                                                        <option class="active" >Pending</option>
                                                        <option class="inactive" >Successful</option>
                                                         <option class="cancel" >Cancel</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <br>
                                    <div class="row">

                                        <div class="col-md-6 ">
                                            <h5 class="m-b-0">Ordered List</h5>
                                        </div>
                                    </div>
                                    <div class="tablea">
                                        <table class="table table-striped borderas " >
                                        <thead>
                                            <tr>
                                                <th>Item Id</th>
                                                <th>Item Name</th>
                                                <th>Type  </th>
                                                <th> QTY </th>
                                                <th>Price</th>
                                                <th>Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <!-- ============================================================== -->
                                            <!-- Pending -->
                                            <!-- ============================================================== -->
                                            <tr>
                                                <td>001</td>
                                                <td>
                                                   Korean Succulents
                                                </td>
                                                <td>
                                                   Succulents
                                                </td>
                                                <td>20</td>
                                                <td>50.00</td>
                                                <td>1,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>001</td>
                                                <td>
                                                   Korean Succulents
                                                </td>
                                                <td>
                                                   Succulents
                                                </td>
                                                <td>20</td>
                                                <td>50.00</td>
                                                <td>1,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>001</td>
                                                <td>
                                                   Korean Succulents
                                                </td>
                                                <td>
                                                   Succulents
                                                </td>
                                                <td>20</td>
                                                <td>50.00</td>
                                                <td>1,000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                     <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary waves-effect " id="btn_submit_ordr">Submit</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <!-- View Order Modal -->
                    <div id="view_ordr" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Customer Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-lola">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <b>Customer ID</b>
                                                    </div>
                                                    <div class="col-6">
                                                        01
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Customer Name</b>
                                                    </div>
                                                    <div class="col-6">
                                                        Jear Grey
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="container-lolo">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b> Contact Number </b>
                                                    </div>
                                                    <div class="col-6">
                                                        0922-555-5555
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Order QTY</b>
                                                    </div>
                                                    <div class="col-6">
                                                        50 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-lola">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Order Date</b>
                                                    </div>
                                                    <div class="col-6">
                                                        06-28-20
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Employee Name </b>
                                                    </div>
                                                    <div class="col-6">
                                                       Justine Ann Capili
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="container-lolo">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Employee Revenue</b>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="text-red">300.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Total Revenue </b>
                                                    </div>
                                                    <div class="col-6">
                                                       <h5 class="text-green"> 2,700.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="container-lola">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-3">
                                                       <b> Customer Address  </b>
                                                    </div>
                                                    <div class="col-9">
                                                        36G Paz St Malabon City, Metro Manila Philippines
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-lolo">
                                        <!-- ============================================================== -->
                                        <!-- ROW -->
                                        <!-- ============================================================== -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6" style="padding-top: 7px;">
                                                       <b>Gcash Transcac No.</b>
                                                    </div>
                                                    <div class="col-6">
                                                            <input type="text" id="firstName" class="form-control" value="6655811581245" readonly="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-3" style="padding-top: 7px;">
                                                       <b>Status  </b>
                                                    </div>
                                                    <div class="col-9" >
                                                       <button type="button" class="btn btn-maliit waves-effect waves-light btn-success">Success</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <br>
                                    <div class="row">

                                        <div class="col-md-6 ">
                                            <h5 class="m-b-0">Ordered List</h5>
                                        </div>
                                    </div>
                                    <div class="tablea">
                                        <table class="table table-striped borderas " >
                                        <thead>
                                            <tr>
                                                <th>Item Id</th>
                                                <th>Item Name</th>
                                                <th>Type  </th>
                                                <th> QTY </th>
                                                <th>Price</th>
                                                <th>Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <!-- ============================================================== -->
                                            <!-- Pending -->
                                            <!-- ============================================================== -->
                                            <tr>
                                                <td>001</td>
                                                <td>
                                                   Korean Succulents
                                                </td>
                                                <td>
                                                   Succulents
                                                </td>
                                                <td>20</td>
                                                <td>50.00</td>
                                                <td>1,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>001</td>
                                                <td>
                                                   Korean Succulents
                                                </td>
                                                <td>
                                                   Succulents
                                                </td>
                                                <td>20</td>
                                                <td>50.00</td>
                                                <td>1,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>001</td>
                                                <td>
                                                   Korean Succulents
                                                </td>
                                                <td>
                                                   Succulents
                                                </td>
                                                <td>20</td>
                                                <td>50.00</td>
                                                <td>1,000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                     <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary waves-effect " id="btn_submit_ordr">Submit</button>
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