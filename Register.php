<?php 
 //Constants for our API
 //this is applicable only when you are using Cheap SMS Bazaar


/*define('SMSUSER','tejas.gawali4@gmail.com');
 define('PASSWORD','Tttttt@12');
 define('SENDERID','DEMOOO');*/
$User="tejas.gawali4@gmail.com";
$Pass="Tttttt@12";
$ID="DEMOOO";
$otp="123456";
$phone="7776953899";
 
 //This function will send the otp 


		 //This is the sms text that will be sent via sms 
	 $sms_content = "Welcome to Simplified Coding: Your verification code is $otp";
	 
	 //Encoding the text in url format
	 $sms_text = urlencode($sms_content);


	 //This is the Actual API URL concatnated with required values 

	 $api_url = 'http://login.cheapsmsbazaar.com/vendorsms/pushsms.aspx?user='.$User.'&password='.$Pass.'&msisdn=91'.$phone.'&sid='.$ID.'&msg='.$sms_text.'&fl=0&gwid=2';
/*
http://login.cheapsmsbazaar.com/vendorsms/pushsms.aspx?user='.SMSUSER.'&password='.PASSWORD.'&msisdn=91'.$phone.'&sid='.SENDERID.'&msg='.$sms_text.'&fl=0&gwid=2
*/
	 echo "Before API response";
	 
	 //Envoking the API url and getting the response 
	 $response = file_get_contents( $api_url);

	 echo "after API response";
	 
	 //Returning the response 
	 return $response;
 	




/*Code for the bulk sms gateway API


error_reporting (E_ALL ^ E_NOTICE);
	$username='tejasgawali';
	$password =8888876264;
	$number=$phone;
	$sender="TESTID";
	$msg="Welcome To HRMS your verification code is $otp";
	$message=$msg;
		 if($_POST['submitted']=='true')
		{ 
		$url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($number)."&sender=".urlencode($sender)."&message=".urlencode($message)."&type=".urlencode('3'); 
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		echo $curl_scraped_page = curl_exec($ch);

		curl_close($ch); 

		return $ch;
		}
*/


 ?>