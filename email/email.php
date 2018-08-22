<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>
		Email
	</title>

</head>
<body>


<div class="container card" style="width:400px">
<form action="email.php" method="POST" enctype="multipart/form-data" class ="form-horizontol">
<div class="form-group">
<input  class="form-control" type="email" name="TO" placeholder="To" required />
<input type="email" class="form-control" name="from" placeholder="From" required/>
<input type="password" class="form-control" name="senpass" placeholder="password" required/>
<input type="text"  class="form-control"  name="sub" placeholder="subject" required/>
<!--<input type="text"  class="form-control" name="provider" placeholder="mail service provider" required/>--> 
<input type="text"  class="form-control" name="cc" placeholder="cc" />
<input type="text"  class="form-control" name="bcc" placeholder="bcc" />
<input type="message"  class="form-control" name="message" placeholder="write your message" required/>
<input id="file" type="file"  class="form-control" name="attached"/>
<button type="submit" name="send" required>submit</button>
</div>
	
</form>
</div>
<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
if(isset($_POST['send'])){
require '/home/ashwini/Downloads/PHPMailer/src/Exception.php';
require '/home/ashwini/Downloads/PHPMailer/src/PHPMailer.php';
require '/home/ashwini/Downloads/PHPMailer/src/SMTP.php';

// $email and $message are the data that is being
// posted to this page from our html contact form

$email = $_POST['from'] ;
$message = $_POST['message'];

// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
// require("lib/PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();

// set mailer to use SMTP
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
// $mail->Host = $_POST['provider'];  // specify main and backup server
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Port = '465';
// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_PHPMailer@bradm.inmotiontesting.com
// pass: password
$mail->Username = $_POST['from'];  // SMTP username
$mail->Password = $_POST['senpass']; // SMTP password





if(isset($_FILES['attached'])){
      $errors= array();
      $file_name = $_FILES['attached']['name'];

      $file_size = $_FILES['attached']['size'];
      $file_tmp = $_FILES['attached']['tmp_name'];

      $file_type = $_FILES['attached']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['attached']['name'])));
      // move_uploaded_file($file_tmp,"uploads/".$file_name);

      $mail->addAttachment($file_name);


      // $expensions= array("jpeg","jpg","png","pdf");
      
      // if(in_array($file_ext,$expensions)=== false){
      //    $errors[]="extension not allowed, please choose a PDF, JPEG or PNG file.";
      // }
      
      // if($file_size > 2097152) {
      //    $errors[]='File size must be excately 2 MB';
      // }
      
      // if(empty($errors)==true) {
      //     //The folder where you would like your file to be saved
      //    echo "Success";
      // }else{
      //    print_r($errors);
      // }
   }
// $mail->addAttachment("uploads/".$file_name);
$mail->SetFrom($email);
$mail->AddAddress($_POST['TO']);

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = $_POST['sub'];
$mail->AddBCC($_POST['bcc']);
$mail->AddCC($_POST['cc']);

$mail->Body    = $message;
$mail->AltBody = $message;
// $mail->SMTPDebug = 2;
if(!$mail->Send())
{
   echo "Message could not be sent. 

";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
}
?>

</body>
</html>
