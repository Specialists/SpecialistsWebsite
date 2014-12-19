<?php


class Emailer extends Model {
	
	public static function email($to, $subject, $message){

		require ROOT . "/application/phpmailer/PHPMailerAutoload.php";
		
		$mail = new PHPMailer;
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = '';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = '';               // SMTP username
		$mail->Password = '';                         // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		
		$mail->From = '';
		$mail->FromName = '';
		$mail->addAddress($to);                 			  // Add a recipient
		
		
		$mail->isHTML(false);                                  // Set email format to HTML
		
		$mail->Subject = $subject . " - The Specialists";
		$mail->Body    = $message;
		
		if(!$mail->send()) {
		    return false;
		} else {
		    return false;
		}

	}
}