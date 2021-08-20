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
    <form id="fupForm" enctype="multipart/form-data" method="post">

        <div class="input_field">
        <table id="table_field" class="table table-bordered">
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Images</th>
        <th>Action</th>
        </tr>
        <tr>
        <td><input type="text" class="form-control" id="name" name="name[]" placeholder="Enter name" required /></td>
        <td><input type="email" class="form-control" id="email" name="email[]" placeholder="Enter email"required /></td>
        <td><input type="file" class="form-control" id="file" name="files[]" multiple required /></td>
        <td><input type="button" class="form-control btn btn-info" id="add" name="add" value="Add" /></td>
        </tr>
        </table>
        <input type="submit" name="save" class="btn btn-success" id="save" value="Save">
        </div>
      
    </form>

    <?php
    $con = mysqli_connect('localhost','root','','bookconsignment');
    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $image = $_FILES['files']['name'];

       // var_dump($image);
        // exit();
       
       
            for($k=0;$k<count($_POST['name']);$k++){
        
            $image = $_FILES['files']['name'][$k];
            $imagePath = 'uploads/'.$image;
            $tmp_name = $_FILES['files']['tmp_name'][$k];

            // move_uploaded_file($tmp_name,$imagePath);
            $insert = "INSERT INTO `multiple_images`(`file_names`,`name`, `email`) VALUES ('".$image."','".$name[$k]."','".$email[$k]."')";
            $result = mysqli_query($con,$insert);
        //    var_dump($insert);
        //    exit();
            if($result){
                echo "Data Inserted Successfully";
            }else{
                echo "Data Not Inserted";
            }
        }
    
}
    ?>
</div>

</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script>
 $(document).ready(function(){
    var html = ' <tr>\
        <td><input type="text" class="form-control" id="name" name="name[]" placeholder="Enter name" required /></td>\
        <td><input type="email" class="form-control" id="email" name="email[]" placeholder="Enter email" required/></td>\
        <td><input type="file" class="form-control" id="file" name="files[]" multiple required /></td>\
        <td><input type="button" class="form-control btn btn-danger" id="remove" name="remove" value="Remove" /></td>\
        </tr>';
    var max = 3;
    var x = 1 ;
    $("#add").click(function(){
        if(x<max){
            $('#table_field').append(html);
            x++;
        }
    });
    
    $("#table_field").on('click','#remove',function(){
        $(this).closest('tr').remove();
        x--;
    }); 

});
 </script>
  </body>
</html>