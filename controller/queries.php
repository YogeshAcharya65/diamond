<?php 
    

if(isset($_POST['sendQuery'])){
    
    
    $cURLConnection = curl_init('http://localhost/diamond/api/queries');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    // echo $apiResponse;
    // var_dump ($_POST);
   
   header ('Location: ../contact');
};
?>