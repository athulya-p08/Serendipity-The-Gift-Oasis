<?php
session_start();
 header("Access-Control-Allow-Origin: *");
header('Content-Type:application/json');



$host='localhost';
$uname='wttdiipanel';//root
$pass='' ;//db password 
$dbname='dbname'; //db name

$conn=mysqli_connect($host,$uname,$pass,$dbname);

if(!$conn){
	
echo mysqli_connect_error;
}

	if(isset($_POST['payment'])){ //btn name -> btn is cliecked or not
$reg=$_POST['reg']; //unique number of payment (random gen number)
$rname=$_POST['name']; // username
$email=$_POST['email']; //user email
$contact=$_POST['contact']; //contact no
$examname=$_POST['examname']; //product name productbuy
$fees=$_POST['fees'];  // amount checkout
$date=$_POST['date']; // payemnt date

	}
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/v2/payment_requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Authorization:bearer Y9jKYIaMit7wVLRqw9evyou-WhjZwg4KHtuwiL052uw.QTCHpENV2qsBT6EIq-rhtJs1_xk91wjeS25cl5w-j6s'));

$payload = Array(
  'purpose' =>'Exam', // proctby
  'amount' => '10', //checkout amt
  'buyer_name' => 'Roshan Jha', //username
  'email' => 'jharoshan704@gmail.com'	, //useremqail
  'phone' => '7718025902', //usernumber
  'redirect_url' => 'http://application.waytotechnology.co.in/payment/redirect.php',
  'send_email' => 'True',
  'webhook' => 'http://application.waytotechnology.co.in/payment/webhook.php',
  'allow_repeated_payments' => 'False'
);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$response=json_decode($response);
//echo '<pre>';
print_r($response);
//echo $response->longurl;
$_SESSION['TID']=$response->id;
header('location:'.$response->longurl);
?>