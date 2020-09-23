<!DOCTYPE html>
<html>
<head>
	<title>ss</title>
	<script src="../js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../js/dropzone.min.css">
	<script type="text/javascript" src="../js/dropzone.min.js"></script>

</head>
<body>
    <select id="status_select" class="form-control custom-select ">
                                            <option class="all" >All</option>
                                            <option class="active" >Low Stock</option>
                                            <option class="active" >In Stock</option>
                                            <option class="active" >Out of Stock</option>
                                         </select>
                                          <input type="text" id="search_text" class="form-control" placeholder="Search " aria-label="Input group example" aria-describedby="btnGroupAddon2">
	 <form action="product.php" class="dropzone" id="drop_img">
                                                                    
     </form>
      <input type="button" id='uploadfiles' value='Upload Files' >

</body>
 <script src="../js/items.js"></script>
<script type="text/javascript">
	

$('#uploadfiles').click(function(){
   myDropzone.processQueue();
   var operation 		 = "insert_item";
   
});
</script>
</html>
