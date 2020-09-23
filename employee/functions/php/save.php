$Operation = mysqli_real_escape_string($conn, $_POST['operation']);

		$upload_dir = 'uploads';
		
		$idh;
		if (!empty($_FILES)) 
		{ 


			  $tempFile = $_FILES['file']['tmp_name'];//this is temporary server location

		     // using DIRECTORY_SEPARATOR constant is a good practice, it makes your code portable.
		     $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . $upload_dir . DIRECTORY_SEPARATOR;

		     // Adding timestamp with image's name so that files with same name can be uploaded easily.
		     $mainFile = $uploadPath.time().'-'. $_FILES['file']['name'];

		 

			$result = mysqli_query($conn, $sql);

		    move_uploaded_file($tempFile,$mainFile);



			

			$status = "";
			$id = mysqli_real_escape_string($conn, $_POST['id']);
			$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
			$type  = mysqli_real_escape_string($conn, $_POST['type']);
			$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
			$price  = mysqli_real_escape_string($conn, $_POST['price']);
			$idh = "ss5";

			if($quantity > 10){
				$status = "Low Stock";
			}else if($quantity > 20){
				$status = "In Stock";
			}else{
				$status = "Out of Stock";
			}

			$path_holder = $upload_dir.$mainFile;

			$sql = "INSERT INTO product VALUES ('$idh','$item_name','$type','$price', '$quantity', '$status', '$path_holder')";

			$result = mysqli_query($conn, $sql);

			if($result){
				echo "add_sucess";
			}else{
				echo  $conn -> error;
					
				}

			

			




		   

		    

		  
		     
		}

		


		



















		$(document).ready(function(){

});

	Dropzone.autoDiscover = false;

	var myDropzone = new Dropzone(".dropzone", { 
   	autoProcessQueue: false,
   	addRemoveLinks: true,
  	parallelUploads: 10,
  	 // Number of files process at a time (default 2)
  	init: function(){

  		 var ids;	
  		

  		$('#sa-success').click(function(){

			

			//var id               = $('#Item_Id').val();
			var id               = "2344";
			var item_name        = $('#Item_name').val();
			var type             = $('#Item_type option:selected').text();
			var quantity         = $('#quantity').val();
			var price            = $('#Price').val();
			var operation 		 = "insert_item";
			ids = id;
			
			$.ajax({
				type:'post',
				data:{id:id,item_name:item_name,type:type,quantity:quantity,price:price,operation:operation  
				},
				url:"../admin/functions/php/product.php",
				success: function(resulte){
						var res = resulte;
				
						if(res == 'add_sucess'){
							swal("Successfull", "Your Data Added Successfully", "success");
							myDropzone.processQueue();
						    setTimeout(function() {
				     		$('.dropzone')[0].dropzone.files.forEach(function(file) { 
					 		 file.previewElement.remove(); 
							});

							$('.dropzone').removeClass('dz-started');
							
				    		}, 2500);
						}	
						else if(res == 'add_failed'){
							swal("Oops", "Adding Failed", "error");
						}
						else if( res == 'connection_error'){
							swal("Oops", "Connection Error", "error");
						}else{
							alert(res);
							console.log(res);
						}

				}

			});




		

		 	
	});

  		
  	}


	});


	

