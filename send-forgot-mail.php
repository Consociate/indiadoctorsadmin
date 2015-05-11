<?php




//send mail

$email = $data['email'];
$password =$data['password'];
    $to      = $email;
$subject = 'Indiadoctors.org. Reset Password';
$message = '
<html>
<head>
  <title>Indiadoctors.org Reset Password</title>
</head>
<body>
  <p>Your new password details are as follows: New password for login is: '.$password.'</p>
  <p>Please <a href="http://indiadoctors.org/indiadoctorsadmin">Login</a> into your account using the password mentioned above and we suggest you to change it to a password which
  you can easily remember.  
	</p>
	<p> Thanks <br />
	From Indiadoctors.org Team</p>
</body>
</html>
';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Indiadoctors.org <contactus@indiadoctors.org>' . "\r\n";

@mail($to, $subject, $message, $headers);
  

?>