<?php
$uploadDir = 'uploads/';
$allowTypes = array('jpg','png','pdf','doc','jpeg','docx');
$response = array(
    'status' => 0,
    'message' => "Form Submission Failed.Try Again!"
);

$errMsg = '';
$valid = 1;
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['files'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $filesArr = $_FILES['files'];

    if(empty($name)){
        $valid = 0;
        $errMsg .= 'Please Enter Name';
    }
    
    if(empty($email)){
        $valid = 0;
        $errMsg.= 'Please Enter Email';
    }
    if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
        $valid = 0;
        $errMsg .= 'Please Enter Valid Emaid';
    }

    if($valid ==1){
        $uploadStatus = 1;
        $filenames = array_filter($filesArr['name']);

        //Upload File
        $uploadedFile = '';
        if(!empty($filenames)){
            foreach($filesArr['name'] as $key => $value ){
                //File Upload in Directory
                $file_name = basename($filesArr['name'][$key]);
                $target_file_path = $uploadDir . $file_name;

                //Check File Extension
                $fileType = pathinfo($target_file_path,PATHINFO_EXTENSION);
                if(in_array($fileType,$allowTypes)){
                    if(move_uploaded_file($filesArr['tmp_name'][$key],$target_file_path)){
                        $uploadedFile .= $file_name.',';
                    }else{
                        $uploadStatus = 0;
                        $response['message'] = 'Sorry, Uploading File Failed.Try Again!'; 
                    }

                }else{
                    $uploadStatus = 0;
                    $response['message'] = 'Sorry, Check Your File Format.Try Again!'; 
                    
                }
            }
        }

        if($uploadStatus == 1){
            $uploadedFileStr = trim($uploadedFile,',');
            $con = mysqli_connect('localhost','root','','bookconsignment');

            $query = mysqli_query($con,"INSERT INTO `multiple_images`(`name`, `email`, `file_names`) VALUES ('$name','$email','$uploadedFileStr')");
            if($query){
                $response['status'] = 1;
                $response['message'] = 'Successfully Data Submitted'; 
            }
        }else{
            $response['message'] = 'Please Fill All Fields'.$errMsg; 

        }

    }
}
echo json_encode($response);

?>