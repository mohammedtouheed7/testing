<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		.image_preview{
			width: 145px;
			height: 73px;
		}
		.remove-image {
			margin-left: 90px;
		}
		</style>
  </head>
  <body>
  <div class="row">
  <!-- <div class="col-md-5">
						<label class="control-label col-sm-12" style="text-align: left;font-weight: 600;">Attachments: (Image & Documents)</label>
							<div class="file-container">
								<div class="col-md-12 file-group" id="file-no1" data-file-no="1">
									<div class="col-md-6">
										<input type="file" id="file_receipt1" name="file_receipt[]" class="filestyle" data-id="1" data-buttonBefore="true" data-buttonName="btn-primary">
									</div>
									
									<div class="col-md-2">
										<img src="images/no_image.png" class="image_preview" id="image_preview1">
									</div>
									<div class="col-md-2">
									<button data-id="1" class="btn btn-danger remove-image">Remove</button>
								</div>
								</div>
							</div>
							<div class="col-lg-8">
								<button id="add_more" type="button" class="btn btn-primary">Add More</button>
							</div>
					</div> -->


		  <div class="col-md-3 master_left">
			<div class="widget-container fluid-height clearfix">
			  <div class="heading"> <i class="fa fa-plus"></i>Consignment</div>
			  
			  <div class="widget-content padded">
				<form class="form-horizontal" id="consignment_form">
				
					<input type="hidden" id="form_name" name="form_name" value="add_consignment">
					<input type="hidden" id="edit_id" name="edit_id" value="">
					
					<div id="response" class="alert alert-danger" style="display:none;">
						<div class="message" style="text-align:center"></div>
					</div>
					
				  <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Name<span style="color:red;">*</span> :</label>
								<input name="n" id="n" class="form-control" required autocomplete="off"/>
								<span class="consignment-error error"></span>	
							</div>
							<div id="display" style="display:none">
									<div class="form-group">
										<label class="control-label col-sm-4">ID:<span style="color:red;">*</span> :</label>
										<div class="col-lg-8">
											<label class="control-label" id="id"> </label>
										
										</div>
										</div>
										<div class="form-group">
										<label class="control-label col-sm-4">Username:<span style="color:red;">*</span> :</label>
										<div class="col-lg-8">
											<label class="control-label" id="name"> </label>
										
										</div>
										
									</div>
									</div>
							<!-- <div class="form-group">
								<label class="control-label">Description:</label>
								<input type="text" name="description" id="description" class="form-control">
							</div> -->
							
						</div>
				 </div><br/>
				   <div class="row">
					<div class="col-md-12 form-action">
						<button class="btn btn-primary" type="button" id="save">Submit</button>
						<button class="btn btn-default-outline  btn-reset" type="button">Cancel</button>
					</div>
				  </div>
				</form>
			  </div>
			</div>
		  </div>

          <div class=" col-md-9 master_right">
					<div class="widget-container fluid-height clearfix">
						<div class="heading"> <i class="fa fa-table" ></i> List of Cosignment </div>
					<div class="widget-content padded clearfix new_dept">
						<table class="table table-bordered table-striped" id="dataTable1">
							<thead>
								<th class="table-title" style="width:10%">S.No</th>
								<th class="table-title" style="width:10%">Name</th>
								<th class="table-title" style="width:10%">Action</th>              
							</thead>
							<tbody>
							<?php 
                                $con = mysqli_connect('localhost','root','','bcssd');
								$query = "select * from t";
								$result = mysqli_query($con,$query);
									$i=1;
								while($row = mysqli_fetch_array($result))
								{
									
									
							?>
								<tr>
									<td class="text-center"><?php echo $i; ?></td>
									<td><?php echo $row['n']; ?></td>									
									<td class="actions center-content ">
										<div class="action-buttons">
											<a href="" title="Edit" class="table-actions btn-edit" id="<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i>Edit</a>
											<a title="Delete" href="#myModal" class="table-actions btn-trash" data-toggle="modal" id="<?php echo $row['id'] ?>"><i class="fa fa-trash-o"></i>Delete</a>
											
										</div>
									</td>
								</tr>
							<?php 
									$i++;
								}	
							?>
	
							</tbody>
						</table>
				
					</div>
					</div>
				</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script>
   
