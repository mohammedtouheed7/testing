 
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
      <h1 class="text-center">Insert Multiple Data</h1>
      <div class="text-right">
      <a href="javascript:void(0)" class="add-more btn btn-success ">Add More</a>
      </div>
      <br>
    <form id="myform">
    <div class="main-form">
      <?php for($i=0;$i<5;$i++){?>
      <input type="text" name="n[]" class="a form-control" />
<?php
      }
      ?>
      </div>
      <div class="new-forms"></div>
      <br>
      <div class="text-center">
      <input type="submit" name="save" id="save"  class="text-center btn-block btn-success" value="Save">
      </div>
      </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
   
$(document).ready(function(){
    $(document).on('click','.remove-btn',function(){
        $(this).closest('.main-form').remove();
});
    $('.add-more').on('click',function(){
        //alert("Perfect");
        $('.new-forms').append('<div class="main-form"><input type="text" name="n[]" class="a form-control" required />\
      <button name="remove" class="remove-btn text-center btn btn-danger" value="">Remove</button></div>');
    });

    $('#save').click(function(e){
       e.preventDefault();
       var form_data = new FormData(document.getElementById('myform'));
        $.ajax({
          url:'save-multiple.php',
          type:'post',
          contentType: false,
					cache: false,
					processData:false,
          data:form_data,
          success:function(data){
            if(data != 0 ){
              console.log(data);
            }
            console.log('Submitted');
          }
        })
    });
});
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>