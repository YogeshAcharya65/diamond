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

    <title>Gym</title>
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
      <a href="gym.php" class="link text-dark ">Gym</a><span>/</span><a href="crossfit.php" class="link text-secondary">Crossfit</a><span>/</span><a href="boxing.php" class="link text-secondary">Boxing</a>
      <br>
          <h2>Introduction to Gym</h2>
          <br> 
          <img src="image/5.jpg" class="img-fluid responsive pic">
        </header>


        <div class="row w-100 ">
        <div class="col-md-8">

          <h4 class="text">What is a Gym?</h4>
          <p class="para">A gym - physical exercises and activities performed inside, often using equipment, especially when done as a subject at school. Gymnasium is a large room with equipment for exercising the body and increasing strength or a club where you can go to exercise and keep fit.
        </p>
         

        <p class="para">
        A gym is a gymnasium, also known as health club and fitness centre. Gymnasiums have moved away just being a location for gymnastics. Where they had gymnastics apparatus such as bar bells, parallel bars, jumping boards and running path etc.
        </p>

         

        <p class="para">
        A health club, fitness centre is now commonly referred to as a gym.
        </p>

         
        <br>
        <h4 class="text">Choosing the right gym for you</h4>

         

        <p class="para">Most gyms have a wide range of ages and levels of fitness. Don’t buy into the preconception that it will be full of supreme athletes!
        </p>

         <br>

        <h4 class="text">Costs</h4>

        <img src="image/gym1.jpg" class="img-fluid pack p-4">

         <br>

        <h4 class="text">Induction day</h4>

         

        <p class="para">It is important to arrange an induction day prior to you starting to use the gym. This is for your own safety, as misuse of equipment may not just leave you feeling embarrassed but could result in injury. Every gym will offer an induction day.
        Induction days vary from gym to gym, but should ideally include an initial 1-2-1 health and fitness consultation. Your instructor should familiarise you with all gym equipment. Some provide initial exercise programs and regular follow up consultations and reviews.</p>

         
        <br>
        <h4 class="text">What can I expect?</h4>

         

        <p class="para" style="font-weight: bold;">Free weights</p>

         

        <p class="para">Gyms have a main work out area which tends to be divided into a free weights section including dumbbells, bar bells. They may also have exercise machines with free weights or more commonly exercise machines will have their own section.</p>

         

        <p class="para" style="font-weight: bold;">Cardiovascular</p>

         

        <p class="para">The Cardiovascular area with have machines including treadmills (running machines), rowing machines, exercise bikes (stationary).</p>

         

        <p class="para" style="font-weight: bold;">Classes</p>

         

        <p class="para">Classes are group sessions and separate room from the cardio and free weights. Examples of group class exercise include aerobics, Spin (cycling on a stationary bike), boxercise, high intensity training (HIT) and yoga.</p>

         
        <br>
        <h4 class="text">Facilities</h4>

         

        <p class="para" style="font-weight: bold;">Facilities can vary greatly from gym to gym. Not just on a broad range of cardiovascular equipment including:</p>

         

         <p class="para">Treadmills, Rowers, stationary bikes, cross trainers, versa climbers (step machines), steppers, and rowing machines.</p>

         

         <p class="para" style="font-weight: bold;">Resistance training equipment including:</p>

        

         <p class="para">Fixed weight machines, dumbbells, barbells and weight plates.</p>

        

         <p class="para"> Also clean toilets, changing and shower rooms and exercise mats, stability balls and space to exercise.</p>

        

        <p class="para">When choosing your gym you should check there is a number of the equipment you feel you will use more. If you are going to focus on free weight training (dumbbells etc) check they have multiple sets. On weight machines check they have setting from minimal weight to maximum weight to suit your capabilities. Also check have they been maintained and in good condition. If you are going to mainly use of cardio machines again check they have been well maintained, check they have adequate number of machines compared to gym members.</p>

         <br>

        <h4 class="text">Opening hours</h4>

        <p class="para">Many have different preferences for when they like to train from early birds at 7 and 7 am till late at night when the gyms empty and you have no distractions. Opening hours is again something you may need to consider depending on your other commitments, child care, working hours etc. Gym opening is from: <br> <span style="font-weight: bold;">Morning: 5:00am - 11:00am <br> Evening: 3:00pm - 8:00pm</span></p>

        <br>

        <h4 class="text">What are the benefits of going to a gym?</h4>    
        <p class="para">Regular exercise helps control weight when use with a balanced diet. Regular physical activity can help you prevent or manage a wide range of health problems and concerns, including stroke, metabolic syndrome, type 2 diabetes, depression, and certain types of cancer, arthritis and falls. Regular training helps reduce stress and improves moods. Regular weight training can improve muscle mass.</p>  

          </div>
        </div>
      <!-- <div class="text-center">
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