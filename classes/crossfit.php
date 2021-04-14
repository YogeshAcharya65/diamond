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

    <title>CrossFit</title>
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
      <a href="gym.php" class="link text-secondary">Gym</a><span>/</span><a href="crossfit.php" class="link text-dark">Crossfit</a><span>/</span><a href="boxing.php" class="link text-secondary">Boxing</a>
      <br>
          <h2>Introduction to Crossfit</h2>
          <br> 
          <img src="image/cross1.jpg" class="img-fluid pic">
        </header>


        <div class="row w-100 ">
        <div class="col-md-8">

          <h4 class="text">What is a CrossFit?</h4>
          <p class="para">Cross Fit is the sport of fitness, both a physical exercise program and a competitive fitness sport.</p>
         

        <p class="para" style="font-weight: bold;">
        Cross Fit incorporates the following elements:
        </p>

         

        <p class="para">
        <span style="font-weight: bold;">HIT (high intensity training):</span> A form of strength training. The training focuses on performing quality training repetitions to the point of momentary failure. The general philosophy is train harder but train briefer. It focuses on intense bursts of activity and fixed periods of less-intense activity or even complete rest.
        </p>

        <p class="para">
        <span style="font-weight: bold;">Olympic weight lifting:</span> Also called Olympic style weightlifting. It is an athletic discipline in the modern Olympic programme in which the athlete attempts a maximum weight single lift of a barbell loaded with plates. The two competition lifts in order are the snatch and the clean and jerk.
        </p>

         <p class="para">
        <span style="font-weight: bold;">Plyometric:</span>  Also known as jump training or plyos, are an exercise in which muscles exert maximum force in short intervals of time, with the goal of increasing power (speed strength).
        </p>

         <p class="para">
        <span style="font-weight: bold;">Power lifting:</span> Is a form of competitive weightlifting in which contestants attempt three types of a lift in a set sequence Squat, bench press and dead lift.
        </p>

        <p class="para">
        <span style="font-weight: bold;">Girevoy sport(GS):</span>  Also known as kettle bell sport. Highly challenging power endurance and of a cyclical nature. Lifters success involves technique, flexibility, strength and power, proper breathing patterns, aerobic capacity, stability and mental focus. The focus is on power efficiency over a long period of time.
        </p>

        <p class="para">
        <span style="font-weight: bold;">Calisthenics:</span>   Are a form of exercises that consist of a variety of gross movements, often rhythmical, generally without using equipment or apparatus, thus in essence body weight training.
        </p>
        
        <br>
        <h4 class="text">What to expect</h4>
 

        <p class="para">Individuals who attend the many Cross fit gyms across the world complete daily workouts otherwise known as WODs or workouts of the day.
        </p>

        <p class="para">An example of a WOD:</p>

        <p class="para">1 mile run</p>
        <p class="para">100 pull ups</p>
        <p class="para">200 push ups</p>
        <p class="para">300 squats</p>
        <p class="para">1 mile run</p>

        <p class="para">Cross fit is a strength and conditioning program mainly consisting of elements of  high-intensity interval training, Olympic weightlifting, plyometrics, power lifting, gymnastics, girevoy sport, calisthenics, strongman, and other exercises.</p>

        <p class="para">Each class tends to be an hour-long class at affiliated gyms. They typically include a warm-up, a skill development segment, the high-intensity "workout of the day" (or WOD), and a period of individual or group stretching. Some gyms also often have a strength focused movement prior to the WOD.</p>

        <p class="para">Cross Fit gyms provide all necessary equipment from multiple disciplines, including barbells, dumbbells, gymnastics rings, pull-up bars, jump ropes, kettle bells, medicine balls, plyo boxes, resistance bands, rowers, assault air bike and various mats.</p>


         <br>

         <h4 class="text">Who is Cross Fit for?</h4>

         <p class="para">Whether you are a professional athlete or a fitness novice, sessions are scaled to maximise your progress. You will receive on-going instruction and motivation from qualified coaches in each session. Coaches focus on technique as appose to heavy weights. Cross fit appeals to both men and woman, recent studies show participants are almost equal with 50/50 split between the two sexes. Cross Fit kids is now a class offered by many of the clubs nationwide.</p>
         <br>

        <h4 class="text">Costs</h4>

        <img src="image/cross.jpg" class="img-fluid pack p-3">

         <br>

        <h4 class="text">Opening hours</h4>

        <p class="para">Many have different preferences for when they like to train from early birds at 7 and 7 am till late at night when the gyms empty and you have no distractions. Opening hours is again something you may need to consider depending on your other commitments, child care, working hours etc. Crossfit opening is from: <br> <span style="font-weight: bold;">Morning: 5:00am - 11:00am <br> Evening: 3:00pm - 8:00pm</span></p>

         
        <br>
        <h4 class="text">Environment</h4>

         

        <p class="para">Most standard gyms have fancy changing rooms, showers, bars and some with food facilities, where as a standard cross fit gym prides itself on its “community” which consists of Cross Fit beginners, professional athletes, footballers, boxers, teens, children and seniors. Every group has the same goal, improving their own fitness. Everyone is made to feel welcome and supported no matter what their level of fitness, the same standard of coaching is provided, with other members of the “community” welcoming and genuinely cheering you on. The environment in a Cross Fit gym is like no other gym.</p>

         
        <br>
        <h4 class="text">Cross Fit Abbreviations:</h4>

        <p class="para">
        <span style="font-weight: bold;">WOD:</span> Workout of the Day, the key characteristics is a daily workout, hence the “workout of the day
        </p>  

        <p class="para">
        <span style="font-weight: bold;">AMRAP:</span> As many reps as possible
        </p>  

        <p class="para">
        <span style="font-weight: bold;">EMOM:</span> Every minute, on the minute
        </p>         

        
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