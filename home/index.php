<! DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bmi.js"></script>

    <title>Home</title>
  </head>
  <body>
    <?php 
      include '../includes/header.php';
    ?>

  <div class="container">
    <div class="welcome text-center">
      <!-- <h1>Welcome To Diamond Gym</h1>
      <p>We provide best services all around the country.</p>
      <button type="submit" class="btn home-btn bg-success">Join us now</button> -->
      <div class="row">
        <div class="col-md-4"><span class="display-4 font-weight-bold text-success">100</span>Clients</div>
        <div class="col-md-4"><span class="display-4 font-weight-bold text-success">100</span> Social </div>
        <div class="col-md-4"><span class="display-4 font-weight-bold text-success">100</span> Trainer</div>
      </div>
      <div class=" mt-4">
        <h1>Welcome To Diamond Gym</h1>
        <p>We provide best services all around the country.</p>
        <button class="btn home-btn bg-success text-light">Join us now</button>
      </div>
    </div>
  

  <!---------------------------Classes-------------------->
    <div class="row my-5 bg-light">
      <h1 class="font-weight-bold text-center">Classes</h1>
      <hr>
        <div class="col-sm-4 shadow-sm p-3 mb-5 bg-light rounded">
          <div class="card" style="width: 18rem;">
            <h3 class="card-title text-center">Gym</h3>
            <div class="inner">
            <img src="image/dumbbell.jpg" class="card-img-top">
            </div>
            <div class="card-body">
              <h5 class="card-title">What is Gym and why we choose them?</h5>
              <p class="card-text">A gym - physical exercises and activities performed inside, often using equipment, especially when done as a subject at school.</p>
              <a href="../classes/gym.php" class="btn btn-light btn-outline-success">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 shadow-sm p-3 mb-5 bg-light rounded">
          <div class="card" style="width: 18rem;">
            <h3 class="card-title text-center">CrossFit</h3>
            <div class="inner">
            <img src="image/crossfit.jpg" class="card-img-top">
            </div>
            <div class="card-body">
              <h5 class="card-title">What is CrossFit and why we choose them?</h5>
              <p class="card-text">Cross Fit is the sport of fitness, both a physical exercise program and a competitive fitness sport.</p>
              <br>
              <a href="../classes/crossfit.php" class="btn btn-light btn-outline-success">Read More</a>
            </div>
          </div>
      </div>

      <div class="col-sm-4 shadow-sm p-3 mb-5 bg-light rounded">
        <div class="card" style="width: 18rem;">
          <h3 class="card-title text-center">Boxing</h3>
          <div class="inner">
          <img src="image/Boxing.jpg" class="card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">What is Boxing and why we choose them?</h5>
            <p class="card-text">Boxing is a martial art and hand to hand combat sport. The aim of boxing is to weaken, out score or knock down.</p>
            <a href="../classes/boxing.php" class="btn btn-light btn-outline-success">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

    
<!---------------------------Fittness----------------------------------->
   <!--  <div class="container bg-dark text-white"> -->
      <div class="row my-5 bg-light " style="width: 100%;">
      <div class="col-md-7 fit">
        <img class="fit_image" src="image/fit.jpg">
      </div> 

      <div class="col-md-1">
        
      </div>

      <div class="col-md-5 write mb-3 mt-2">
        <span class="font-weight-bold text-uppercase font-sm letter-spacing text-secondary">Health is wealth</span>
        <h1>Why <span class="text-danger">Gyming</span> is Good for <span class="text-danger">Health?</span></h1>
        <h4 class="text-secondary">Fittness is not about being better than someone else. It’s about being better than you used to be.</h4>
        <p class="text-secondary">Exercise helps people lose weight and lower the risk of some diseases. Exercising regularly lowers a person's risk of developing some diseases, including obesity, type 2 diabetes, and high blood pressure. Exercise also can help keep your body at a healthy weight.</p>
        <a href="#" class="btn btn-success">Read More</a>
      </div> 

    </div>
    </div>    
<br>

<!--------------------------About Us------------------------------->
  <div class="row my-5 bg-dark text-center text-white" style="width: 100%;">
     <h1 class="font-weight-bold ">About Us</h1>
     <hr>
    <div class="col-md-4 ">
      <img class="img-responsive about" src="image/3.jpg">
      <h3 >Certified Trainers</h3>
      <p >We have trainer who have certified on Fitness Mentors – Personal Training and Online Personal Training Certifications.</p>
    </div>

    <div class="col-md-4">
      <img class="img-responsive about" src="image/10.jpg">
      <h3>Personal Training</h3>
      <p>We provide you many serivces along with personal training and diet physicians.</p>
    </div>

    <div class="col-md-4">
      <img class="img-responsive about" src="image/8.jpg">
      <h3>Modern Equipment</h3>
      <p>We have varities of Modern Equipments that will help you stay fit.</p>
    </div>
  </div>
