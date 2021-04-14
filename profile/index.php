<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">

    <title>Profile</title>
  </head>
  <body class="bg-dark">

    <body class="bg-dark text-white">
   <!--  <div class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
              <div class="text-center">
              <p>
              <a class="navbar-brand " href="home.html"><span class="text-weight-bold">Diamond Gym</span>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
                  <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495L8 13.366l2.532-7.876-5.062.005zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817l5.123-6.83-2.928.002-2.195 6.828z"/>
              </svg>
              </a>
               
              </p>
            </div>


              <div class="collapse navbar-collapse m-3" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../customerHome/home.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Blog/blog.html">Blog</a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href="../shop/shop.html">Shop</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="../contact/contact.html">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div> -->
    <?php 
      include '../includes/header.php';
    ?>

    <div class="title">
    <h1>Welcome Member</h1>
    <hr>
  </div>
    
    <div class="container">
      <div class="row">

        <?php 
          if(isset($_COOKIE['token'])){
            

            $accesstoken = file_get_contents('http://localhost/diamond/api/token/verify/'.$_COOKIE['token']);

            $accesstoken = json_decode($accesstoken,TRUE);

            if ($accesstoken != FALSE){
               $future = strtotime($token['validTo']);
                $timefromdb = time();
                $timeleft = $future-$timefromdb;
                $daysleft = round((($timeleft/24)/60)/60);

              echo '

          <div class="col-md-4 mb-3 p-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                  <div class="mt-3">
                    <h3>'.$token['fullName'].'</h3>
                    <p class="text-secondary mb-1" style="font-size: 22px;">GYM</p>
                    <p class="text-secondary mb-1" style="font-size: 18px;">Time Remaining: <span class="text-danger">'.$daysleft.' Days</span></p>
                    <p class="text-secondary mb-1" style="font-size: 18px;">No notification</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-8 p-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          '.$token['fullName'].'
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          '.$token['username'].'
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          01-4383651
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          '.$token['phone'].'
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          '.$token['address'].'
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Valid From:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          '.$token['validFrom'].'
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Valid To:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          '.$token['validTo'].'
                        </div>
                      </div>

                    </div>
                  </div>
          </div>

              ';



            }
          }

         
        ?>

              <br>

                

      </div>
    </div>
    
          


          
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>