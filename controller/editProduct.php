
<?php 

    
if(isset($_POST['updateProduct'])){
    
    
    $cURLConnection = curl_init('http://localhost/diamond/api/update/product');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    
   header ('Location: ../admin/editProduct.php');  
    
   
};

?> 