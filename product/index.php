<?php 
    if(!isset($_GET['id']) && $_GET['id'] < 1){
        header('Location: ../shop');
        exit;
    }
?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <link rel="stylesheet" href="product.css">
    <style>
      
       body{
            background-color: #eff0f5;
        }
    </style>
      

    <title>product</title>
  </head>
  <body>
    <?php 
          include '../includes/header.php';
        ?>
     
    
        <?php
         $product = json_decode(
            file_get_contents('http://localhost/diamond/api/product/only/'.$_GET['id']),
            TRUE
          );

         echo '
            <div class="link">
              <a href="../shop" class= "link text-dark ">Shop</a><span>/</span><span class="write">'.$product['name'].'</span>
            </div>


            <div class="container bg-white py-4">
              <div class="row">
                <div class="col-md-4 image">
                  <img src="http://localhost/diamond/api/storage/'.$product['image'].'" style="width: 300px; height: 300px; object-fit: cover;">
                </div>

                <div class="col-md-5">
                   <h2 class="title">'.$product['name'].'</h2>

                   <p class="brand">Brand: '.$product['brand'].'</p>
                   
                   <p class="price">Rs. '.$product['price'].'</p>

                   <button type="button" class="btn btn-primary w-25">Buy Now</button>
                    <button type="button" class="btn btn-success w-25">Add to Cart</button>

                    <div class="mt-4">
                      <div class="row"> 
                        <div class="col-md-3 des"> 
                          Description
                        </div>

                        <div class="col-md-6">
                          <spam><pre>'.$product['description'].'</pre> </spam>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-3 p-3" style="background-color: #fafafa;">
                <!-- Delivery option -->
                <div class="row mb-3">
                    <div class="col-md-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314    6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>
                    <div class="col-md-9">Delivery Option <br> <strong>Nepal, Kathmandu</strong></div>
                    
                </div>
                
                <!-- Home Delivery -->
                <div class="row my-3">
                    <div class="col-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                    </svg>
                    </div>
                    <div class="col-md-9">Home Delivery<br><strong> 2-3 days</strong></div>
                </div>
                
                <!-- Cash on delivery-->
                <div class="row my-3">
                    <div class="col-md-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                        <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
                        <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
                        <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                        </svg>
                    </div>
                    <div class="col-md-9"><strong> Cash On Delivery available</strong></div>
                </div>
                <hr>
                <!--Return-->
                <div class="row my-3">
                    <div class="col-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </div>
                    <div class="col-md-9"><strong>No Return Policy</strong></div>
                </div>
                <!--Warrenty -->
                <div class="row my-3">
                    <div class="col-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shield-fill-x" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zM6.854 6.146a.5.5 0 1 0-.708.708L7.293 8 6.146 9.146a.5.5 0 1 0 .708.708L8 8.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 8l1.147-1.146a.5.5 0 0 0-.708-.708L8 7.293 6.854 6.146z"/>
                    </svg>
                    </div>
                    <div class="col-md-9"><strong>Warrenty Not available</strong></div>
                </div>
                <hr>
                <div class="row">
                    <span class="ml-3">Sold By:<br><strong>Scitec Nutrition </strong> </span>
                </div>
            </div>
        </div>
    </div>
 



              </div>
            </div>
         ';
          ?>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>