$(document).ready(function(){
    $(document).on('click','#save',function(e){
        e.preventDefault();
        var data = $('#consignment_form').serialize();
       // alert(data);

       $.ajax({
            type:"post",
            url:'http://localhost/dummy/crud/save.php',
            data:data,
			success:function(result){
							console.log(result);
							if(result == 1){
                                location.reload();
								$(".form-data-saving").hide();
								$("#alert-status").text("");
								$("#alert-message").text("Saved Successfully please wait until page refresh");
								$("#alert-container").addClass("alert-success").slideDown(800).fadeTo(1000, 500).slideUp(800, function(){
								$("#alert-container").hide();
								$("#alert-container").removeClass("alert-success");
								//location.reload();
								});
							}
							else
							{
								$(".form-data-saving").hide();
								$("#alert-status").text("Alert !!! ");
								$("#alert-message").text("Data Saving Failed");
								$("#alert-container").addClass("alert-danger").slideDown(800).fadeTo(1000, 500).slideUp(800, function(){
								$("#alert-container").hide();
								$("#alert-container").removeClass("alert-danger");
								});
							}
						},
						error:function(jqxhr)
						{
							console.log(jqxhr.responseText);
						}
       });

});


$(document).on('click','.btn-edit',function(e){
    e.preventDefault();
    var tbl_id = $(this).attr('id');

     // alert(tbl_id);
     $.ajax({
        cache: false,
        type:"GET",
        url:'http://localhost/dummy/crud/fetch.php',
        data: {cmd:"get_user",tbl_id: tbl_id},
        dataType:'json',
        success:function(result){
            //console.log(result);
                        $("#form_name").val("edit_consignment");
						$("#edit_id").val(result['id']);
						$("#n").val(result['n']);
						
        },
        error: function(jqxhr) {
						alert(jqxhr.responseText);
					}
     });
});


$(document).on('click','.btn-trash',function(e){
	var del_id = $(this).attr('id');
	$('.btn-confirm-delete').attr("id",del_id);
	//alert(del_id);
});
	$(document).on('click','.btn-confirm-delete',function(e){
		$.post(
			'http://localhost/dummy/crud/save.php',
			{form_name:'del_consignment',
			tbl_id:$(this).attr("id")},
			function(data,status){
				console.log(data);
				if(data==1){
					location.reload();
							$(".form-data-saving").hide();
							$("#alert-status").text("");
							$("#alert-message").text("Consignment Deleted successfully...");
							$("#alert-container").addClass("alert-success").slideDown(800).fadeTo(1000, 500).slideUp(800, function(){
							$("#alert-container").hide();
							$("#alert-container").removeClass("alert-success");
							
							});
				}
			});
	});


	$(document).on('keyup','#n',function(e){
		var term = $(this).val();
		//alert(term);
		console.log('http://localhost/dummy/crud/autocomplete-list.php?autocomplete=get_username&term='+term);
		$('#n').autocomplete({
			source:'http://localhost/dummy/crud/autocomplete-list.php?autocomplete=get_username&term='+term,
			minLength:0,
			select: function(event, ui){
				$('#n').val(ui.item.value);
				$('#n').val(ui.item.id);

				//alert("hi");

				$.ajax({
					url:'http://localhost/dummy/crud/fetch.php',
					type:"GET",
					dataType:'JSON',
					data:{cmd:'get_user',tbl_id:ui.item.id},
					async:false,
					success:function(data){
						console.log(data);
						$("#display").show();
						$('#id').html(data['id']);
						$('#name').html(data['n']);

					}
				});
			}
		});
	});

	// function readURL(id,input) {
	// 		if (input.files && input.files[0]) {
	// 			var reader = new FileReader();
				
	// 			reader.onload = function (e) {
	// 				$('#image_preview'+id+'').attr('src', e.target.result);
	// 			}
				
	// 			reader.readAsDataURL(input.files[0]);
	// 		}
	// 	}
	// 	$(document).on('change','.filestyle',function(){
	// 		var id = $(this).attr("data-id");
	// 		readURL(id,this);
	// 	});
    
});
</script>
		<div class="modal fade popup_close" id="myModal">
		    <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
			    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
			    <h4 class="modal-title" style="color:#fff">
			      Alert!
			    </h4>
			  </div>
			    
				<div class="modal-body">
				    <h5 text-align="center">
				     Do you want to Delete This Record ?
				    </h5>
					<div class="modal-footer">
					    <button class="btn btn-primary btn-confirm-delete" data-dismiss="modal" type="button" id="">Yes</button>
					    <button class="btn btn-default-outline" data-dismiss="modal" type="button" id="">No</button>
					</div>
				</div>
			</div>
		    </div>
                </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>