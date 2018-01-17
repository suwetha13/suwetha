<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="HzucZCQKtE";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
		 
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {
           	   
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
          echo "<a href=http://localhost/tollgate/fr7.php> HOME</a>";
           
		   } 

date_default_timezone_set('Etc/UTC');
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "learncprogramming123@gmail.com";
$mail->Password = "Gayathri@158";
$mail->setFrom('suwethaarumugam98@gmail.com', 'tollpayment');
$mail->addReplyTo('suwethaarumugam98@gmail.com', 'tollpayment');
$mail->addAddress($email, 'John Doe');
$mail->Subject = 'TOLL PAYMENT';
$bdy = "<h3>Thank You. Your order status is ". $status .".</h3><h4>Your Transaction ID for this transaction is ".$txnid.".</h4><h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
$mail->msgHTML($bdy);
$mail->AltBody = 'This is a plain-text message body';
if (!$mail->send()) {
    echo "error";
} else {
    echo "success";
//	header('Location: ../../contact.php');
	exit;
}
function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}

		   
?>	