<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
<div class="container" style="width:700px">
<h1>Create PDF</h1>
<table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>mobile</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Touheed</td>
                <td>89234509889</td>
            </tr>
            <tr>
                <td scope="row">2</td>
                <td>Towseef</td>
                <td>89234509893</td>
            </tr>
            <tr>
                <td scope="row">3</td>
                <td>Taiyaba</td>
                <td>8923450999</td>
            </tr>
           
        </tbody>
    </table>
    <form action="" method="post">
        <input type="submit" value="Create PDF" name="create_pdf" >
    </form>

</div>
   
</body>
</html>
<?php

if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf_min/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h1>Create PDF</h1>
<table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>mobile</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Touheed</td>
                <td>89234509889</td>
            </tr>
            <tr>
                <td scope="row">2</td>
                <td>Towseef</td>
                <td>89234509893</td>
            </tr>
            <tr>
                <td scope="row">3</td>
                <td>Taiyaba</td>
                <td>8923450999</td>
            </tr>
           
        </tbody>
    </table>  
      '; 
      ob_end_clean();  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample_new.pdf', 'I');  
 }  
?>