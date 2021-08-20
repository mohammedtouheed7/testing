<?php
include('function.php');
//Date
date_default_timezone_set('Asia/Kolkata');
$c_date = date('d-m-Y H:i:s A');
$date = new DateTime();
$c_time=$date->format( 'H:i:s A' );
$c_date_string =strtotime($c_date);


// $date1="30-12-1899 9:25:52 AM";
// $format = 'd-m-Y H:i:s A';
// $date = DateTime::createFromFormat($format, $date1);
// $newtime = $date->format('H:i:s A') . "\n";
var_dump($c_date);
// var_dump($c_time);
// var_dump($c_date_string);

//GRN No Create
$id=1451+1;
$billing_code = "CHN";
$grn_no=$billing_code.sprintf("%05d",$id);

//echo $grn_no;

$conn = mysqli_connect('localhost','root','','graciousexpress');
$query_code=mysqli_query($conn,"select * from client where client_id=989");
$r_code=mysqli_fetch_array($query_code);
$query_max=mysqli_query($conn,"select * from transaction_log where client_id=989");
                        			$r_max=mysqli_fetch_array($query_max);

                        			$id=$r_max['grn_id']+1;
                              // var_dump($id);
                              // exit();
                        			$billing_code = $r_code['billing_code'];
                        			$grn_no=$billing_code.sprintf("%05d",$id);
                              echo $grn_no;

$con = mysqli_connect('localhost','root','','bcssd');
$booked = 0;
$i = 1;
$sql = "SELECT * FROM t2";
$result = mysqli_query($con,$sql);
$booked += mysqli_num_rows($result);
while($br = mysqli_fetch_assoc($result)){?>
  
  <?php
 
 echo "<br>";
  // echo $i;
  echo $br['id'];
 
  echo getClient($con,$br['t_id'])."_".$br['t_id'];
  echo "<br>";
  ?>
  <?php
  $i++;
}

// echo $booked;

$Y=date('Y');
$Month = array("Jan","Feb", "Mar","Apr","May", "Jun","Jul","Aug","Sep","Oct","Nov","Dec");
for($i=1; $i<12; $i++){
$date = sprintf('%02d',$i)."-".$Y;
$full_date = "01-".$date;
// echo $full_date;
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<style>
.wrapper {
  position: relative;
  width: 400px;
  height: 200px;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
img {
  position: absolute;
  left: 0;
  top: 0;
}

.signature-pad {
  position: absolute;
  left: 0;
  top: 0;
  width:400px;
  height:200px;
}.wrapper {
  position: relative;
  width: 400px;
  height: 200px;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
img {
  position: absolute;
  left: 0;
  top: 0;
}

.signature-pad {
  position: absolute;
  left: 0;
  top: 0;
  width:400px;
  height:200px;
}
.form-data-saving{
  position: fixed;
   width: 100%;
   height: 100%;
   top: 0px;
   left: 0px;
   background: rgba(255, 255, 255, 0.92);
   padding: 20% 45%;
   z-index: 1610;
}
.form-data-saving{ background: rgba(0, 0, 0, 0.23) !important; z-index: 1610 !important; }

</style>

</head>
<?php include('activemenu.php');?>
<body>
    Date:
    <input type="date">

    <div class="input-group date date-picker table-height" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
											<input class="form-control table-height final" type="text" name="grn_date" value="<?php echo $c_date; ?>"  id="grn_date" required> <span class="input-group-addon table-height"><i class="fa fa-calendar"></i></span>
										</div>

                                        <h1>
  Draw over image<?php echo $booked;?>
</h1>
<div class="wrapper">
  <img src="signature-bg.JPG" width=400 height=200 style="border:1px solid black"/>
  <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
</div>
<div>
  <button id="save" >Save</button>
  <button id="clear">Clear</button>
</div>

<div id="original">
<p>Preview:</p>
<img src="" alt="" class="picture" id="picture">
</div>


<h4>date picker</h4>

<label for="month">Month: </label>
<input type="text" id="month" name="month" class="monthPicker" />

</body>
</html>
<script src="javascripts/jquery.timepicker.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
alert('hi');
$(".monthPicker").datepicker({ 
    dateFormat: 'mm-yy',
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,

    onClose: function(dateText, inst) {  
        var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val(); 
        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val(); 
        $(this).val($.datepicker.formatDate('yy-mm', new Date(year, month, 1)));
    }
});

$(".monthPicker").focus(function () {
    $(".ui-datepicker-calendar").hide();
    $("#ui-datepicker-div").position({
        my: "center top",
        at: "center bottom",
        of: $(this)
    });    
});

});

</script>
<script>
// $(document).ready(function(){
//   $('#save').on('click',function(e){
//    $('<div><h1>hello You Clicked</h1></div>').appendTo('#original');
//   })
// })

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pure.js/2.82/pure.min.js" integrity="sha512-/RIZ51AD4eGntQn29lQsEt9ZeRH3gF8ClpZJkTrpRWArfws+MYnA/gD+qNGa1N1PpvsD2oamfS23+hUZdVRXuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
  backgroundColor: 'rgba(255, 255, 255, 0)',
  penColor: 'rgb(0, 0, 0)'
});
var saveButton = document.getElementById('save');
var cancelButton = document.getElementById('clear');

  saveButton.addEventListener('click', function (event) {
    var data = signaturePad.toDataURL('image/png');
    
   // alert(data);
    $('#original #picture').attr("src",data);

// Send data to server instead...
 //window.open(data);
});

cancelButton.addEventListener('click', function (event) {
  signaturePad.clear();
});

</script>	
					