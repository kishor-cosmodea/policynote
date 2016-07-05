<?php
	
	define('GUSER', 'admin@cosmodea.com'); // GMail username
	define('GPWD', 'blabla12'); // GMail password

	$useremail=$_REQUEST['val'];
	$redirect=$_REQUEST['location'];

	if($useremail=="") {
    if($redirect=="") {
      header('Location:index.php');
    } else {
      header('Location:'.$redirect);
     }
  } else {
		// echo "<script type='text/javascript'>alert('em');</script>";
		require("assets/vendor/PHPMailer_5.2.0/class.phpmailer.php");
		
		function smtpmailer($to, $from, $user_email, $subject, $body) { 
			global $error;
			$mail = new PHPMailer();  // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->IsHTML(true);
			$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true;  // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465; 
			$mail->Username = GUSER;  
			$mail->Password = GPWD;           
			$mail->SetFrom($from, $user_email);
			$mail->Subject = $subject;
			$mail->Body = $body;
			$mail->AddAddress($to);
			if(!$mail->Send()) {
				$error = 'Mail error: '.$mail->ErrorInfo; 
				return false;
			} else {
				$error = 'Message sent!';
				return true;
			}
		}
		
			$to = 'admin@cosmodea.com';
			$subject = 'Policy Note : [Subscribe Newsletter]';
			$sender=$useremail;
			$user_email=$useremail;
	
			$message = '<strong>From : </strong>' . $user_email . '<br/> <strong>User Email : </strong>' . $user_email . '<br/>';
	
			smtpmailer( $to, $sender, $user_email , $subject , $message);
			echo "Thak you";
			//header('Location:index.php');
	}

?>
