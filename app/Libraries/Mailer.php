<?php
namespace App\Libraries;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Mailer{
	public function send($to,$subject,$msg){
		$mail = new PHPMailer(true);
		try {
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			$mail->isSMTP();
			$mail->Host       = 'smtp.googlemail.com';   
			$mail->SMTPAuth   = true;
            $mail->Username   = 'egooktafanda1097@gmail.com'; // silahkan ganti dengan alamat email Anda
            $mail->Password   = 'Oktober97@'; // silahkan ganti dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            $mail->setFrom('egooktafanda1097@gmail.com', 'POLRES KUANSING'); // silahkan ganti dengan alamat email Anda
            $mail->addAddress($to);
            $mail->addReplyTo('egooktafanda1097@gmail.com', 'POLRES KUANSING'); // silahkan ganti dengan alamat email Anda
            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $msg;

            $mail->send();
            return 'success';
            // return redirect()->to('/kirim_email'); 
        } catch (Exception $e) {
            // session()->setFlashdata('error', "Send Email failed. Error: ".$mail->ErrorInfo);
            // return redirect()->to('/kirim_email');
            return 'error';//, "Send Email failed. Error: ".$mail->ErrorInfo;
        }
    }
}