<?php
 include 'include/header.php';
?>

<script src="functions/js/jquery.js"></script>
<body class="fix-header fix-sidebar card-no-border" onload="load_supplier_list()">
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
             $title_page="Manage Supplier";
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
                                    <div class="col-md-7">
                                        <div class="form-group has-success">
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px; margin-top: 10px">
                                            <input id="checkbox-flowers" type="checkbox" class="chks">
                                            <label for="checkbox-flowers"> Flowers </label>
                                            </div>
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px; margin-top: 10px">
                                                <input id="checkbox-Cactus" type="checkbox" class="chks">
                                                <label for="checkbox-Cactus"> Cactus</label>
                                            </div>
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px; margin-top: 10px">
                                                <input id="checkbox-Soil" type="checkbox" class="chks">
                                                <label for="checkbox-Soil"> Soil </label>
                                            </div>
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px; margin-top: 10px">
                                                <input id="checkbox-Pot" type="checkbox" class="chks">
                                                <label for="checkbox-Pot"> Pot </label>
                                            </div>
                                            <input type="hidden" id="sup_sellingfilter" name="" value="none">
                                            <br><br>
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
                                         <h4 class="m-b-0 text-white">Supplier List</h4>
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
                                                    <input type="text" id="search_text" class="form-control" placeholder="Search " aria-label="Input group example" aria-describedby="btnGroupAddon2">
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
                                                <th>Supplier ID</th>
                                                <th>Supplier Name</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>City</th>
                                                <th class="text-nowrap">Selling</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_bod">
                                            <tr>
                                                <td>00001</td>
                                                <td>
                                                   Justine Capili
                                                </td>
                                                <td>
                                                    Marketing Staff
                                                </td>
                                                <td>Female</td>
                                                <td>Manila Zoo</td>
                                                <td><button type="button" class="btn btn-maliit waves-effect waves-light btn-success">Active</button></td>
                                                <td  class="text-nowrap">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_empl"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="View" > <i class="fa fa-eye text-inverse m-r-10"  data-toggle="modal" data-target="#view_empl"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" id="sa-warning"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>00002</td>
                                                <td>
                                                   Juriel Capili
                                                </td>
                                                <td>
                                                    Marketing Staff
                                                </td>
                                                <td>Female</td>
                                                <td>Manila Zoo</td>
                                                <td><button type="button" class="btn btn-maliit waves-effect waves-light btn-danger">Tamad</button></td>
                                                <td  class="text-nowrap">
                                                    <a id="edit_emp_btn" href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_empl"></i> </a>
                                                    <a id="edit_emp_btn" href="javascript:void(0)" data-toggle="tooltip" data-original-title="View" > <i class="fa fa-eye text-inverse m-r-10"  data-toggle="modal" data-target="#view_empl"></i> </a>

                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" > <i class="fa fa-close text-danger m-r-10" ></i> </a>

                                                    <a  href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete"  > <i class="fa fa-close text-danger"></i> </a>
                                                    <button id="edite">sdds</button>
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
                <!-- Edit Emplyee Modal -->
                <!-- ============================================================== -->
                    <div id="edit_empl" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Supplier Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    
                                   <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Supplier ID</label>
                                                <input type="text" id="edit_sup_id" class="form-control"  value="0001" readonly>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Supplier Name</label>
                                                <input type="text" id="edit_sup_name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Contact</label>
                                                <input type="text" id="edit_sup_contact" class="form-control" value="11-06-99">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" id="edit_sup_email" class="form-control" value="11-06-99">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Street</label>
                                                <input type="text" id="edit_sup_street" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Barangay</label>
                                                <input type="text" id="edit_sup_brgy" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">City</label>
                                                <input type="text" id="edit_sup_city" class="form-control" value="">
                                            </div>
                                        </div>
                                       
                                   </div>
                                     <div class="row" style="margin-left: .2rem; margin-top: 15px;">
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px;">
                                            <input id="echeckbox-flowers" type="checkbox" class="echk">
                                            <label for="echeckbox-flowers"> Flowers </label>
                                            </div>
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px;">
                                                <input id="echeckbox-Cactus" type="checkbox" class="echk">
                                                <label for="echeckbox-Cactus"> Cactus</label>
                                            </div>
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px;">
                                                <input id="echeckbox-Soil" type="checkbox" class="echk">
                                                <label for="echeckbox-Soil"> Soil </label>
                                            </div>
                                            <div class="checkbox checkbox-primary pull-left p-t-0" style="margin-right: 10px;">
                                                <input id="echeckbox-Pot" type="checkbox" class="echk">
                                                <label for="echeckbox-Pot"> Pot </label>
                                            </div>
                                            <input type="hidden" id="esup_selling" name="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" id="Edit_submit" class="btn btn-success" > <i class="fa fa-check" ></i> Submit</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <!-- /.End modal -->
                <!-- ============================================================== -->
                
                <!-- View Emplyee Modal -->
                    <div id="view_empl" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Supplier Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    
                                   <table  class="table table-striped">
                                        <thead>
                                            
                                        </thead>
                                        <tbody id="supplier_details">
                                            <tr>
                                                <td>Supplier ID</td>
                                                <td id="view_sup_id">
                                                   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td id="view_sup_name">
                                                  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Contact</td>
                                                <td id="view_sup_contact">
                                                  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td id="view_sup_email">
                                                  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Address </td>
                                                <td id="view_sup_address">
                                                  
                                                </td>
                                            </tr>
                                            <tr>
                                                 <td>Selling</td>
                                                <td id="view_sup_selling">
                                                  
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
                <script src="functions/js/supplier.js"></script>

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