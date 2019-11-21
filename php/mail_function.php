<?php	
	function sendOTP($email,$otp) {
         require('PHPMailer/class.phpmailer.php');
		require('PHPMailer/class.smtp.php');
	
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 1;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";
		$mail->Username = "aniket.sinu@gmail.com";
		$mail->Password = "sinu@2001";
		$mail->Host     = "aniket.sinu@gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("aniket.sinu@gmail.com", "Aniket");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}
?>