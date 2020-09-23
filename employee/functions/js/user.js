$( document ).ready(function(){

$('#sas-success').click(function(){

				

			var first_name 		= $('#firstName').val();
			var last_name 		= $('#lastName').val();
			var gender     		= $('#gender option:selected').text();
			var position		= $('#position option:selected').text();
			var date_of_birth	= $('#date_ofb').val();
			var gcash			= $('#gcash').val();
			var email			= $('#email').val();
			var username		= $('#username').val();
			var password  		= $('#password').val();
			var confirm_pass    = $('#conpassword').val();
			var street          = $('#street').val();
			var brgy            = $('#brgy').val();
			var city           = $('#city').val();
			var operation = "insert";

			
			$.ajax({
				type:'post',
				data:{first_name:first_name,last_name:last_name,gender:gender,position:position,date_of_birth:date_of_birth,
					gcash:gcash,email:email,username:username,password:password,confirm_pass:confirm_pass,street:street,
					brgy:brgy,city:city,operation:operation
				},
				url:"../admin/functions/php/user.php",
				success: function(resulte){
						var res = resulte;
						if(res == 'add_sucess'){
							swal("Successfull", "Your Data Added Successfully", "success");
							$('.rr').each(function(i, item) {

						    var $item = $(item);

						    if( $item.hasClass('rr') || $item.parents('.rr') )
						    {
						        $item.addClass('hidden_r');
						    }

							});

						}else if(res == 'add_failed'){
							swal("Oops", "Adding Failed", "error");
								
						}else if(res == "User Already Exist"){
							swal("Oops", "User Already Exist", "error");
						}else if(res == "Missing Field"){
							swal("Oops", "Please Fillup All The Required Fields", "error");
							

							$('.hidden_r').each(function(i, item) {

						    var $item = $(item);

						    if( $item.hasClass('hidden_r') || $item.parents('.hidden_r') )
						    {
						        $item.removeClass('hidden_r');
						    }

							});


						}
						else if( res == 'connection_error'){
							swal("Oops", "Connection Error", "error");
								
						}else {
							alert(res);
						}

				}

			});
		
	
	});


//Searching for emp

  $('#status_select').on('change', function() {
  var stats = $('#status_select option:selected').text();
  var search = $('#search_text').val();
  load_data(search,stats);
  });
 
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    var stats = $('#status_select option:selected').text();
    if(search != '')
    {
      load_data(search,stats);
    }
    else
    {
      load_data(search,stats);      
    }
  });
 

});

function load_data(query,stats)
  {
  	var operation = 'show_user';

  	

  	if(query == 'Active' || query == 'Inactive'){
  	 operation = "filter_show_user";
  	}else{ operation = "show_user";}
  	
    $.ajax({
      url:"../admin/functions/php/user.php",
      method:"post",
      data:{stats:stats,query:query,operation:operation},
      success:function(data)
      {
      
        $('#data_bod').html(data);
        action_events();
       


      }
    });
  }


//Loading Employee list to table
 function load_employee_list(){
 	var search = $('#search_text').val();
    var stats = $('#status_select option:selected').text();
 	load_data(search,stats);  
 }


//declaring event_functions for button
 function action_events(){

 	var edit_btns = document.getElementsByClassName('Edit_emp');
 	for(var i = 0; i < edit_btns.length; i++){
 	var edit_e = edit_btns[i];
	edit_e.addEventListener('click',Show_emp_edit);
 	}

	
	var delete_btns = document.getElementsByClassName('dels');
	for(var i = 0; i < delete_btns.length; i++){
 	var delete_e = delete_btns[i];
	delete_e.addEventListener('click',prompt_delete);
 	}

 	var view_btns = document.getElementsByClassName('View_emp');
	for(var i = 0; i < view_btns.length; i++){
 	var view_e = view_btns[i];
	view_e.addEventListener('click',view_emp_details);
 	}


}


//Editing Employee Details

