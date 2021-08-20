<?php
$con = mysqli_connect("localhost",'root','','bookconsignment');
// if(!$con){
//     echo "Connection Failed";
// }else{
//     echo "Connection Success";
// }

                $customer = $_POST['customer'];

                if($_POST['air']!=''){
                
                    $shipping_mode = $_POST['air'];

                }else if($_POST['train']!=''){
                   
                    $shipping_mode = $_POST['train'];

                }else if($_POST['roadsurface']!=''){
                   
                    $shipping_mode = $_POST['roadsurface'];

                }else if($_POST['roadexpress']!=''){
                   
                    $shipping_mode = $_POST['roadexpress'];

                }else{
                   
                    $shipping_mode = $_POST['localdelivery'];

                }

                if($_POST['tobilled']!=''){
                
                    $pay_mode = $_POST['tobilled'];

                }else if($_POST['topay']!=''){
                   
                    $pay_mode = $_POST['topay'];

                }else{
                    $pay_mode = $_POST['cod'];
                }
                

            //     // $booked_date = date('d-m-Y');
            //     // $status = 0;
            //     // $booked_query = mysqli_query($con,"INSERT INTO `consignment`(`user_id`, `booking_id`, `customer_details`, `shipping_mode`, `pay_mode`, `consignor_name`, `consignor_contact`, `consignor_email`, `consignor_city`, `consignor_address`, `consignor_town`, `no_of_package`, `kgs`, `consignee_name`, `consignee_contact`, `consignee_email`, `consignee_city`, `consignee_address`, `consignee_town`, `document_count`, `document_data`, `attchment`,`booking_date`,`status`) 
            //     // VALUES ($user_id,'$booking_id',' $customer','$shipping_mode','$pay_mode','$name','$consignor_contact','$consignor_email','$consignor_city','$consignor_address','$consignor_town','$consignor_package','$consignor_kg','$consignee_name','$consignee_contact','$consignee_email','$consignee_city','$consignee_address','$consignee_town','$consignee_docname','$consignee_docdata','$name','$booked_date','$status' ) ");
                
            //     // $last_consignment_id = mysqli_insert_id($con);
            //     // // var_dump($booked_query);
                
            //     //    $update_attachment = mysqli_query($con,"UPDATE consigment SET attchment = '$name' where id = '$last_consignment_id'");
            //     //    $select_booking_id = mysqli_query($con,"SELECT *from consignment where id = '$last_consignment_id' ");
            //     //    $row = mysqli_fetch_assoc($select_booking_id);

            //     //   $booking_id = $row['booking_id'];

            //       if($booking_id){
                    
                   
            //            echo $booking_id;

            //    }else{
            //        echo "0";
            //    }
                // echo "User Registered Successfully";
                
            
     
    
   
?>