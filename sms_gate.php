<?php
error_reporting (E_ALL ^ E_NOTICE);
$username="tejasgawali";
$password ="8888876264";
$number=$_POST['number'];
 $sender="INVITE";
 $message=$_POST['message'];
 if($_POST['submitted']=='true')
{ 
$url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($number)."&sender=".urlencode($sender)."&message=".urlencode($message)."&type=".urlencode('3');

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

echo $curl_scraped_page = curl_exec($ch);

curl_close($ch); 

}

?>
<html>
<head>
</head>
<body>
<form action="" method="post" name="sms_gate" >

<br />
Number : <br />
<input type="text" name="number" value="7776953899" />
<br /><br />
Message:<br/>
<textarea name="message" ></textarea>
<input type="hidden" name="submitted" value="Welcome to Simplified Coding: Your verification code is 123456" />
<br />
<input type="submit" name="submit" value="send" />


</form>
</body>
</html>

