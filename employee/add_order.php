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
             $title_page="Add Order";
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
                                <h4 class="m-b-0 text-white">Add Order </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                            <div class=" wizard-content"> 
                                                <form action="#" class="tab-wizard wizard-circle">
                                                    <!-- Step 1 -->
                                                    <h6>Customers Info</h6>
                                                    <section>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="firstName1">Full Name :</label>
                                                                    <input type="text" class="form-control" id="firstName1" name="fname"> </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lastName1">Contact Number</label>
                                                                    <input type="text" class="form-control" id="lastName1" name="lname"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress1">Order QTY</label>
                                                                    <input type="email" class="form-control" id="emailAddress1" name="email"> </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="phoneNumber1">Phone Number :</label>
                                                                    <input type="tel" class="form-control" id="phoneNumber1" name="phone"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="date1">Order Date :</label>
                                                                    <input type="date" class="form-control" id="date1" name="bdate">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="date1">Delivery Date :</label>
                                                                    <input type="date" class="form-control" id="date1" name="bdate">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="date1">Address :</label>
                                                                    <input type="text" class="form-control" id="date1" name="bdate">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="date1">Special Notes:</label>
                                                                    <input type="text" class="form-control" id="date1" name="bdate">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12" style="padding-bottom: 50px;">
                                                                  <label for="date1">Upload Map Screenshot (Optional) :</label>
                                                                  <input type="file" name="fileToUpload" id="fileToUpload">                                                                
                                                            </div>
                                                        </div>

                                                    </section>
                                                    <!-- Step 2 -->
                                                    <h6>Order</h6>
                                                    <section>
                                                        <div class="row" style="border: 1px solid  #2f3d4a1a; border-left:none; border-right:none; margin-bottom: 40px; padding: 10px; background: #6c757d12;">
                                                            <div class="col-md-8 col-sm-12">
                                                                <h5 class="card-title" style="padding-top: 9px;padding-bottom: 0px;margin-bottom: -10px;">
                                                                    View: <span><a href="javascript void(0)">12/</a></span><span><a href="javascript void(0)">24/</a></span><span><a href="javascript void(0)">All</a></span></h5>
                                                            </div>
                                                          <!-- Filter -->
                                                            <div class="col-md-4 col-sm-12 pahinga">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="input-group ">
                                                                            <input class="form-control" placeholder="Search Products">
                                                                            <span class="input-group-append bg-white">
                                                                                <button class="btn border border-left-0" type="button" style="padding-bottom: 4px;"><i class="mdi mdi-magnify"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group" style="margin-bottom: 0px;">
                                                                            <select class="form-control custom-select ">
                                                                                <option class="all" >Default Sorting</option>
                                                                                <option class="active" >Succulent Flower</option>
                                                                                <option class="inactive" >Succulent Cactus</option>
                                                                                <option class="inactive" >Soil</option>
                                                                                <option class="inactive" >Pots</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-6">
                                                               <div class="card" >
                                                                  <img class="card-img-top" src="assets/images/products/korean.jpg" alt="Card image cap">
                                                                  <div class="card-body">
                                                                    <div class="ribbon ribbon-bookmark ribbon-right ribbon-warning"><span >90</span>pcs left</div>
                                                                    <h4 class="card-title">Korean Succulents</h4>
                                                                    <h5 class="card-title">Succulents</h5>
                                                                    <p class="card-text">Succulents Hobbyist Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                                                    <div class="col-12">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="form">
                                                                                        
                                                                                    </div>
                                                                                      <input type="number" id="quantity" name="quantity" min="1" max="300" class="form-spcontrol" value="0">  
                                                                                       <a href="#" class="btn btn-primary">Add to Cart</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                               
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                               <div class="card" >
                                                                  <img class="card-img-top" src="assets/images/products/Masitera.jpg" alt="Card image cap">
                                                                  <div class="card-body">
                                                                    <div class="ribbon ribbon-bookmark ribbon-right ribbon-warning"><span >5</span>pcs left</div>
                                                                    <h4 class="card-title">Masitera White </h4>
                                                                    <h5 class="card-title">Soil</h5>
                                                                    <p class="card-text">Succulents Hobbyist Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                                                    <div class="col-12">
                                                                        <div class="row">
                                                                            <div class="col-16">
                                                                                <div class="form-group">
                                                                                    <div class="form">
                                                                                        
                                                                                    </div>
                                                                                      <input type="number" id="quantity" name="quantity" min="1" max="300" class="form-spcontrol" value="0">  
                                                                                       <a href="#" class="btn btn-primary">Add to Cart</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                               
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                               <div class="card" >
                                                                  <img class="card-img-top" src="assets/images/products/Potpot.jpg" alt="Card image cap">
                                                                  <div class="card-body">
                                                                    <div class="ribbon ribbon-bookmark ribbon-right ribbon-warning"><span >10</span>pcs left</div>
                                                                    <h4 class="card-title">King Pot</h4>
                                                                    <h5 class="card-title">Pot</h5>
                                                                    <p class="card-text">Succulents Hobbyist Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                                                    <div class="col-12">
                                                                        <div class="row">
                                                                            <div class="col-16">
                                                                                <div class="form-group">
                                                                                    <div class="form">
                                                                                        
                                                                                    </div>
                                                                                      <input type="number" id="quantity" name="quantity" min="1" max="300" class="form-spcontrol" value="0">  
                                                                                       <a href="#" class="btn btn-primary">Add to Cart</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                               
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12">
                                                               <div class="card" >
                                                                  <div class="ribbon ribbon-bookmark ribbon-right ribbon-warning"><span >90</span>pcs left</div>
                                                                  <img class="card-img-top" src="assets/images/products/Sucu.jpg" alt="Card image cap">
                                                                  <div class="card-body">
                                                                    <h4 class="card-title">Malabon Succulents</h4>
                                                                    <h5 class="card-title">Succulents</h5>
                                                                    <p class="card-text">Succulents Hobbyist Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                                                    <div class="col-12">
                                                                        <div class="row">
                                                                            <div class="col-16">
                                                                                <div class="form-group">
                                                                                    <div class="form">
                                                                                        
                                                                                    </div>
                                                                                      <input type="number" id="quantity" name="quantity" min="1" max="300" class="form-spcontrol" value="0">  
                                                                                       <a href="#" class="btn btn-primary">Add to Cart</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                               
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div>
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
                                                                                        <th>Total</th>
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
                                                                                        <td  class="text-nowrap">
                                                                                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_itm"></i> </a>
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
                                                                                        <td  class="text-nowrap">
                                                                                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_itm"></i> </a>
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
                                                                                        <td>200.00</td>
                                                                                        <td  class="text-nowrap">
                                                                                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_itm"></i> </a>
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
                                                    <input type="number" id="quantity" name="quantity" min="1" max="300" class="form-control" value="100">
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