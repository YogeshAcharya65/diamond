<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="shop.css">

    <title>Shop</title>
  </head>
  <body>
    <?php 
      $PAGENAME = "shop";
      include '../includes/header.php';
    ?>

    <img src="https://www.bravonutrition.pk/wp-content/uploads/2020/02/whey-protein-in-pakistan-at-bravo-nutrition-mobile.png" style="width: 100%; max-height: 550px; object-fit: cover;">
    <!-- search -->
    <div class="container mt-5"> 
      <div class="row">
        <div class="col-md-2">
          
        </div>
        <div class="col-md-8">
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search for product" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-success" type="button">Button</button>
          </div>
        </div>
        </div>
      </div> 
    </div>  

<br>
<hr>
 <!----------------------------------------------Proteins----------------------------------------------> 

    <div class="container font-weight-bold text-center display-4">
      Proteins
    </div>
<br>
    <!-----------------Products---------------------->
    <div class="container">
      <div class="row">

        <?php  $products = json_decode(
            file_get_contents('http://localhost/diamond/api/product/view'),
            TRUE
          ); 
        foreach ($products as $product) {
            echo '
                <div class="col-md-3" data-product-col="'.$product['name'].'" data-price-col="'.$product['price'].'">
              <figure class="card card-product">
                <div class="img-wrap"><img src="http://localhost/diamond/api/storage/'.$product['image'].'"></div>
                <figcaption class="info-wrap">
                    <h4 class="title">'.$product['name'].'</h4>
                    <p class="desc">Brand: <span class="text-primary">'.$product['brand'].'</span></p>
                </figcaption>
                <div class="row bottom-wrap">
                  <div class="col-md-6">
                    <span class="price-new font-weight-bold">Rs. '.$product['price'].'</span> 
                  </div>
                  <div class="col-md-6">
                     <a href="../product/?id='.$product['id'].'" class="btn btn-sm btn-success">Order Now</a> 
                  </div>
                  
                </div>
                 
              </figure>
            </div> 
            ';


          }
        

            ?>

         
 
            
      </div>
    </div>
    
    <hr>



 
   

     <div class="container">
      <div class="row border bg-light">

        <div class="col-md">
         <p class="text"> Verified Seller </p>
         <img class="center" src="image/verified.png">
        </div>

        <div class="col-md">
         <p class="text"> OnTime Delivery </p>
         <img class="center" src="image/delivery.jpg">
        </div>

        <div class="col-md">
         <p class="text"> Excellent Customer Service </p>
         <img class="center" src="image/customer.jpg">
        </div>

      </div>
    </div>

    <br>

    <br>
    <!----------------Products------------------------>
    



      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>