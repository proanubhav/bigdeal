<?php

extract($_POST);

$showerror = true;
$error = array();
$displayError = array();
	
			if($name=='')
			$error['name_error']='Please enter your Name';
		
			if($email=='')
			$error['email_error']='Please enter your Email';
			if (!preg_match('/([\w\-]+\@[\w\-]+\.[\w\-]+)/', $email)) 
				$error['email_error']='Invalid Email';
				
			if($contact=='')
				$error['contact_error']='Please Enter your Contact Number';
			
			elseif(strlen($contact)!=10)
				$error['contact_error']='Please Enter 10 Digit Contact Number';
				
			if($error == null){
			
			$showerror=false;
				
			$content =		
				"Hello "."Admin".": \n<br>".
				"Name :" .$name." \n<br>".
				"E-Mail :" .$email." \n<br>".
				"Contact Number :" .$contact." \n<br>".
				"Message :" .$message." \n<br>".

				"Above Person Contacted You,\n<br>".
				$subject = "Contact Form";
				$sent_from = $email;
				$sent_to= "proanubhav@gmail.com";

					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'From:'.'<'.$email.'>' . "\r\n";
					$headers .= 'Reply-To:'.'<ya.yellowapricots@gmail.com>' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
	        	 mail($sent_to,$subject,$content,$headers);	
			}


			$displayError['display_errors']=$error;
			$displayError['error']=$showerror;
			$myJSON = json_encode($displayError);

			echo $myJSON;	

?>
