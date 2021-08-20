<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
  </head>
  <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>Address</td>  
                                    <td>Gender</td>  
                                    <td>Designation</td>  
                                    <td>Age</td>  
                               </tr>  
                          </thead>  
                                <tr>
                                <td>ZZZ</td>
                                <td>ZZZ</td>
                                <td>ZZZ</td>
                                <td>ZZZ</td>
                                <td>ZZZ</td>
                                </tr>
                                <tr>
                                <td>Touheed</td>
                                <td>Touheed</td>
                                <td>Touheed</td>
                                <td>Touheed</td>
                                <td>Touheed</td>
                                </tr>
                                <tr>
                                <td>Touheed</td>
                                <td>Touheed</td>
                                <td>Touheed</td>
                                <td>Touheed</td>
                                <td>Touheed</td>
                                </tr>
                     </table>  
                </div>  
           </div>  
      </body>  
<script>
   $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });   
  
</script>

    
  </body>
</html>