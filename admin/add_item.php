<?php
 include 'include/header.php';
?>
 <script src="functions/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="functions/js/dropzone.css">
<script type="text/javascript" src="functions/js/dropzone.js"></script>
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
             $title_page="Add Item";
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
                                <h4 class="m-b-0 text-white">Product Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
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
                                                    <input type="text" id="Item_name" class="form-control " placeholder="Korean Succulents" required="">
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
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <label class="control-label">Quantity</label>
                                                          <input type="number" id="quantity" name="quantity" min="1" max="300" class="form-control">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <label class="control-label">Price </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">₱</span>
                                                                </div>
                                                                <input type="text" id="Price" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                         </div> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <label class="control-label">Cost Price </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">₱</span>
                                                                </div>
                                                                <input type="text" id="costPrice" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
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
                                                                <h4 class="card-title">Item Images</h4>
                                                                <form></form>
                                                                <form action="functions/php/items.php" enctype="multipart/form-data" class="dropzone dropzone1" id="drop_img">
                                                                    
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

                                    <div class="form-actions text-right ">
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
            <script type="text/javascript">
                 var myDropzone = new Dropzone(".dropzone1", { 
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
        <?php
            include 'include/footer.php';
        ?>

