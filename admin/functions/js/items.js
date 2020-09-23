$( document ).ready(function(){



$('#Item_Id').val(create_UUID());


 

});

function create_UUID(){
    var dt = new Date().getTime();
    var uuid = 'xxxx-xxxx-4xxx-yxxx-xx'.replace(/[xy]/g, function(c) {
        var r = (dt + Math.random()*16)%16 | 0;
        dt = Math.floor(dt/16);
        return (c=='x' ? r :(r&0x3|0x8)).toString(16);
    });
    return uuid;
}

Dropzone.autoDiscover = false;

var ids;






//adding items
$('#sar-success').click(function(){
  
      var id               = $('#Item_Id').val();
     // var id               = "0212";
      var operation 		 = "insert_item";
      var item_name        = $('#Item_name').val();
      var type             = $('#Item_type option:selected').text();
      var quantity         = $('#quantity').val();
      var price            = $('#Price').val();
      var operation      = "insert_item";
      ids = id;


      
      $.ajax({
        type:'post',
        data:{id:id,item_name:item_name,type:type,quantity:quantity,price:price,operation:operation
        },
        url:"../admin/functions/php/items.php",
        success: function(resulte){
            var res = resulte;
            if(res == 'add_sucess'){
              $('#Item_Id').val(create_UUID());
              swal("Successfull", "Your Data Added Successfully", "success");
              myDropzone.processQueue();
                setTimeout(function() {
                $('.dropzone')[0].dropzone.files.forEach(function(file) { 
               file.previewElement.remove(); 
              });

              $('.dropzone').removeClass('dz-started');
              
                }, 2500);

               $('#Item_Id').val("");
               $('#Item_name').val("");
               $('#quantity').val("");
               $('#Price').val("");
            }else if(res == 'add_failed'){
              swal("Oops", "Adding Failed", "error");
            }
            else if( res == 'connection_error'){
              swal("Oops", "Connection Error", "error");
            }

        }

      });
   
});

//add item shortcut_btn

$('#sarw-success').click(function(){


      var id               = $('#Item_Id').val();
     // var id               = "0212";
      var operation      = "insert_item";
      var item_name        = $('#Item_name').val();
      var type             = $('#Item_type option:selected').text();
      var quantity         = $('#quantity').val();
      var price            = $('#Price').val();
      var operation      = "insert_item";
      ids = id;


      
      $.ajax({
        type:'post',
        data:{id:id,item_name:item_name,type:type,quantity:quantity,price:price,operation:operation
        },
        url:"../admin/functions/php/items.php",
        success: function(resulte){
            var res = resulte;
            if(res == 'add_sucess'){
              $('#Item_Id').val(create_UUID());
              swal("Successfull", "Your Data Added Successfully", "success");
              myDropzone2.processQueue();
                setTimeout(function() {
                $('.drop2')[0].dropzone.files.forEach(function(file) { 
               file.previewElement.remove(); 
              });

              $('.drop2').removeClass('dz-started');
              
                }, 500);
               $('#Item_Id').val("");
               $('#Item_name').val("");
               $('#quantity').val("");
               $('#Price').val("");


            }else if(res == 'add_failed'){
              swal("Oops", "Adding Failed", "error");
            }
            else if( res == 'connection_error'){
              swal("Oops", "Connection Error", "error");
            }

            load_item_list();

        }

      });
   
});



//Searching for item

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

function load_data(query,stats)
  {
   
    var operation = 'show_items';

    

   
    
    $.ajax({
      url:"../admin/functions/php/items.php",
      method:"post",
      data:{stats:stats,query:query,operation:operation},
      success:function(data)
      {
      
        $('#data_bod').html(data);
        action_events();
       


      }
    });
  }


//Loading Item list to table
 function load_item_list(){
    var search = $('#search_text').val();
    var stats = $('#status_select option:selected').text();
    load_data(search,stats);  
 }


