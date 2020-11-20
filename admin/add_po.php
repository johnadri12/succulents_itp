<?php
 include 'include/header.php';
?>
<script src="functions/js/jquery.js"></script>

<body class="fix-header fix-sidebar card-no-border" onload="load_vends()">
    
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
             $title_page="Add Purchase Order";
             include 'include/sidebar.php';
         ?>
        
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
                
        <?php
            include 'include/titlepage.php';
        ?>  <script src="functions/js/jquery.js"></script>
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
                            <div class="card-header " style="display: flex">
                                <h4 class="m-b-0 text-white "style="flex: 1">Add Purchase Order </h4>
                                <h4  class="m-b-0 text-white ">Ref. No: </h4>
                                <h4 id="trnum" class="m-b-0 text-white " style="margin-left: 4px;font-weight: bold;"> None</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                            <div class=" wizard-content"> 
                                                <form action="#" class="tab-wizard wizard-circle">
                                                    <!-- Step 1 -->
                                                    <h6>Supplier Info</h6>
                                                    <section>
                                                        <br><br>
                                                            <h5 class="box-title m-t-40" style="margin-top:-10px; margin-left: 10px; ">Item Selling by Category</h5>
                                                        <div class="row">
                                                         
                                                            <div class="row" style="margin-left: 15px; margin-top: 15px;">
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
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="firstName1">Supplier :</label>
                                                                    <div class="dropdown">
  <button id="supname" class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%; height: 38px;border: 1px solid #ced4da;">
        Select Supplier
 </button>
  <div class="dropdown-menu" aria-labelledby="dropdown_user">
    
    <input type="search" id="search_supplier" class="form-control search" placeholder="Search.." autofocus="autofocus">
    
    <div class="menuItems" style="overflow: auto; max-height: 110px;">

     

      <input type="button" class="dropdown-item" type="button" value="Test2" />
      <input type="button" class="dropdown-item" type="button" value="Test3" />
    </div>
    <div style="display:none;" class="dropdown-header dropdown_empty">No entry found</div>
  </div>
</div>
<input id="selling" type="hidden" name="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="name_contact">Contact Name:</label>
                                                                    <input type="text" class="form-control" id="name_contact" name="name_contact"> </div>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="sup_contact">Contact:</label>
                                                                    <input type="tel" class="form-control" id="sup_contact" name="sup_contact" readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="sup_address">Supplier Address:</label>
                                                                    <input type="text" class="form-control" id="sup_address" name="sup_address" readonly="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="date1">Expected Delivery Date:</label>
                                                                    <input type="date" class="form-control" id="delivery_date" name="delivery_date">
                                                                </div>
                                                            </div>
                                                         
                                                        </div>
                                                       

                                                    </section>
                                                    <!-- Step 2 -->
                                                    <h6>Order Items</h6>
                                                    <section>
                                                        <div class="row" style="border: 1px solid  #2f3d4a1a; border-left:none; border-right:none; margin-bottom: 40px; padding: 10px; background: #6c757d12;">
                                                            <div class="col-md-8 col-sm-12">
                                                                <h5 class="card-title" style="padding-top: 9px;padding-bottom: 0px;margin-bottom: -10px;">
                                                                    View: <span><a href="javascript void(0)">12/</a></span><span><a href="javascript void(0)">24/</a></span><span><a href="javascript void(0)">All</a></span></h5>
                                                            </div>
                                                          <!-- Filter -->
                                                            <div class="col-md-4 col-sm-12 pahinga">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="input-group ">
                                                                            <input id="search_text" class="form-control" placeholder="Search Products">
                                                                            <span class="input-group-append bg-white">
                                                                                <button class="btn border border-left-0" type="button" style="padding-bottom: 4px;"><i class="mdi mdi-magnify"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                  
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="data_bod" class="row">
                                                            <!-- data list -->
                                                        </div>
                                                    </section>
                                                    <!-- Step 3 -->
                                                    <h6>Cart</h6>
                                                    <section>
                                                         <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card card-outline-info">
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
                                                                                        <th>Cost</th>
                                                                                        <th>Total</th>
                                                                                        <th class="text-nowrap">Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="cart">
                                                                                                                              
                                                                                   
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row col-lg-12" style="margin-bottom: 15px;">
                                                                    <div class="col-md-6 bigitem">
                                                                        <div class="row">
                                                                             <span ><h4 style="margin-right: 10px;">Shipping Cost:</h4></span>
                                                                             <input type="tel" class="form-control " value="0"  id="shipping_cost" name="sup_contact" style="min-height: 30px;height: 30px; width: 40%; max-width: 170px;"> 
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="col-md-6 smallitem"  >
                                                                        <div class="row">
                                                                            <div>  </div>
                                                                            <div class="row"  style="margin-left: auto;"> 
                                                                                <span><h4>Total: $</h4></span><span><h4 id="gtotal">0.00</h4></span>
                                                                                <input type="hidden" id="hidqu" name="">  
                                                                            </div>
                                                                              
                                                                               
                                                                            
                                                                        </div>
                                                                     
                                                                    </div>
                                                                </div>
                                                                  
                                                            </div>
                                                        </div>
                                                    </section>
                                                </form>
                                            </div> 
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- Edit Item Modal -->
            <!-- ============================================================== -->
                    <div id="edit_itm" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
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
                                                <div class="profile-img" style="margin-bottom: 5px;"> <img id="img_pod"  class="change_img" src="assets/images/products/korean.jpg" alt="user">
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
                                        <tbody id="body_edit">
                                            <tr>
                                                <td>Product ID</td>
                                                <td id="mproduct_code">
                                                   001
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Item Name</td>
                                                <td id="mitem_name">
                                                   Korean Succulents    
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>Type</td>
                                                <td id="mtype">
                                                   Korean Succulents    
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td >
                                                    Quantity
                                                </td>
                                                <td>
                                                    <input type="number" id="mproduct_quantity" name="mproduct_quantity" min="1"  class="form-control" value="100">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price </td>
                                                <td id="meprice">
                                                  20.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cost Price </td>
                                                <td id="mecostprice">
                                                  20.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total </td>
                                                <td id="metotal_price" >
                                                   2,000.00
                                                </td>
                                            </tr>

                                            <input type="hidden" id="hidden_quantity" name="hidden_quantity" min="1"  class="form-control" value="100">
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" id="esa-success" class="btn btn-success" > <i class="fa fa-check" ></i> Submit</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
            <!-- /.End modal -->
            <!-- View Emplyee Modal -->
                    <div id="view_empl" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Employee Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class= "col-md-12">
                                            <div class="user-profiler">
                                                <div class="profile-img"    > <img class="change_img" src="assets/images/users/female.png" alt="user">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <table class="table table-striped">
                                        <thead>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Employee ID</td>
                                                <td>
                                                   Justine Capili
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                   Justine Capili
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Role</td>
                                                <td>
                                                   Marketing Staff
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>
                                                   Female
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Birthday </td>
                                                <td>
                                                  11-06-1999
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Address </td>
                                                <td>
                                                   36G Paz St Malabon City, Metro Manila Philippines
                                                </td>
                                            </tr>
                                            <tr>
                                                 <td>Gcash Account</td>
                                                <td>
                                                   123456789
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
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
             
        <?php
            include 'include/footer.php';
        ?>

        <script src="functions/js/po.js"></script>