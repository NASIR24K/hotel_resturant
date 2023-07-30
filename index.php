
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ajax form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
	$(document).ready(function(){
		///////////////////////// data add ////////////////////////////////
			$("#btn_add").click(function() {
				 var _Name = $("#cus_name").val();
				 var _Address = $("#cus_address").val();
				 var _Phone = $("#cus_phone").val();
				 var  _password = $("#user_password").val();

				$.post("select.php", {  "name" : $("#cus_name").val(), "address" : _Address, "Phone": _Phone , "Password":  _password})
				   .done(function(data) {
				      $('#btn_show').click();
				  });

			});
			///////////////////////// data add END  ////////////////////////////////
		
		/////////////////////////// Data Edit ////////////////////////////////
		$("#btn_edit").click(function() {
			     var ID = $("#customer_id").val();
				  var _Name = $("#cus_name").val();
			      var _Address = $("#cus_address").val();
				  var _Phone = $("#cus_phone").val();
				  var  _password = $("#user_password").val();

				$.post("edit.php", {"ID": ID, "name" : _Name, "address" : _Address, "Phone": _Phone , "Password":  _password})
				   .done(function(data) {
				      if(data == 1)
					   {
						   alert('data edit successfully');
					   }
					   else
						{
							alert('data edit Unsuccessfully');
						}
					  $('#btn_show').click();
				  });

			});
			///////////////////////// data Edit END  ////////////////////////////////
     			/////////////////////////// Data Delete ////////////////////////////////
		$("#btn_delete").click(function() {
			     var ID = $("#customer_id").val();
				  var _Name = $("#cus_name").val();
			      var _Address = $("#cus_address").val();
				  var _Phone = $("#cus_phone").val();
				  var  _password = $("#user_password").val();

				$.post("delete.php", {"ID": ID})
				   .done(function(data) {
				       if(data == 1)
					   {
						   alert('data delete successfully');
					   }
					   else
						{
							alert('data delete Unsuccessfully');
						}
					$('#btn_show').click();
				  });

			});
			///////////////////////// data Dellete END  ////////////////////////////////
			///////////////////////// Data Show ////////////////////////////////
	$("#btn_show").click(function() {
				
				$.post("show.php", {"name" : 'hh'})
				   .done(function(data) {
					
				     $('#show').html(data);  
				  });
	          

			});
		
	
	});//////////end ready method////////
	function show(rowData){
		
		var str = rowData.split('~');
		
  
		$("#customer_id").val(str[0]);
		$("#cus_name").val(str[1]);
		$("#cus_phone").val(str[2]);
		$("#cus_address").val(str[3]);
		$("#user_password").val(str[4]);

	}
		///////////////////////// data Show END  ////////////////////////////////
	function Clear()
	   {
			$("#customer_id").val('');
			$("#cus_name").val('');
			$("#cus_phone").val('');
			$("#cus_address").val('');
			$("#user_password").val('');
		   
	   }
	
	  
	</script>
	

</head>

<body>
  <div class="container">
     <div class="row col-sm-10 offset-1 justify-content-center">
    <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
          <fieldset class="border">
            <legend class="w-auto">CUSTOMER_INFORMATION</legend>
            <div class="row col-sm-8 offset-2 justify-content-center">   	
                	<div class="form-group row  col-sm-12 ">
						<label for="customer_id" class="col-sm-4 col-form-label">customer_ID</label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="customer_id" id="customer_id" value="" readonly>
						</div>
					</div>
					<div class="form-group row col-sm-12 ">
						<label for="cus_name" class="col-sm-4 col-form-label">Customer Name</label>
						<div class="col-sm-8">
						<input type="text" name="cus_name" class="form-control" id="cus_name" value="">
						</div>
					</div>
					<div class="form-group row col-sm-12 ">
						<label for="cus_address" class="col-sm-4 col-form-label">Customer Address</label>
						<div class="col-sm-8">
						<input type="text" name="cus_address" class="form-control" id="cus_address" value="">
						</div>
					</div>
					<div class="form-group row col-sm-12 ">
						<label for="cus_phone" class="col-sm-4 col-form-label">Customer Phone</label>
						<div class="col-sm-8">
						<input type="text" name="cus_phone" class="form-control" id="cus_phone" value="">
						</div>
					</div>
					<div class="form-group row col-sm-12 ">
						<label for="user_password" class="col-sm-4 col-form-label">Password</label>
						<div class="col-sm-8">
						<input type="text" name="user_password" class="form-control" id="user_password" value="">
						</div>
					</div>
                <div class="row btn-group col-sm-12 justify-content-center" role="group" aria-label="Basic example">
                        <input type="button"  class="btn form-control btn-secondary col-sm-2" name="btn_add" id="btn_add" value="ADD">
                        <input type="button" class="btn form-control btn-secondary col-sm-2" name="btn_edit" id="btn_edit" value="EDIT">
                        <input type="button" class="btn form-control btn-secondary col-sm-2" name="btn_delete" id="btn_delete" value="DELETE">
                        <input type="button" class="btn form-control btn-secondary col-sm-2" name="btn_show" id="btn_show" value="SHOW">
                        <input type="button" class="btn form-control btn-secondary col-sm-4" onClick="Clear()" name="btn_new" id="btn_new" value="NEW">
                       
                      
               </div>
<!--						<div class="row">
							<div class="form-group">
								<div class="col text-center ml-5"><?php print $msg; ?></div>
							</div>
			
									</div>-->
									
	</div>
			<fieldset>
			
			 
    </form>
    <div id="show" class="mt-3"></div>
    </div> 
    </div>
</body>
</html>
index.php
Displaying index.php.