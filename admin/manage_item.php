<?php
 include 'include/header.php';
?>
 <script src="functions/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="functions/js/dropzone.css">
<script type="text/javascript" src="functions/js/dropzone.js"></script>

<body  class="fix-header fix-sidebar card-no-border" onload="load_item_list()">
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
             $title_page="Manage Item";
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
                                         <select id="status_select" class="form-control custom-select ">
                                            <option class="all" >All</option>
                                            <option class="active" >Low Stock</option>
                                            <option class="active" >In Stock</option>
                                            <option class="active" >Out of Stock</option>
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
                                         <h4 class="m-b-0 text-white">Item List</h4>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text" id="btnGroupAddon2"><i class="ti-search"></i></div>
                                                            </div>
                                                            <input type="text" id="search_text" class="form-control" placeholder="Search " aria-label="Input group example" aria-describedby="btnGroupAddon2">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                         <button id="add_item_shortcut" class="btn btn-danger waves-effect waves-light" type="button" data-toggle="modal" data-target="#add_itm"><span class="btn-label"><i class="mdi mdi-plus"></i></span>Add</button>
                                                    </div>
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
                                                <th>Cost Price</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_bod">
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
                                                <td><button type="button" class="btn btn-maliit waves-effect waves-light btn-success">In Stock </button></td>
                                                <td  class="text-nowrap">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_itm"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="View" > <i class="fa fa-eye text-inverse m-r-10"  data-toggle="modal" data-target="#view_itm"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" id="sa-warning"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    1ba2-ca01-486c-8399-45
                                                </td>
                                                <td>
                                                   Korean Succulents
                                                </td>
                                                <td>
                                                    Pot
                                                </td>
                                                <td>40</td>
                                                <td>20.00</td>
                                                <td><button type="button" class="btn btn-maliit waves-effect waves-light btn-info">Low Stock </button></td>
                                                <td  class="text-nowrap">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_itm"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="View" > <i class="fa fa-eye text-inverse m-r-10"  data-toggle="modal" data-target="#view_itm"></i> </a>
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
                                                <td>0</td>
                                                <td>20.00</td>
                                                <td><button type="button" class="btn btn-maliit waves-effect waves-light btn-danger">Out of Stock </button></td>
                                                <td  class="text-nowrap">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_itm"></i> </a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="View" > <i class="fa fa-eye text-inverse m-r-10"  data-toggle="modal" data-target="#view_itm"></i> </a>
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
                    <div id="edit_itm" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Edit Item Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <div class="item-profiler">
                                                <div  class="profile-img" style="margin-bottom: 5px;"> <img id="Item_img" class="change_img" src="assets/images/products/korean.jpg" alt="user">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Item ID</label>
                                                    <input type="text" id="eitem_id" class="form-control" value="001" readonly="">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Item Name</label>
                                                    <input type="text" id="eitem_name" class="form-control " placeholder="Korean Succulents" required="">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Type</label>
                                                    <select id="eitem_type" class="form-control custom-select selector_image">
                                                        <option class="male" value="">Succulents Flower</option>
                                                        <option class="female" value="">Succulents Cactus</option>
                                                        <option class="female" value="">Soil</option>
                                                        <option class="female" value="">Pot</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="control-label">Quantity</label>
                                                          <input type="number" id="equantity" name="quantity" min="1" max="300" class="form-control" value="100">
                                                    </div>
                                                    
                                                </div>

                                                
                                            </div>
                                            <div class="col-12">
                                                 <div class="row">

                                                    <div class="col-6">
                                                        <div class="form-group ">
                                                            <label class="control-label">Price </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">&#8369;</span>
                                                                </div>
                                                                <input id="eitem_price" type="text" class="form-control" value="20">
                                                                
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group ">
                                                            <label class="control-label">Cost Price </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">&#8369;</span>
                                                                </div>
                                                                <input id="ecost_price" type="text" class="form-control" value="20">
                                                                
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                           
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Change Item Images</h4>
                                                                 <form action="functions/php/items.php" enctype="multipart/form-data" class="dropzone dropzone1 " >
                                                                    
                                                                  </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" id="submit_edit" class="btn btn-success" > <i class="fa fa-check" ></i> Submit</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <!-- /.End modal -->
                <!-- ============================================================== -->


                <!-- Add Item Modal -->
                <!-- ============================================================== -->
                    <div id="add_itm" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Add Item </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Item ID</label>
                                                    <input type="text" id="Item_Id" class="form-control" value="001" readonly="">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Item Name</label>
                                                    <input type="text" id="Item_name" class="form-control " placeholder="Item Name" required="">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Type</label>
                                                    <select id="Item_type" class="form-control custom-select selector_image">
                                                        <option class="male" value="">Succulents Flower</option>
                                                        <option class="female" value="">Succulents Cactus</option>
                                                        <option class="female" value="">Soil</option>
                                                        <option class="female" value="">Pot</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="control-label">Quantity</label>
                                                          <input type="number" id="quantity" name="quantity" min="1" max="300" class="form-control" >
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                           
                                                <div class="col-6">
                                                        <div class="form-group ">
                                                            <label class="control-label">Price </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">&#8369;</span>
                                                                </div>
                                                                <input id="Price" type="text" class="form-control" >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                </div>
                                                <div class="col-6">
                                                        <div class="form-group ">
                                                            <label class="control-label">Cost Price </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">&#8369;</span>
                                                                </div>
                                                                <input id="costPrice" type="text" class="form-control" >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                </div>
                                         
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Change Item Images</h4>
                                                                <form action="functions/php/items.php" enctype="multipart/form-data" class="dropzone drop2">
                                                                    
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" id="sarw-success" class="btn btn-success" > <i class="fa fa-check" ></i> Submit</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <!-- /.End modal -->
                <!-- ============================================================== -->
                
                <!-- View Item Modal -->
                    <div id="view_itm" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Item Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-4">
                                            
                                        </div>
                                        <div class= "col-md-4">
                                            <div class="item-profiler">
                                                <div class="profile-img" style="margin-bottom: 5px;"> <img id="item_img" class="change_img" src="assets/images/products/korean.jpg" alt="user">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            
                                        </div>
                                    </div>
                                   <table class="table table-striped">
                                        <thead>
                                            
                                        </thead>
                                        <tbody id="Item_details">
                                            <tr>
                                                <td>Item ID</td>
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
                                                  Succulents Flower
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quantity</td>
                                                <td>
                                                   300
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price </td>
                                                <td>
                                                  20.00
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Stock </td>
                                                <td>
                                                 <button type="button" class="btn btn-maliit waves-effect waves-light btn-success">In Stock 
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

                 <script type="text/javascript">
                     
                     var myDropzone = new Dropzone(".dropzone1", { 
                       maxFiles: 1,
                       autoProcessQueue: false,
                       addRemoveLinks: true,
                       parallelUploads: 10,  maxfilesexceeded: function(file) {
                             this.removeAllFiles();
                             this.addFile(file);
                        },
                         // Number of files process at a time (default 2)
                         init: function() {
                        this.on("sending", function(file, xhr, formData) {
                          formData.append("foo", ids);
                          formData.append("operation", "ret");
                          console.log(formData)
                        });
                      }
                    });

                    var myDropzone2 = new Dropzone(".drop2", { 
                       maxFiles: 1,
                       autoProcessQueue: false,
                       addRemoveLinks: true,
                       parallelUploads: 10,
                         maxfilesexceeded: function(file) {
                             this.removeAllFiles();
                             this.addFile(file);
                        },
                         // Number of files process at a time (default 2)
                         init: function() {
                        this.on("sending", function(file, xhr, formData) {
                          formData.append("foo", ids);
                          formData.append("operation", "ret");
                          console.log(formData)
                        });
                      }
                    }); 

                 </script>   
                 <script src="functions/js/items.js"></script>

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