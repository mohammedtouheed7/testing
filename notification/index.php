<!DOCTYPE html>
<html>
<head>
 <title>Notification using PHP Ajax Bootstrap</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<br><br>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="" class="navbar-brand">Notification</a>

				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
					<ul class="dropdown-menu"></ul>
					</li>
				</ul>
			</div>
		</nav>
		<br>
		<form method="post" id="comment_form">
		<div class="form-group">
			<label>Enter Subject</label>
			<input type="text" name="subject" id="subject" class="form-control">
		</div>
		<div class="form-group">
			<label>Enter Comment</label>
			<textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
		</div>
  		</form>
	</div>
<script>
	$(document).ready(function(e){
		function load_unseen_notification(view = ''){
			$.ajax({
				url : "fetch_details.php",
				type: "post",
				data :{view:view},
				dataType:"json",
				success:function(data){
					$('.dropdown-menu').html(data.notification);
					if(data.unseen_notification > 0){
						$('.count').html(data.unseen_notification);
					}
				}
			});
		}
		load_unseen_notification();
		$(document).on('click','#post',function(e){
			e.preventDefault();
			var form_data = $('#comment_form').serialize();
			//alert(form_data);
			$.ajax({
				url:"save_details.php",
				type:"post",
				data : form_data,
				success:function(data){
					console.log(data);
					$("#comment_form")[0].reset();
					load_unseen_notification();
				}
			});
		});

		//load new notification

		$(document).on('click','.dropdown-toggle',function(e){
			$('.count').html('');
			load_unseen_notification('yes');

		});
		setInterval(() => {
			load_unseen_notification();
		}, 5000);
	});
</script>
</body>
</html>
