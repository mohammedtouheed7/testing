<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
  
  <div class="wrapper">
      <!-- Status message -->
<div class="statusMsg"></div>

<!-- File upload form -->
<div class="col-lg-12">
    <form id="fupForm" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"/>
        </div>
        <div class="form-group">
            <label for="file">Files</label>
            <input type="file" class="form-control" id="file" name="files[]" multiple />
        </div>
        <input type="submit" name="submit" class="btn btn-success submitBtn" value="SUBMIT"/>
    </form>
</div>

</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script>
 $(document).ready(function(){
    $("#fupForm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:"mutiple_attachment.php",
            type:"post",
            data:new FormData(this),
            datatype:'json',
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function(){
                $(".submitBtn").attr("disabled","disabled");
                $("#fupForm").css("opacity",".5");
            },
            success:function(response){
                $('.statusMsg').html('');
                //console.log(response);
                response = JSON.parse(response);
                var msg = response.message;
                if(response.status !=0){
                    document.getElementById("fupForm").reset();
                    $('.statusMsg').html('<p class="alert alert-success">'+msg+'</p>');
                }else{
                    $('.statusMsg').html('<p class="alert alert-danger">'+msg+'</p>');
                }
                $("#fupForm").css("opacity","");
                $(".submitBtn").removeAttr("disabled");
                
            }
        });
    });

 // File type validation
 var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    $("#file").change(function() {
        for(i=0;i<this.files.length;i++){
            var file = this.files[i];
            var fileType = file.type;
			
            if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
                alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
                $("#file").val('');
                return false;
            }
        }
    });
});
 </script>
  </body>
</html>