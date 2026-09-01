<?php
session_start();
$reg=$_SESSION['regnum'];
$TID=$_GET['payment_id'];;
//echo '<br/>';
//echo '<pre>';
//print_r($_REQUEST);
$host='localhost';
$uname='wttdiipanel';
$pass='wttdiipanel@service121';
$dbname='wttdiipanel';

$conn=mysqli_connect($host,$uname,$pass,$dbname);

if(!$conn){
	
echo mysqli_connect_error;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/v2/payments/'.$TID);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

curl_setopt($ch, CURLOPT_HTTPHEADER,array('Authorization:Bearer 79O6a0Y05eb7hS4JFBucY4qyDGrqv-U3gUwQ4Nq5YQI.k-XUvqjhraPFv_iOCZBwUNbaU8DGWBm7IDbJuyEFmxM'));

$response = curl_exec($ch);
curl_close($ch); 
$response=json_decode($response);
echo'<pre>';
print_r($response);
$payid=$response->id;
$name=$response->name;
$cemail=$response->email;
$amount=$response->amount;
$examname=$response->title;
$charge=$response->fees;
$tax=$response->total_taxes;
$pth=$response->instrument_type;
$cdate=$response->created_at;
$udate=$response->updated_at;
$status=$response->status;
$fail=$response->failure->message;
//echo $fail;


$query="insert into `paymentdetails` (regno,examname,paymentid,amount,charge,tax,paymentthrough,createdate,updatedate,status,failstatus	) values('$reg','$examname','$payid','$amount','$charge','$tax','$pth','$cdate','$udate','$status','$fail')";
	$result=mysqli_query($conn,$query);
	echo mysqli_error($conn);
//echo $query;
	if($result){
		
		if($status=='1')
		{
		$queryupdt="UPDATE application SET paymentsts='success',paymentid='$payid',paymentdate='$udate' WHERE regno='$reg'";
	$resultupdt=mysqli_query($conn,$queryupdt);
	 //echo mysqli_error($conn);
	if($resultupdt)
		
	   {
		header('location:../../form2.php');
	   }
	}else{
		header('location:../../form2.php');
		}
		
           }
?>