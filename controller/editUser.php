  
<?php 

    
if(isset($_POST['updateUser'])){
    
    
    $cURLConnection = curl_init('http://localhost/diamond/api/update/user');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    
   header ('Location: ../admin/viewUser.php');  
    
   
};

?> 