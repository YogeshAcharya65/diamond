
<?php 
    

if(isset($_POST['deleteQuery'])){
    
    
    $cURLConnection = curl_init('http://localhost/diamond/api/delete/query');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
   
   header ('Location: ../admin/index.php');
};
?>