//eItem events
 function action_events(){

  var edit_btns = document.getElementsByClassName('Edit_items');
  for(var i = 0; i < edit_btns.length; i++){
  var edit_e = edit_btns[i];
  edit_e.addEventListener('click',Show_item_edit);
  }

  
  var delete_btns = document.getElementsByClassName('dels_item');
  for(var i = 0; i < delete_btns.length; i++){
  var delete_e = delete_btns[i];
  delete_e.addEventListener('click',prompt_delete);
  }

  var view_btns = document.getElementsByClassName('View_items');
  for(var i = 0; i < view_btns.length; i++){
  var view_e = view_btns[i];
  view_e.addEventListener('click',view_item_details);
  }


}


//Item Details

function Show_item_edit(event){

      var edit_btn = event.target;
      var item_id = edit_btn.parentElement.parentElement.parentElement.firstElementChild.innerHTML.trim();
      var operation = "show_item_info";
       
      console.log(item_id);

      $.ajax({
        url:"../admin/functions/php/items.php",
        type:"POST",
        data:{operation:operation,item_id:item_id},
        success: function(resulte){
              
              var mydata = JSON.parse(resulte);

                var id          = mydata.id;
                var name        = mydata.Name;
                var type        = mydata.Type;
                var quantity    = mydata.Quant;
                var price       = mydata.Price;
                var images       = mydata.Path;  


           $('#eitem_id').val(id);         
           $('#eitem_name').val(name);    
           $('#eitem_type option:selected').text(type);    
           $('#equantity').val(quantity);    
           $('#eitem_price').val(price);    
           $('#Item_img').attr("src",images);    

           

           console.log(resulte);

        }

      });
      
      

}


$('#submit_edit').click(function(){


      var id        =  $('#eitem_id').val();         
      var name      =  $('#eitem_name').val();    
      var type      =  $('#eitem_type option:selected').text();    
      var quant     =  $('#equantity').val();    
      var price    =  $('#eitem_price').val();    
      var img_path = "none";
      var operation = "edit_items";
      ids = id;

      if (!myDropzone.files || !myDropzone.files.length) {
          img_path = "none";
      } else {
          img_path = "has_img";
      }

     
    

      
      $.ajax({
        type:'post',
        data:{id:id,name:name,type:type,quant:quant,price:price,img_path:img_path,operation:operation
        },
        url:"../admin/functions/php/items.php",
        success: function(resulte){
          var res = resulte;
          
           if(res =='edit_failed'){
            swal("Oops", "Editing Failed", "error");
          }else if(res == 'edit_sucess'){
            swal("Successfull", "Your Data Edited Successfully", "success");
            load_item_list();
          }else if(res == 'edit_sucess_with_img'){
              swal("Successfull", "Your Data Edited Successfully", "success");
              myDropzone.processQueue();
              load_item_list();
                setTimeout(function() {
                $('.dropzone')[0].dropzone.files.forEach(function(file) { 
               file.previewElement.remove(); 
              });

              $('.dropzone').removeClass('dz-started');
             
                }, 500);
                   $('#eitem_id').val("");         
                   $('#eitem_name').val("");    
                   $('#equantity').val("0");    
                   $('#eitem_price').val("0");    

          }
          
        }

      });
    
  
});

//view item
function view_item_details(event){



      var view_btn = event.target;
      var item_id = view_btn.parentElement.parentElement.parentElement.firstElementChild.innerHTML.trim();
      var operation = "show_item_details";

      $.ajax({
        url:"../admin/functions/php/items.php",
        type:"POST",
        data:{operation:operation,item_id:item_id},
        success: function(data){
              
      $('#Item_details').html(data); 
      var img_path = $('#hid_img').val();
      console.log(img_path);
      $('#item_img').attr("src",img_path);    
          
        }

      });
       

}


//deleting items
function prompt_delete(event){
  var delete_btn = event.target;
  var parent_del = delete_btn.parentElement.parentElement.parentElement;
  var item_id = parent_del.firstElementChild.innerHTML.trim();
  var operation = "delete_items";

  
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
        url:"../admin/functions/php/items.php",
        type:"POST",
        data:{operation:operation,item_id:item_id},
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

//add item shortcut
$('#add_item_shortcut').click(function(){

   $('#Item_Id').val(create_UUID());

 




});