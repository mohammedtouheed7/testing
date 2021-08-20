<?php
    require 'SMPT/PHPMailerAutoload.php';
    function sendAppMail($to_name, $to_mail, $subject, $msg){
    	
    	if($to_mail=="")
    	{
    		$to_name='Gracious Express';
    		$to_mail='admin@graciousexpress.com';
    	}
    	$mail_array = array('mailmeroselin3012@gmail.com','si.aadil@gmail.com');
    	array_push($mail_array,$to_email);
    
    			$mail = new PHPMailer;
    			$mail->isSMTP();     // Set mailer to use SMTP
    			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    			$mail->SMTPAuth = true;    
    			$mail->SMTPSecure = true;                           // Enable SMTP authentication
    			$mail->Username = 'mohammedtouheed77@gmail.com';                 // SMTP username
    			$mail->Password = 'Awesome@321';                           // SMTP password
    			$mail->SMTPSecure = 'TLS';   // Enable TLS encryption, `ssl` also accepted
    			$mail->Port = 587;                                          // TCP port to connect to
    			$mail->From = 'no-reply@graciousexpress.com';
    			$mail->FromName = 'Gracious Express';
    			//$mail->addAddress('si.aadil@gmail.com', 'Aadil');
    			//$mail->addAddress('mailmeroselin3012@gmail.com', 'Roselin');
    			$mail->addAddress($to_mail,$to_name );     // Add a recipient
    
    			$mail->isHTML(true);          
    			$mail->Subject = $subject;
    			$mail->Body    = '<body class="respond" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">    
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff">
    <tr>
    <td align="center">
    	<table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
    		<tr>
    			<td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td> </tr>
    		<tr>
    			<td align="center">
    
    				<table border="0" align="center" width="590" cellpadding="6" cellspacing="6" style="background-color: #fff;border: 10px solid #20409a;" class="container590">
    
    					<tr>
    						<td align="center" height="70" style="height:70px;background-color: #fff;">
    							<a href="" style="display: block; border-style: none !important; border: 0 !important;"><img width="100" border="0" style="display: block; width: 75%;" src="http://localhost/GraciousExpress/web/images/gracious.png" alt="" /></a>
    						</td>
    					</tr>
    <tr>
    			<td align="center" style="color: #343434; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;"
    				class="main-header">
    				<div style="line-height: 35px">
    
    					Welcome to  <span style="color: #5caad2;">Gracious Express</span>
    
    				</div>
    			</td>
    		</tr>
    		   
    		<tr>
    			<td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
    		</tr>
    		<tr>
    			<td align="center">
    				<table border="0" width="40" align="center" cellpadding="0" cellspacing="0" bgcolor="eeeeee">
    					<tr>
    						<td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td>
    					</tr>
    				</table>
    			</td>
    		</tr>
    		<tr>
    			<td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
    		</tr>
    		<tr>
    			<td align="left">
    				<table border="0" width="590" align="center" cellpadding="0" cellspacing="0" class="container590">
    					<tr>
    						<td align="left" style="color: #888888; font-size: 16px; font-family: Work Sans, Calibri, sans-serif; line-height: 24px;">
    							<p style="line-height: 24px; margin-bottom:15px;">
    
    								Dear '.$to_name.',
    
    							</p>'.$msg.'
    							Regards,
    
    						</td>
    						
    					</tr>
    					<tr>
    					<td>
    							<table border="0" width="300" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
    								class="container590">
    
    								<tr>
    									<td align="left" style="color: #888888; font-size: 14px; font-family: Work Sans, Calibri, sans-serif; line-height: 23px;"
    										class="text_color">
    										<div style="color: #333333; font-size: 14px; font-family: Work Sans, Calibri, sans-serif; font-weight: 600; mso-line-height-rule: exactly; line-height: 23px;">
    
    											<img src="http://graciousexpress.com/web/images/favi.png"  /> 
    
    										</div>
    										<p>#8586-88, Arakshan Road, Ramnagar,<br> Paharganj,
    New Delhi - 110055.<br>
    Phone: +91 11 41513422 / 2355 4355<br>
    Email: info@graciousexpress.com</p>
    									</td>
    								</tr>
    
    							</table>
    
    
    							<table border="0" width="200" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
    								class="container590">
    
    								<tr>
    									<td class="hide" height="45" style="font-size: 45px; line-height: 45px;">&nbsp;</td>
    								</tr>
    
    
    
    								<tr>
    									<td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
    								</tr>
    
    								<tr>
    									<td><br><br><br><br><br>
    										<table border="0" align="right" cellpadding="0" cellspacing="0">
    											<tr>
    												<td>
    													<a href="https://www.facebook.com/" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="http://graciousexpress.com/web/images/fb.png" alt=""></a>
    												</td>
    												<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    												<td>
    													<a href="https://twitter.com/" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="http://graciousexpress.com/web/images/twitter.png" alt=""></a>
    												</td>
    												<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    												<td>
    													<a href="https://plus.google.com/" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="http://graciousexpress.com/web/images/googleplus.png" alt=""></a>
    												</td>
    											</tr>
    										</table>
    									</td>
    								</tr>
    
    							</table>
    						</td>
    					</tr>
    				</table>
    			</td>
    		</tr>      
    		
    				</table>
    			</td>
    		</tr>
    
    		<tr>
    			<td height="25" style="font-size: 25px; line-height: 45px;">&nbsp;</td>
    		</tr>
    	</table>
    </td>
    </tr>
    </table>
    </body>';
    			if(!$mail->send()) {
    			echo 'Mailer Error: ' . $mail->ErrorInfo;
    			return 0;
    			} else {
    			return 1;
    
    
    			}
    
    
    }
    
    //echo $mail = sendAppMail('Loganathan','tecnovatersloga@gmail.com', 'test mail', 'Hi <B>User</B>! <br/> This is test mail.');
    
    
    function sendAttachments($to_name, $to_mail, $subject,$file,$msg){
		//function sendAttachments($to_name, $to_mail, $subject,$file,$image,$mail_content,$name){
    	
    
    	/*if(count($to_mail)=="")
    	{
    		$to_name='Gracious Express';
    		$to_mail='admin@graciousexpress.com';
    	}*/
    	//$mail_array = array('mailmeroselin3012@gmail.com','si.aadil@gmail.com');
    	//array_push($mail_array,$to_email);
    
    			// $mail = new PHPMailer;
    			// $mail->isSMTP();     // Set mailer to use SMTP
    			// $mail->Host = 'sg2plcpnl0032.prod.sin2.secureserver.net';  // Specify main and backup SMTP servers
    			// $mail->SMTPAuth = true;    
    			// $mail->SMTPSecure = true;                           // Enable SMTP authentication
    			// $mail->Username = 'no-reply@graciousexpress.com';                 // SMTP username
    			// $mail->Password = 'Admin@123';                           // SMTP password
    			// $mail->SMTPSecure = 'TLS';   // Enable TLS encryption, `ssl` also accepted
    			// $mail->Port = 587;                                          // TCP port to connect to
    			// $mail->From = 'no-reply@graciousexpress.com';
    			// $mail->FromName = 'Gracious Express';
    			// $mail->addAddress('si.aadil@gmail.com', 'Aadil');
    			// $mail->addAddress('mailmeroselin3012@gmail.com', 'Roselin');
				
				$mail = new PHPMailer;
    			$mail->isSMTP();     // Set mailer to use SMTP
    			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    			$mail->SMTPAuth = true;    
    			$mail->SMTPSecure = true;                           // Enable SMTP authentication
    			$mail->Username = 'mohammedtouheed77@gmail.com';                 // SMTP username
    			$mail->Password = 'Awesome@321';                           // SMTP password
    			$mail->SMTPSecure = 'TLS';   // Enable TLS encryption, `ssl` also accepted
    			$mail->Port = 587;                                          // TCP port to connect to
    			$mail->From = 'no-reply@graciousexpress.com';
    			$mail->FromName = 'Gracious Express';
    			// $mail->addAddress('si.aadil@gmail.com', 'Aadil');
    			// $mail->addAddress('mailmeroselin3012@gmail.com', 'Roselin');
    			
    			$mail->addAddress($to_mail,$to_name );     // Add a recipient
    				for($i=0;$i<=count($to_email);$i++){
    					$mail->addAddress($to_mail[$i],$to_name[$i] );
    				}
    			$mail->isHTML(true);        
    
    
    		$mail->addAttachment(trim($file));       
    			if(count($image)>0){
    				foreach($image as $val){
    					$mail->addAttachment(trim($val));
    				}
    			}
    			$mail->Subject = $subject;
    			$mail->Body    = '<body class="respond" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">    
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff">
    <tr>
    <td align="center">
    	<table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
    		<tr>
    			<td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td> </tr>
    		<tr>
    			<td align="center">
    
    				<table border="0" align="center" width="590" cellpadding="6" cellspacing="6" style="background-color: #fff;border: 10px solid #20409a;" class="container590">
    
    					<tr>
    						<td align="center" height="70" style="height:70px;background-color: #fff;">
    							<a href="" style="display: block; border-style: none !important; border: 0 !important;"><img width="100" border="0" style="display: block; width: 75%;" src="http://localhost/GraciousExpress/web/images/gracious.png" alt="" /></a>
    						</td>
    					</tr>
    <tr>
    			<td align="center" style="color: #343434; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;"
    				class="main-header">
    				<div style="line-height: 35px">
    
    					Welcome to  <span style="color: #5caad2;">Gracious Express</span>
    
    				</div>
    			</td>
    		</tr>
    		   
    		<tr>
    			<td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
    		</tr>
    		<tr>
    			<td align="center">
    				<table border="0" width="40" align="center" cellpadding="0" cellspacing="0" bgcolor="eeeeee">
    					<tr>
    						<td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td>
    					</tr>
    				</table>
    			</td>
    		</tr>
    		<tr>
    			<td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
    		</tr>
    		<tr>
    			<td align="left">
    				<table border="0" width="590" align="center" cellpadding="0" cellspacing="0" class="container590">
    					<tr>
    						<td align="left" style="color: #888888; font-size: 16px; font-family: Work Sans, Calibri, sans-serif; line-height: 24px;">
    							<p style="line-height: 24px; margin-bottom:15px;">
    
    								Dear Sir/Madam,
    
    							</p>'.$msg.'
    							Regards,
    
    						</td>
    						
    					</tr>
    					<tr>
    					<td>
    							<table border="0" width="300" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
    								class="container590">
    
    								<tr>
    									<td align="left" style="color: #888888; font-size: 14px; font-family: Work Sans, Calibri, sans-serif; line-height: 23px;"
    										class="text_color">
    										<div style="color: #333333; font-size: 14px; font-family: Work Sans, Calibri, sans-serif; font-weight: 600; mso-line-height-rule: exactly; line-height: 23px;">
    
    											<img src="http://graciousexpress.com/web/images/favi.png"  /> 
    
    										</div>
    										<p>#8586-88, Arakshan Road, Ramnagar,<br> Paharganj,
    New Delhi - 110055.<br>
    Phone: +91 11 41513422 / 2355 4355<br>
    Email: info@graciousexpress.com</p>
    									</td>
    								</tr>
    
    							</table>
    
    
    							<table border="0" width="200" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
    								class="container590">
    
    								<tr>
    									<td class="hide" height="45" style="font-size: 45px; line-height: 45px;">&nbsp;</td>
    								</tr>
    
    
    
    								<tr>
    									<td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
    								</tr>
    
    								<tr>
    									<td><br><br><br><br><br>
    										<table border="0" align="right" cellpadding="0" cellspacing="0">
    											<tr>
    												<td>
    													<a href="https://www.facebook.com/" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="http://graciousexpress.com/web/images/fb.png" alt=""></a>
    												</td>
    												<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    												<td>
    													<a href="https://twitter.com/" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="http://graciousexpress.com/web/images/twitter.png" alt=""></a>
    												</td>
    												<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    												<td>
    													<a href="https://plus.google.com/" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="http://graciousexpress.com/web/images/googleplus.png" alt=""></a>
    												</td>
    											</tr>
    										</table>
    									</td>
    								</tr>
    
    							</table>
    						</td>
    					</tr>
    				</table>
    			</td>
    		</tr>      
    		
    				</table>
    			</td>
    		</tr>
    
    		<tr>
    			<td height="25" style="font-size: 25px; line-height: 45px;">&nbsp;</td>
    		</tr>
    	</table>
    </td>
    </tr>
    </table>
    </body>';
    			if(!$mail->send()) {
    			echo 'Mailer Error: ' . $mail->ErrorInfo;
    			return 0;
    			} else {
    			return 1;
    
    
    			}
    
    
    }
    
    //echo sendAttachments("Roselin","mailmeroselin3012@gmail.com",'test','transaction_pdf/4_2020_37transaction.pdf',array('images/5b6caecab1374lol.png'),'test','tst'); 
    ?>