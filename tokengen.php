<? 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/oauth2/token/');     
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

$payload = Array(
    'grant_type' => 'client_credentials',
    'client_id' => 'JnTYw5xiAg0CYxFREQfUg0pjXAE4R7UJ3eoDF0M9',
    'client_secret' => '4rvo1NVk6DsdhKSCsiOyMw0U3T7jn8ZLe0RWhOM4zn8gaObKYORjAZ3Y1KmJaavQqTnYqLbHwwPwgKlwBs6lx0nJKluhXesZTuHrcu6Bjt2TNnWsS2HxCEkGEN3Rzwwc'
  );

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
echo'<pre>';
print_r($response);
?>