function Show_emp_edit(event){

			var edit_btn = event.target;
			var user_id = edit_btn.parentElement.parentElement.parentElement.firstElementChild.innerHTML;
			var operation = "show_user_info";
			 


			$.ajax({
				url:"../admin/functions/php/user.php",
				type:"POST",
				data:{operation:operation,user_id:user_id},
				success: function(resulte){
							
							var mydata = JSON.parse(resulte);

			       			var id        = mydata.id;
			                var name      = mydata.Name;
		   					var position  = mydata.Position;
						    var gender    = mydata.Gender;
						    var birthdate = mydata.Date_of_birth;
						    var gcash     = mydata.Gcash;
						    var Street    = mydata.Street;
						    var Barangay  = mydata.Brgy; 
						    var City      = mydata.City;     


						    if(gender == "Male"){
        							 $('#gender_img').attr("src","assets/images/users/male.png");
        							$('#gender').val("assets/images/users/male.png");

        					}else if(gender == "Female"){ 
        						$('#gender_img').attr("src","assets/images/users/female.png");
        						$('#gender').val("assets/images/users/female.png");
        						}
			          

			   	 $('#Emp_id').val(id);         
			   	 $('#FullName').val(name);    
			   	 $('#position option:selected').text(position);    
			    // $('#gender option:selected').text("");  
			   	 $('#Birthdate').val(birthdate);    
			   	 $('#GcashA').val(gcash);    
			   	 $('#Street').val(Street);   
			   	 $('#Barangay').val(Barangay); 
			   	 $('#City').val(City);  

			   	 

			   	 console.log(resulte);

				}

			});
			
			

}



$('#Edit_submit').click(function(){

						 
			var user_id			= $('#Emp_id').val();
			var name 		    = $('#FullName').val();
			var gender     		= $('#gender option:selected').text();
			var position		= $('#position option:selected').text();
			var date_of_birth	= $('#Birthdate').val();
			var gcash			= $('#GcashA').val();
			var street    		= $('#Street').val();  
			var barangay  		= $('#Barangay').val(); 
			var city     		= $('#City').val();  
			
			var operation = "edit_emp";

			
			$.ajax({
				type:'post',
				data:{user_id:user_id,name:name,gender:gender,position:position,date_of_birth:date_of_birth,
					gcash:gcash,street:street,barangay:barangay,city:city,operation:operation
				},
				url:"../admin/functions/php/user.php",
				success: function(resulte){
						var res = resulte;
						if(res == 'edit_sucess'){
							swal("Successfull", "Edited Data Submited Successfully", "success");
							$('#edit_empl').modal('hide');
						}else if(res == 'edit_failed'){
							swal("Oops", "Editing Failed", "error");
						}
						else if( res == 'connection_error'){
							swal("Oops", "Connection Error", "error");
						}else{console.log(resulte);}

				}

			});
		
	
});

//Viewing Employee Details

function view_emp_details(event){



			var view_btn = event.target;
			var user_id = view_btn.parentElement.parentElement.parentElement.firstElementChild.innerHTML;
			var operation = "show_emp_details";
			

			$.ajax({
				url:"../admin/functions/php/user.php",
				type:"POST",
				data:{operation:operation,user_id:user_id},
				success: function(data){
							
				$('#emp_details').html(data);	
				var txt_holdr = $("#emp_details td").eq(7).text().trim();
				console.log(txt_holdr);
				if(txt_holdr == "Male"){
					 $('#gender_img2').attr("src","assets/images/users/male.png");
				}else if(txt_holdr == "Female"){
					 $('#gender_img2').attr("src","assets/images/users/female.png");
				}	
					
				}

			});
			 

}



//deleting emp
function prompt_delete(event){
	var delete_btn = event.target;
	var parent_del = delete_btn.parentElement.parentElement.parentElement;
	var user_id = parent_del.firstElementChild.innerHTML;
	var operation = "delete_emp";

	
	  swal({   
            title: "Are you sure?",   
            text: "You will not be able to Undelete this User!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false 
        }, function(){   
           

            $.ajax({
				url:"../admin/functions/php/user.php",
				type:"POST",
				data:{operation:operation,user_id:user_id},
				success: function(data){
							
				 if(data == "Delete_sucess"){
				 	 swal("Deleted!", "User has been deleted.", "success"); 
           			 parent_del.remove();
				 }else{
				 	 swal("Oops", "Deleting Failed", "error");
				 }
				
				
				}

			});

        });
}



