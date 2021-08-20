<?php
include('function.php');

$sql = mysqli_query($con,'SELECT *FROM t');


?>
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
  <h1 class="text-center">List User</h1>
 <div class="col-md-offset-1 col-md-10"  id="table_div" style="">
                <table class="table table-bordered" cellpadding="5" cellspacing="5" >
					<thead>
					<tr>
						<th width="20" class="text-center table-title">Sl.No</th>
						<th width="350" class="text-center table-title">Name</th>
						<th width="80" class="text-center table-title">Action</th>              
					</tr>
					</thead>
					<tbody class="scrollable" id="table_data" >
                    <?php
                    while($row = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['n'];?></td>
                        <td><a href="insertform.php?key=<?php echo md5($row['id']);?>" id="<?php echo ($row['id']);?>">Edit</a></td>
                        </tr>
                        <?php
                    }
                    ?>
					</tbody>
					
                </table>
			</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>