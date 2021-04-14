<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <link rel="stylesheet" href="final.css">
      <script src="bmi.js"></script>

    <title>Boxing</title>
  </head>
  <body>
    
    <div class="header">
   <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
              <div class="text-center">
              <p>
              <a class="navbar-brand " href="home.html"><span class="text-weight-bold">Diamond Gym</span>
                 
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
                    <form class="d-flex">
                      <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                      <!-- <button class="btn btn-outline-success bg-dark" type="submit" data-bs-toggle="modal" data-bs-target="#mymodal">Login</button>

                        <div class="modal" id="mymodal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="text-success">Login form</h5>
                                
                              </div>
                              
                            </div>
                          </div> -->
                          <button type="button" class="btn btn-outline-success bg-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                          Login
                        </button>

                        <!-- Modal -->
                        <div class="modal" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <img src="">
                                <!-- <form>
                                  <div class="form-group">
                                    <label>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                     </svg> Username:
                                    </label>

                                  </div>
                                </form> -->
                                <div class="form-floating mb-3">
                                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                  <label for="floatingInput">Username
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                  </label>
                                </div>

                                <div class="form-floating">
                                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                  <label for="floatingPassword">Password
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16"><path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                  </label>
                                </div>

                                 

                                <button type="button" class="btn btn-success">Login</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                
                              </div>

                              <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Login</button> -->
                              </div>
                            </div>
                          </div>
                        </div>
                          
                        </div>
                    </form>
              </div>
            </div>
          </nav>

    </div>

    
     <header>
      <a href="gym.php" class="link text-secondary">Gym</a><span>/</span><a href="crossfit.php" class="link text-secondary">Crossfit</a><span>/</span><a href="boxing.php" class="link text-dark">Boxing</a>
      <br>
          <h2>Introduction to Boxing</h2>
          <br> 
          <img src="image/box1.jpg" class="img-fluid pic">
        </header>


        <div class="row w-100 ">
        <div class="col-md-8">

        <h4 class="text">What is boxing?</h4>
        <p class="para">Boxing is a martial art and hand to hand combat sport. The aim of boxing is to weaken, out score or knock down your opponent for a count of 10 (knockout).</p>
         

        <p class="para" >
       Boxing is an amateur, Olympic and commonwealth sport as well as a professional with its own world championships.
        </p>

         
        <br>
        <h4 class="text">Choosing the right gym</h4>
 

        <p class="para">There are three types of boxing gyms, hard-core fight club, fitness clubs and hybrid clubs. Depending on your reason for joining a boxing club, will depend on the type of club you should select.</p>

        <p class="para">Reasons for joining a boxing club can vary from wanting to compete (fight), release aggression and de-stress, to build confidence, to learn self-defence, to learn discipline or to improve fitness.</p>

        <p class="para">It is important to have a look around a number of boxing gyms and also speak to members and ex-members. Ask how much attention the coaches dedicate to their members. Boxing coaches tend to provide more attention to members who are consistent in attendance and the more advanced boxers, especially those who are competing or have up and coming fights. Other members may receive little or no attention. </p>
      
        <p class="para">Boxing is a tough sport and the training can be very demanding so do not expect conversation during the sessions as they can be very challenging. Boxers with fights lined up will remain focused and in no position for conversation. </p>

         <br>

         <h4 class="text">Who is boxing for?</h4>

         <p class="para">Anyone can attend a boxing club, a lot of boxing clubs run classes for children, mixed classes, seniors and woman only. There is also circuit training and boxercise (a form of exercise class based on boxing training) for all levels of fitness irrespective of your size, shape or sex.  Ideally you should attend at least three times a week to work up a good level of fitness. </p>
         <br>

         <h4 class="text">What to expect</h4>

         <p class="para">Do not expect state of the art equipment or the cleanest of facilities. Although the standard of facilities has improved over the years and most boxing clubs have been run by the same people for years. They normally depend on “subs” or fees paid by the boxers to use the facilities, fund raising events, money and equipment from current and past successful fighters. A lot of ex-professional boxers now run their own boxing gyms. Some newer gyms have better facilities than some of the older gyms however it is a personal choice on which environment you would prefer to train in. </p>

         <p class="para">Most gymnasiums that provide classes, now offer boxercise classes.  If you are looking for a modern gym then health clubs also offer these classes, however the facilities are reflected in the price and you also tend to be a member of the club.</p>

         <p class="para">Boxing training is one, if not the most demanding training session you can take. A large percentage of sports people take boxing training to improve their fitness and performance in their chosen field. You can build up your fitness levels during your first sessions, as the classes will consist of body weight exercises so you can go at your own pace, this will prepare you for the more demanding sessions to come.</p>

         <br>
        <h4 class="text">Costs</h4>

        <img src="pack.jpg" class="img-fluid pack">

         <br>

        <h4 class="text">Opening hours</h4>

        <p class="para">Many have different preferences for when they like to train from early birds at 7 and 7 am till late at night when the gyms empty and you have no distractions. Opening hours is again something you may need to consider depending on your other commitments, child care, working hours etc. Boxing opening is from: <br> <span style="font-weight: bold;">Morning: 7:00am - 10:00am <br> Evening: 4:00pm - 7:00pm</span></p>

         
        <br>
        <h4 class="text">Boxing training</h4>

         

        <p class="para">A typical class will consist of a circuit 3 minutes’ rounds followed by 1 minute rest. An example circuit </p>

        <p class="para">Stretch - 5/10 mins</p>

        <p class="para">skip 3 x 3 mins??Shadow box - 3x3 min rounds (2 rounds are with small hand weights??Bagwork, various bags - 6x3 minute rounds??Circuit training - 6x3 minute rounds??Finish up with sit ups, press ups etc - usually for around 10-15 minutes.??Technique a few times a week and also pad work. Boxing training also incorporate (road work) running to build stamina.</p>

         
        <br>
        <h4 class="text">What are the benefits of boxing?</h4>

        <p class="para">Boxing improves cardiovascular health, which protects you from heart disease and helps maintain weight. Boxing improves your hand-eye coordination. Improves all over body strength. Reduces stress. Boxing can build confidence, develop self control and improve self defense skills.</p>  

       

          </div>
        </div>
     <!--  <div class="text-center">
       <button type="button" class="btn btn-secondary" >Back to top</button>
      </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>