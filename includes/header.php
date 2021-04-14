


<div class="header">
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
                  <?php

            // Including global constants
            include_once 'config.php';

            // Checking user exist or not
            if (isset($_COOKIE['token'])) {
              $token = file_get_contents(API_ENDPOINT.'/token/verify/'.$_COOKIE['token']);
              $token = json_decode($token,TRUE);
              

              if(isset($token) && $token!= FALSE){
                $token = $token[0];
                $USER = [];
                $USER['id'] = $token['id'];
                $USER['name'] = $token['fullName'];
                $USER['username'] = $token['username'];
                
                if($USER['username'] == 'admin'){
                  header ('location: ../admin');
                }
              
              }
              
            }     
            // else if($PAGENAME == 'profile' || $PAGENAME == 'checkout' || $PAGENAME == 'shipping'){
            //   header('Location: ../home');
            //         exit;
            // }           
            

            if(!isset($USER)){
              echo '<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Home</a>
                  </li>';
              echo ' <li class="nav-item">
                    <a class="nav-link" href="../Blog/blog.html">Blog</a>
                  </li>';
                  echo ' <li class="nav-item">
                    <a class="nav-link" href="../shop/index.html">shop</a>
                  </li>';
                  echo '<li class="nav-item">
                    <a class="nav-link" href="../contact/contact.html">Contact Us</a>
                  </li>';
                    echo '<button type="button" class="btn btn-outline-success bg-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                          Login
                        </button>';
            }

            else{
               echo '<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../profile">Profile</a>
                  </li>';
              echo ' <li class="nav-item">
                    <a class="nav-link" href="../exercise">Exercise</a>
                  </li>';
                  echo '<button type="button" class="btn btn-outline-success bg-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                          Logout
                        </button>';

                        echo '
                            <div class="modal" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action="../controller/logout.php" class="modal-body">
            <p class="text-dark">Do you really wanna logout?</p>
          <button type="submit" class="btn btn-danger">Logout</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div> 
                        ';
            }

            unset($CURRENT_PAGE);
            unset($USER);

            ?>

                  
                </ul>
                    <div class="d-flex">
                      
                        <!-- Modal -->
                        <div class="modal" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <form action="../controller/login.php" method="POST" class="modal-body">
                                <img src="">
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" name="username" id="username" placeholder="name@example.com">
                                  <label for="floatingInput">Username
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                  </label>
                                </div>

                                <div class="form-floating">
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                  <label for="floatingPassword">Password
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16"><path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                  </label>
                                </div>

                                <br>

                                <button type="submit" class="btn btn-success">Login</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                
                              </form>
                            </div>
                          </div>
                        </div>
                          
                        </div>
                    </div>
              </div>
        </nav>
    </div>
