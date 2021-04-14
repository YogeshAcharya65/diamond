<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Font Awesome -->
   
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9bfff72ef5.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    

    <title>Contact Us</title>
    <style>
      .rmv{
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <?php 
      $PAGENAME ='contact';
      include '../includes/header.php';
    ?>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Do visit our shop at <a href="../shop/" class="alert-link">DiamondGym Product</a>. 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

    <div class="container my-4 py-5">
        <div class="row">
            <div class="col-md-7">
                <h1>Contact us here</h1>
                <form class="row g-2" action="../controller/queries.php" method="POST">
                    <div class="col-6">
                      <label for="inputEmail4" class="form-label">Full Name:</label>
                      <input type="text" class="form-control" id="inputEmail4" name="contactName" required>
                    </div>
                    <div class="col-6">
                      <label for="inputPassword4" class="form-label">Address:</label>
                      <input type="text" class="form-control" id="inputPassword4" name="contactAddress" required>
                    </div>
        
                    <div class="col-6">
                      <label for="inputAddress" class="form-label">Email:</label>
                      <input type="email" class="form-control" id="inputAddress" name="contactEmail" placeholder="Username@gmail.com" required>
                    </div>
                    <div class="col-6">
                      <label for="inputAddress2" class="form-label">Phone no:</label>
                      <input type="text" class="form-control" name="contactPhone" id="inputAddress2" required>
                    </div>
                    <div class="col-12">
                      <label for="exampleFormControlTextarea1" class="form-label">Write any messages</label>
                      <textarea class="form-control" name="contactSubject" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="md-6">
                      <button type="submit" class="btn btn-success" id="sendQuery" name="sendQuery">Submit</button>
                    </div>
                  </form>
            </div>

            <div class="col-md-1">

            </div>

            <div class="col-md-4">
                <h2> Get in touch</h2> 
                <div class="row">
                    <div class="row">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>
                            Phone Number: 01-4339227
                            <br>
                        </p>
                         <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                              <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                            </svg>
                            Mobile Number: 9808993309
                        </p>
              
                    </div>
                    <hr style="width: 250px;">
                    <div class="row">
                       <div class="row">
                        <p>
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                             <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            </svg>
                           Sunday-Friday: 
                          <br>
                           <p>
                            Morning (5:00 AM - 10:30 AM)
                          </p>
                          <p>
                            Evening (3:00 PM - 9:00 PM)
                           </p>
                           <p>
                           Saturday is closed.
                         </p>
                        </p>  
                    </div>
                  </div>

                    <hr style="width: 250px;">
                    <div class="row">
                       <div class="row">
                        <p>
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                            Dhaneswor Mandir, Gongabu
                        </p> 
                     </div>
                    </div>
                    <hr style="width: 250px;">

                </div>
            </div>
        </div>
    </div>

  

    <!--Google map-->
      <div id="map-container-google-2" class="z-depth-1-half map-container" >
        <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0; height: 400px; width: 100%;" allowfullscreen></iframe>
      </div>


      <footer>

          <div class="card bg-success text-center" >
          <div class="social-menu">
          <h2>Follow us on:</h2>
          <a href="https://www.facebook.com/stayfitwithdiamond" class="social"  target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="#" target="_blank" class="social1"><i class="fab fa-twitter-square"></i></a>
          <a href="https://www.instagram.com/officialdiamondgym/" class="social2"><i class="fab fa-instagram-square"></i></a>
          <a href="https://www.youtube.com/channel/UC3rqNySmnM0irQnFIJsd4pg" class="social3"><i class="fab fa-youtube-square"></i></a>

          </div>
          </div>

         
          <div class="row text-center text-md-left mt-5" style="width: 100%;">
            
            <div class="col-md-3 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Diamond Gym</h6>
              <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 140px; height: 3px">
              <p class="mt-2">This is the provider. Diamond Gym is located
              near dhaneswor temple.</p>
            </div>

             <div class="col-md-2 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Classes</h6>
              <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; height: 3px">
              
              <ul class="list-unstyled">
                <a href="../customerHome/gym.html" class="my-2 text-dark rmv"><li>Gym</li></a>
                <a href="../customerHome/crossfit.html" class="my-2 text-dark rmv"><li>CrossFit</li></a>
                <a href="../customerHome/boxing.html" class="my-2 text-dark rmv"><li>Boxing</li></a>
              </ul>
            </div>

             <div class="col-md-2 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Links</h6>
              <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; height: 3px">
                <ul class="list-unstyled text-center">
                  <a href="../customerHome/home.html" class="my-2 text-dark rmv"><li>Home</li></a>
                  <a href="../Blog/blog.html" class="my-2 text-dark rmv"><li>Blog</li></a>
                  <a href="../shop/shop.html" class="my-2 text-dark rmv"><li>Shop</li></a>
                  <a href="contact.html" class="my-2 text-dark rmv"><li>Contact Us</li></a>
                </ul>

            </div>

            <div class="col-md-3 mb-4">
              <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
              <hr class="bg-success mb-4 mt-0 d-inline-block" style="width: 125px; height: 3px">

              <!-- <i class="fas fa-home mr-3 text">Baniyatar, Gongabu</i>
              <i class="far fa-envelope mr-3 text">DiamondGym@gmail.com</i>
              <i class="fas fa-phone mr-3 text">01-4327716</i> -->

                <ul class="list-unstyled text-center">
                  <li class="my-2"><i class="fas fa-home mr-3 text"></i>Baniyatar, Gongabu</li>
                  <li class="my-2"><i class="far fa-envelope mr-3 text">DiamondGym@gmail.com</i></li>
                  <li class="my-2"><i class="fas fa-phone mr-3 text"></i>01-4327716</li>
                </ul>
            </div>

             <!-- <div class="footer-copyright text-center text-secondary py-3 bg-dark">
        <p>&copy; Copyright
          <a href="#" class="my-2 text-white rmv">DiamondGym.com</a></p>
          <p>Designed by DiamondGym</p>
      </div> -->

          </div>
        </div>

    
      <div class="footer-copyright text-center text-secondary py-3 bg-dark">
        <p>&copy; Copyright
          <a href="#" class="my-2 text-white rmv">DiamondGym.com</a></p>
          <p>Designed by DiamondGym</p>
      </div>
        
      </footer>

<!--Google Maps-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity=sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

  </body>

</html>