<?php include("../../include/authenticate_db.php") ?>
<?php 



	if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
	}else{
		$Operation = mysqli_real_escape_string($conn, $_POST['operation']);


		if($Operation == "insert"){

			$First_name = mysqli_real_escape_string($conn, $_POST['first_name']);
			$Last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
			$Gender  = mysqli_real_escape_string($conn, $_POST['gender']);
			$Position = mysqli_real_escape_string($conn, $_POST['position']);
			$Date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
			$Gcash = mysqli_real_escape_string($conn, $_POST['gcash']);
			$Email	 = mysqli_real_escape_string($conn, $_POST['email']);
			$Username = mysqli_real_escape_string($conn, $_POST['username']);
			$Password = mysqli_real_escape_string($conn, $_POST['password']);
			$Confirm_pass = mysqli_real_escape_string($conn, $_POST['confirm_pass']);
			$Street   = mysqli_real_escape_string($conn, $_POST['street']);
			$City  = mysqli_real_escape_string($conn, $_POST['city']);
			$Brgy = mysqli_real_escape_string($conn, $_POST['brgy']);

			if(empty($First_name) || empty($Last_name) || empty($Gender)||
			   empty($Position) || empty($Date_of_birth)|| empty($Email)||
			   empty($Username) || empty($Password)|| empty($Street)||empty($Brgy)
			   ||empty($City)){

			   echo  "Missing Field"; 

			}else{
				$FullName = $First_name.$Last_name;

			$sql_u = "SELECT * FROM users WHERE UserName='$Username' OR Email = '$Email' ";
  		
  			$res_u = mysqli_query($conn, $sql_u);
  			

  			if (mysqli_num_rows($res_u) > 0) {
  	 		    echo  "User Already Exist"; 	
  			}else{
  				$sql = "INSERT INTO users VALUES ('','$FullName','$Gender','$Position', '$Date_of_birth', '$Gcash', '$Email','$Username','$Password','$Street','$Brgy','$City','Employee','Active')";

			$result = mysqli_query($conn, $sql);

			if($result){
				echo "add_sucess";
				 
			}else{
				echo "add_failed";
					//echo ("".$conn -> error);
				}
  			}

		}


			


			 




		}else if($Operation == "show_user"){

			$holder = '';
			$statusholder='';
			$squery = '';
			$stats =  mysqli_real_escape_string($conn, $_POST["stats"]);
				if(isset($_POST["query"]))
				{
					
					if($stats == "Active"){
						$search = mysqli_real_escape_string($conn, $_POST["query"]);
						$squery = "
						SELECT * FROM users WHERE Status = 'Active' AND Name LIKE  '%".$search."%'";
					}
					else if($stats == "Inactive"){
						$search = mysqli_real_escape_string($conn, $_POST["query"]);
						$squery = "
						SELECT * FROM users WHERE Status = 'Inactive' AND Name LIKE  '%".$search."%'";
					}
					else if($stats == "All"){
						$search = mysqli_real_escape_string($conn, $_POST["query"]);
						$squery = "
						SELECT * FROM users WHERE Name LIKE  '%".$search."%'";
					}
					
				}
				else
				{
					
					if($stats == "Active"){
						$squery = "
						SELECT * FROM users WHERE Status = 'Active'";
					}
					else if($stats == "Inactive"){
						$squery = "
						SELECT * FROM users WHERE Status = 'Inactive'";
					}
					else if($stats == "All"){
						$squery = "SELECT * FROM users";
					}
					
				}

				$result = mysqli_query($conn, $squery);

				if(mysqli_num_rows($result) > 0)
				{

					while($row = mysqli_fetch_array($result)){

						if($row['Status'] == "Active"){
							$statusholder = '<button type="button" class="btn btn-maliit waves-effect waves-light btn-success">'.$row['Status'].'</button>';
						}else{
							$statusholder = '<button type="button" class="btn btn-maliit waves-effect waves-light btn-danger">'.$row['Status'].'</button>';
						}

						$holder .= '
							<tr>
								<td>'.$row['User_id'].'</td>
								<td>'.$row['Name'].'</td>
								<td>'.$row['Position'].'</td>
								<td>'.$row['Gender'].'</td>
								<td>'.$row['City'].'</td>
								<td>'.$statusholder.'</td>
								<td  class="text-nowrap">
                                                    <a class="Edit_emp" href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"data-toggle="modal" data-target="#edit_empl"></i> </a>
                                                    <a class="View_emp" href="javascript:void(0)" data-toggle="tooltip" data-original-title="View" > <i class="fa fa-eye text-inverse m-r-10"  data-toggle="modal" data-target="#view_empl"></i> </a>
                                                    <a  href="javascript:void(0)" class="dels" data-toggle="tooltip" data-original-title="Delete" id="sa-warning" > <i class="fa fa-close text-danger"></i> </a>
                                                    
                                                    
                                </td>
							
							</tr>';

					}

					
					
				}else{
					$holder = '
						<td><center><h4>User Doesnt Exist</h4></center></td>
						<td></td>
						<td><center><h4>User Doesnt Exist</h4></center></td>
						<td></td>
						<td><center><h4>User Doesnt Exist</h4></center></td>
						<td></td>
						<td><center><h4>User Doesnt Exist</h4></center></td>
					';	
				}
			
			echo $holder;


	}else if($Operation == "show_user_info"){
		

		$id = mysqli_real_escape_string($conn, $_POST["user_id"]);
		$squery = "
		SELECT * FROM users WHERE User_id = $id ";

		$result = mysqli_query($conn, $squery);

		while($row = mysqli_fetch_array($result)){
		 $data["id"] = $row['User_id'];
		 $data["Name"] = $row['Name'];
		 $data["Position"] = $row['Position'];
		 $data["Gender"] = $row['Gender'];
		 $data["Date_of_birth"] = $row['Date_of_birth'];
		 $data["Gcash"] = $row['Gcash'];
		 $data["Street"] = $row['Street'];
		 $data["Brgy"] = $row['Brgy'];
		 $data["City"] = $row['City'];
		

		   
		}

	
		
		echo json_encode( $data);
		

	}else if($Operation == "edit_emp"){

			$id = mysqli_real_escape_string($conn, $_POST["user_id"]);
			$Name = mysqli_real_escape_string($conn, $_POST['name']);
			$Gender  = mysqli_real_escape_string($conn, $_POST['gender']);
			$Position = mysqli_real_escape_string($conn, $_POST['position']);
			$Date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
			$Gcash = mysqli_real_escape_string($conn, $_POST['gcash']);
			$Street = mysqli_real_escape_string($conn, $_POST['street']);
			$Brgy = mysqli_real_escape_string($conn, $_POST['barangay']);
			$City = mysqli_real_escape_string($conn, $_POST['city']);


		$squery = "
		UPDATE users SET Name= '$Name',Gender= '$Gender',Position= '$Position',Date_of_birth= '$Date_of_birth',Gcash= '$Gcash',Street='$Street',Brgy='$Brgy',City='$City' WHERE User_id = $id ";

		$result = mysqli_query($conn, $squery);

		if($result){
				echo "edit_sucess";
				 
			}else{
				echo "edit_failed";
				
				} 

	}else if($Operation == "show_emp_details"){

		$holder = '';

			$id = mysqli_real_escape_string($conn, $_POST["user_id"]);
		$squery = "
		SELECT * FROM users WHERE User_id = $id ";

		$result = mysqli_query($conn, $squery);

		while($row = mysqli_fetch_array($result)){

		 $holder .= '
							<tr>
                                                <td>Employee ID</td>
                                                <td>
                                                   '.$row['User_id'].'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                   '.$row['Name'].'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Role</td>
                                                <td >
                                                  '.$row['Position'].'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>
                                                    '.$row['Gender'].'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Birthday </td>
                                                <td>
                                                  '.$row['Date_of_birth'].'
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Address </td>
                                                <td>
                                                  '.$row['Street'].$row['Brgy'].$row['City'].'
                                                </td>
                                            </tr>
                                            <tr>
                                                 <td>Gcash Account</td>
                                                <td>
                                                  '.$row['Gcash'].'
                                                </td>
                                            </tr>';

		   
		}

	
		
		echo $holder;

	}else if($Operation == "delete_emp"){

		$id = mysqli_real_escape_string($conn, $_POST["user_id"]);
		$squery = "
		DELETE FROM users WHERE User_id = $id ";

		$result = mysqli_query($conn, $squery);

		if($result){
				echo "Delete_sucess";
				 
			}else{
				echo "Delete_failed";
			}

	}





}




 ?>
