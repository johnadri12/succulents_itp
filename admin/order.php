<?php
 include 'include/header.php';
?>


<body class="fix-header fix-sidebar card-no-border" onload="load_order_list()">
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
             $title_page="Orders";
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
                                        <select id="status_selecto" class="form-control custom-select ">
                                           <option class="all" >All</option>
                                            <option class="active" >Ongoing</option>
                                            <option class="active" >Pending</option>
                                            <option class="inactive" >Successful</option>
                                           <!--   <option class="cancel" >Cancel</option>-->
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
                                                    <input  id="search_texto" type="text" class="form-control" placeholder="Search " aria-label="Input group example" aria-describedby="btnGroupAddon2">
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
                                                <th>Transaction Code</th>
                                                <th>Customer Name</th>
                                                <th>Contact</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Order date</th>
                                                <th>Delivery date</th>
                                                <th>Status</th>
                                                <th class="text-nowrap text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="manage_order_table">
                                           
                                           
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
                                                        06-25-20
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Delivery Date </b>
                                                    </div>
                                                    <div class="col-6">
                                                        06-28-20
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
                                                       <b>Employee Name</b>
                                                    </div>
                                                    <div class="col-6">
                                                        Justine Ann Capili
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Total  </b>
                                                    </div>
                                                    <div class="col-6">
                                                        3,000.00
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
                                                       <b> Address  </b>
                                                    </div>
                                                    <div class="col-9">
                                                        36G Paz St Malabon City, Metro Manila Philippines
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
                                                       <b> Status  </b>
                                                    </div>
                                                    <div class="col-9">
                                                        
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
                                    <button type="button" class="btn btn-primary waves-effect " id="btn_submit_ordr">Save</button>
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
                                                        06-25-20
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Delivery Date </b>
                                                    </div>
                                                    <div class="col-6">
                                                        06-28-20
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
                                                       <b>Employee Name</b>
                                                    </div>
                                                    <div class="col-6">
                                                        Justine Ann Capili
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                       <b>Total  </b>
                                                    </div>
                                                    <div class="col-6">
                                                        3,000.00
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
                                                       <b> Address  <span> <a class="btn default btn-outline image-popup-vertical-fit  " alt="View Map" href="assets/images/map.jpg"><i class="icon-map" ></i></a></span></b>
                                                    </div>
                                                    <div class="col-9">
                                                        36G Paz St Malabon City, Metro Manila Philippines
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
                                                       <b> Status  </b>
                                                    </div>
                                                    <div class="col-9">
                                                         <button type="button" class="btn btn-maliit waves-effect waves-light btn-warning">Pending</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-6 ">
                                            <b class="m-b-0">Special Notes</b>
                                        </div>
                                    </div>
                                    <div class=" container-fluid container-lala">
                                        <div class="row">

                                           <div class="col-10">
                                                <h5 class="m-b-0">Pabigay nalang sa driver ko at paki lagyan ng Karton ung makapal hahaha, nearest landmark lugawan ni mang kleuis Thanks</h5>

                                            </div> 
                                            <div class="col-2 text-center">
                                                <a class="btn default btn-outline image-popup-vertical-fit  btn-primary" href="assets/images/map.jpg" style="padding-top: 9px; color: white;"><i class="icon-map" alt="View Map" ></i></a>
                                                
                                            </div> 
                                        </div>
                                            

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <b class="m-b-0">Ordered List</b>
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

         <script src="functions/js/order.js"></script>