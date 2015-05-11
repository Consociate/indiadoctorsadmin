<?php




//send mail


    $to      = $email;
$subject = 'Welcome to Indiadoctors.org. Account Activation';
$message = '
<html>
<head>
  <title>Indiadoctors.org Account Activation</title>
</head>
<body>
  <p>Greetings From Indiadoctors.org!</p>
  <p>Your account has been created for indiadoctors.org. Kindly click on the following link for account activation:  
    <a href="http://indiadoctors.org/indiadoctorsadmin/accountstatus.php?regid='.time().'&i='.$username.'">Activate Account</a></p>
</body>
</html>
';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Indiadoctors.org <contactus@indiadoctors.org>' . "\r\n";

@mail($to, $subject, $message, $headers);
  

?>