<?php 
    

if(isset($_POST['deleteProduct'])){
    
    
    $cURLConnection = curl_init('http://localhost/diamond/api/delete/product');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    // echo $apiResponse;
    // var_dump ($_POST);
   
   header ('Location: ../admin/editProduct.php');
};
?>