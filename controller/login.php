

 
<?php
$cURLConnection = curl_init('http://localhost/diamond/api/user/login');
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);
$apiResponse = json_decode($apiResponse,TRUE);


    if(isset($apiResponse) && isset($apiResponse['token'])){

        setcookie('token', $apiResponse['token'], time()+24*60*60, "/");
     
        if($apiResponse['usertype']== 'admin'){
            header('Location: ../admin');
            exit;
        }else if ($apiResponse['usertype'] == 'member'){
            header('Location: ../exercise');
            exit;
        }else{
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
    }else
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit;
?>