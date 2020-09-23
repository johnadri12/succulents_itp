<?php include("../../include/authenticate_db.php") ?>
<?php 



	if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
	}else{
		$Operation = mysqli_real_escape_string($conn, $_POST['operation']);


		if($Operation == "insert_item"){
					$status = "";
			$id = mysqli_real_escape_string($conn, $_POST['id']);
			$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
			$type  = mysqli_real_escape_string($conn, $_POST['type']);
			$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
			$price  = mysqli_real_escape_string($conn, $_POST['price']);
			$idh = $id;

			if($quantity > 20){
				$status = "In Stock";
			}else if($quantity < 20 && $quantity > 0){
				$status = "Low Stock";
			}else{
				$status = "Out of Stock";
			}

			if($quantity < 1){
				$quantity = 0;
			}

			$path_holder = "none";

			$sql = "INSERT INTO product VALUES ('$idh','$item_name','$type', '$quantity','$price', '$path_holder', '$status')";

			$result = mysqli_query($conn, $sql);

			if($result){
				echo "add_sucess";
			}else{
				echo "add_failed";
				}
		}

		if (!empty($_FILES)) 
		{
				$id =  mysqli_real_escape_string($conn, $_POST["foo"]);
				$target_dir = "uploads/";

				// Upload file
				$target_file = $target_dir .$id."-".basename($_FILES["file"]["name"]);
				$path_img = "functions/php/".$target_file;

				$msg = "";
				if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				  $msg = $target_file;
				}else{ 
				  $msg = "Error while uploading";
				}
				echo $msg;

				$sql = "UPDATE product SET Image = '$path_img' WHERE Product_code = '$id'";

				$result = mysqli_query($conn, $sql);

				if($result){
					echo "update sucess";
				}else{
					echo "update failed";		
				}
				exit;

		}

		if($Operation == "show_items"){

			$holder = '';
			$statusholder='';
			$squery = '';
			$stats =  mysqli_real_escape_string($conn, $_POST["stats"]);
				if(isset($_POST["query"]))
				{
					
					if($stats == "In Stock"){
						echo "in";
						$search = mysqli_real_escape_string($conn, $_POST["query"]);
						$squery = "
						SELECT * FROM product WHERE Status = 'In Stock' AND Product_name LIKE  '%".$search."%'";
					}
					if($stats == "Low Stock"){
						echo "low";
						$search = mysqli_real_escape_string($conn, $_POST["query"]);
						$squery = "
						SELECT * FROM product WHERE Status = 'Low Stock' AND Product_name LIKE  '%".$search."%'";
					}
					else if($stats == "Out of Stock"){
						echo "out";
						$search = mysqli_real_escape_string($conn, $_POST["query"]);
						$squery = "
						SELECT * FROM product WHERE Status = 'Out of Stock' AND Product_name LIKE  '%".$search."%'";
					}
					else if($stats == "All"){
						echo "all";
						$search = mysqli_real_escape_string($conn, $_POST["query"]);
						$squery = "
						SELECT * FROM product WHERE Product_name LIKE  '%".$search."%'";
					}
					
				}else{
					if($stats == "In Stock"){
						echo "in2";
						$squery = "
						SELECT * FROM product WHERE Status = 'In Stock'";
					}
					else if($stats == "Low Stock"){
						echo "low2";
						$squery = "
						SELECT * FROM product WHERE Status = 'Low Stock'";
					}
					else if($stats == "Out of Stock"){
						echo "out2";
						$squery = "
						SELECT * FROM product WHERE Status = 'Out of Stock'";
					}
					else if($stats == "All"){
						echo "all2";
						$squery = "SELECT * FROM product";
					}
				}
				
					
					
					
				

				//$squery = "SELECT * FROM product";

				$result = mysqli_query($conn, $squery);

				if(mysqli_num_rows($result) > 0)
				{

					while($row = mysqli_fetch_array($result)){

						if($row['Status'] == "In Stock"){
							$statusholder = '<button type="button" class="btn btn-maliit waves-effect waves-light btn-success">'.$row['Status'].'</button>';
						}else if($row['Status'] == "Low Stock"){
							$statusholder = '<button type="button" class="btn btn-maliit waves-effect waves-light btn-info">'.$row['Status'].'</button>';
						}else{
							$statusholder = '<button type="button" class="btn btn-maliit waves-effect waves-light btn-danger">'.$row['Status'].'</button>';
						}

						$holder .= '
											<tr>
                                                <td>
                                                    '.$row['Product_code'].'
                                                </td>
                                                <td>
                                                  '.$row['Product_name'].'
                                                </td>
                                                <td>
                                                   '.$row['Category'].'
                                                </td>
                                                <td>'.$row['Quantity'].'</td>
                                                <td> '.$row['Price'].'</td>
                                                <td> '.$statusholder.'</td>
                                                <td  class="text-nowrap">
                                                    <a class="Edit_items" href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_itm"></i> </a>
                                                    <a class="View_items"href="javascript:void(0)" data-toggle="tooltip" data-original-title="View" > <i class="fa fa-eye text-inverse m-r-10"  data-toggle="modal" data-target="#view_itm"></i> </a>
                                                    <a class="dels_item" href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" id="sa-warning"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>
                                            </tr>';

					}

					
					
				}else{
					$holder = '
						<td><center><h4>Item Doesnt Exist</h4></center></td>
						<td></td>
						<td><center><h4>Item Doesnt Exist</h4></center></td>
						<td></td>
						<td><center><h4>Item Doesnt Exist</h4></center></td>
						<td></td>
						<td><center><h4>Item Doesnt Exist</h4></center></td>
					';	
				}
			
			echo $holder;


	}else if($Operation == "show_item_info"){
		
	

		$id = mysqli_real_escape_string($conn, $_POST["item_id"]);
		$squery = "
		SELECT * FROM product WHERE Product_code = '$id'";

		$result = mysqli_query($conn, $squery);

		while($row = mysqli_fetch_array($result)){
		 $data["id"] = $row['Product_code'];
		 $data["Name"] = $row['Product_name'];
		 $data["Type"] = $row['Category'];
		 $data["Price"] = $row['Price'];
		 $data["Quant"] = $row['Quantity'];
		 $data["Path"] = $row['Image'];
				   
		}

	
		
		echo json_encode( $data);
		

	}else if($Operation == "edit_items"){

			$status="";

			$id = mysqli_real_escape_string($conn, $_POST["id"]);
			$Name = mysqli_real_escape_string($conn, $_POST['name']);
			$Type  = mysqli_real_escape_string($conn, $_POST['type']);
			$Quant = mysqli_real_escape_string($conn, $_POST['quant']);
			$Price = mysqli_real_escape_string($conn, $_POST['price']);
			$path_img = mysqli_real_escape_string($conn, $_POST['img_path']);
			
		

			if($Quant > 20){
				$status = "In Stock";
			}else if($Quant < 20 && $Quant > 0){
				$status = "Low Stock";
			}else{
				$status = "Out of Stock";
			}

			if($Quant < 1){
				$Quant = 0;
			}


		$squery = "
		UPDATE product SET Product_name= '$Name',Category= '$Type',Price= '$Price',Quantity= '$Quant',Status= '$status' WHERE Product_code = '$id' ";

		$result = mysqli_query($conn, $squery);

		if($result){
			if($path_img == "none"){
				echo "edit_sucess";
				
			}else{
				echo "edit_sucess_with_img";
				
			}
				
				 
			}else{
				echo "edit_failed";
				
				} 


	}else if($Operation == "show_item_details"){

		$holder = '';
		$statusholder='';

			$id = mysqli_real_escape_string($conn, $_POST["item_id"]);
		$squery = "
		SELECT * FROM product WHERE Product_code = '$id' ";


		$result = mysqli_query($conn, $squery);

		while($row = mysqli_fetch_array($result)){

			if($row['Status'] == "In Stock"){
							$statusholder = '<button type="button" class="btn btn-maliit waves-effect waves-light btn-success">'.$row['Status'].'</button>';
						}else if($row['Status'] == "Low Stock"){
							$statusholder = '<button type="button" class="btn btn-maliit waves-effect waves-light btn-info">'.$row['Status'].'</button>';
						}else{
							$statusholder = '<button type="button" class="btn btn-maliit waves-effect waves-light btn-danger">'.$row['Status'].'</button>';
						}

		 $holder .= '
							<tr>
                                                <td>Item ID</td>
                                                <td>
                                                  '.$row['Product_code'].'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Item Name</td>
                                                <td>
                                                  '.$row['Product_name'].'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Type</td>
                                                <td>
                                                  '.$row['Category'].'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quantity</td>
                                                <td>
                                                   '.$row['Quantity'].'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price </td>
                                                <td>
                                                  '.$row['Price'].'
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Stock </td>
                                                <td> '.$statusholder.'</td>
                                            </tr>
                                            <input type="hidden" id="hid_img" name="" value="'.$row['Image'].'">
                                            ';

		   
		}

	
		
		echo $holder;

	}else if($Operation == "delete_items"){

		$id = mysqli_real_escape_string($conn, $_POST["item_id"]);
		$squery = "
		DELETE FROM product WHERE Product_code = '$id' ";
		$result = mysqli_query($conn, $squery);

		if($result){
				echo "Delete_sucess";
				 
			}else{

				echo "Delete_failed";
			}

	}







}




 ?>