<!--------------------------Gallery-------------------------------->

    <!-- <div class="row bg-light" style="width: 100%;" > -->
    <h1 class="font-weight-bold text-center">My Gallery</h1>
   <!--  <div class="My_gallery">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 point">
                <a href="4.jpg"><img class="left-block img-responsive gallery" src="image/4.jpg" width="300" height="230" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 point">
                <a href="5.jpg"><img class="left-block img-responsive gallery" src="image/5.jpg" width="300" height="230" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 point">
                <a href="6.jpg"><img class="left-block img-responsive gallery" src="image/6.jpg" width="300" height="230" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 point">
                <a href="9.jpg"><img class="left-block img-responsive gallery" src="image/9.jpg" width="300" height="230" alt="" /></a>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 point">
                <a href="#"><img class="left-block img-responsive gallery" src="image/1.jpg" width="300" height="230" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 point">
                <a href="#"><img class="left-block img-responsive gallery" src="image/8.jpg" width="300" height="230" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 point">
                <a href="#"><img class="left-block img-responsive gallery" src="image/10.jpg" width="300" height="230" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 point">
                <a href="#"><img class="left-block img-responsive gallery" src="image/2.jpg" width="300" height="230" alt="" /></a>
            </div>
        </div>  -->

<br>
<!---------------------------BMI----------------------------------->

       <div class="container">
       <div class="row" style="width: 100%;">
        
        <div class="col-md-5 p-3 shadow" style="margin-left: 70px;">
          <h1 class="font-weight-bold text-center">Calculate your BMI</h1>
          <p>BMI(Body Mass Index)</p>
          <form class="row g-2 my-4">
             <div class="col-6">
                <input type="text" class="form-control" id="height" placeholder="Height/cm">
             </div>
             <div class="col-6">
                <input type="text" class="form-control" id="weight" placeholder="Weight/kg">
             </div>
            <div class="col-6">
                <input type="text" class="form-control" id="inputAge" placeholder="Age">
             </div>

            <div class="col-6">
            <select id="inputState" class="form-select">
              <option>Male</option>
              <option>Female</option>
            </select>            
            </div>

             <div class="md-6">
                <input onclick="calculateBMI()" class="btn btn-light btn-outline-success" id="btn" value="Calculate" type="button">
                <p class="" id="result"></p>
              </div>

          </form>
        </div>


        <div class="col-md-1">
          
        </div>

        <div class="col-md-5 shadow">
          <h1 class="font-weight-bold text-center">Calculate your Calorie </h1>
          <p>Calorie Count</p>
          <form class="row g-2 my-4">
             <div class="col-6">
                <input type="text" class="form-control" id="height" placeholder="Height/cm">
             </div>
             <div class="col-6">
                <input type="text" class="form-control" id="weight" placeholder="Weight/kg">
             </div>
            <div class="col-6">
                <input type="text" class="form-control" id="inputAge" placeholder="Age">
             </div>

            <div class="col-6">
            <select id="inputState" class="form-select">
              <option>Male</option>
              <option>Female</option>
            </select>            
            </div>

             <div class="col-6">
            <select id="inputState" class="form-select">
              <option>Sedentary</option>
              <option>Low Active</option>
              <option>Active</option>
            </select>            
            </div>

             <div class="md-6">
               <button class="btn btn-light btn-outline-success" value="Calculate">Calculate</button>
               <!--  <input onclick="calculateBMI()" class="btn btn-light btn-outline-success" id="btn" value="Calculate" type="button">
                <p class="" id="result"></p> -->
              </div>

          </form>
        </div>
      </div>
    </div>





        <!-- <div class="col-md-6 bg-light">
            <h2>BMI Calculator Chart</h2>
              <ul class="list-group my-4 bm-chart-list ">
              <li class="list-group-item d-flex justify-content-between align-items-center">
               <h6>BMI</h6>
                <h6>Weight Status</h6>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Below 18.5
                <span class="">Underweight</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                18.5 - 24.9
                <span class="">Healthy</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                25.0 - 29.9
                <span class="">Overweight</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                30.0 - and Above
                <span class="">Obese</span>
              </li>

            </ul>  

          </div> -->
      </div>



      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function bmiCalculation() {

      var height = document.getElementsById("inputHeight").value;
      var weight = document.getElementsById("inputWeight").value;
      var age = document.getElementsById("inputAge").value;

      document.getElementsById('FinalBMI').innerHTML = weight/(height*height);  

      }

    </script>

</body>
</html>